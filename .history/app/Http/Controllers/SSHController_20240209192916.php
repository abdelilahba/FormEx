<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpseclib3\Net\SSH2;
use App\Models\Customer;

class SSHController extends Controller
{
    public function connectAndUpdate(Request $request)
    {
        $host = '38.242.134.131'; // Example server IP
        $username = 'root'; // SSH username
        $password = 'H%9S:8,:u#'; // SSH password
        $pgsqlUsername = 'postgres'; // PostgreSQL username
        $pgsqlPassword = 'ZmRmc2FkZFECdets85ddfgrgrgr3WDZmlkbmdhcGRuYTtmbg'; // PostgreSQL password
        $pgsqlPort = '21256'; // PostgreSQL port, replace with your port if different
        $directories = ['front', 'back'];
    
        $ssh = new SSH2($host);
        if (!$ssh->login($username, $password)) {
            return response()->json(['error' => 'Login Failed'], 401);
        }
    
        // Step 1: Determine the greatest existing client number for both directories
        $maxClientNumbers = [];
        foreach ($directories as $directory) {
            $path = "/var/www/expertise/$directory";
            $output = $ssh->exec("ls $path");
            $folders = array_filter(explode("\n", $output), function ($folder) {
                return is_numeric($folder);
            });
            $maxClientNumbers[] = !empty($folders) ? max($folders) : 0;
        }
        
        // Step 2: Compare and use the greater number, incremented by 1
        $newClientNumber = max($maxClientNumbers) + 1;
    
        foreach ($directories as $directory) {
            $customLink = $this->getCustomLinkForNewClient(); // Assume this retrieves a valid link
            $path = "/var/www/expertise/$directory";
            $configPath = $directory === 'front' ? '/etc/httpd/conf.d/expertise_front-le-ssl.conf' : '/etc/httpd/conf.d/expertise_back-le-ssl.conf';
    
            // Create the new directory and copy update contents
            $ssh->exec("mkdir -p $path/$newClientNumber");
            $ssh->exec("cp -r $path/update/* $path/$newClientNumber/");
            
            if ($directory === 'front') {
                // Specific operations for the 'front' directory
                $assetsPath = "$path/$newClientNumber/assets";
                $ssh->exec("mkdir -p $assetsPath");
                $configJsonPath = "$assetsPath/config.json";
                $backendUrl = "https://{$customLink}_api.khabirak.pro";
                $jsonContent = json_encode(['backendUrl' => $backendUrl], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
                $ssh->exec('echo ' . escapeshellarg($jsonContent) . " > $configJsonPath");
            }
    
            // Create and import database for the 'back' directory or shared
            if ($directory === 'back' || count($directories) == 1) {
                $dbName = "expertise_client_" . $newClientNumber; 
                $createDbCommand = "PGPASSWORD='$pgsqlPassword' createdb -U $pgsqlUsername -p $pgsqlPort \"$dbName\"";
                $ssh->exec($createDbCommand);
    
                $sqlFilePath = "/var/www/expertise/back/expertise.sql";
                $importCommand = "PGPASSWORD='$pgsqlPassword' psql -U $pgsqlUsername -p $pgsqlPort -d \"$dbName\" -f $sqlFilePath";
                $ssh->exec($importCommand);
            }
    
            // Update Apache configuration
            $documentRoot = "$path/$newClientNumber" . ($directory === 'back' ? '/public' : '');
            $serverName = $customLink . ($directory === 'back' ? '_api' : '') . '.khabirak.pro';
            $newVhostConfig = "<VirtualHost *:443>\n    ServerName $serverName\n    DocumentRoot \"$documentRoot\"\n";
            if ($directory === 'back') {
                $newVhostConfig .= "    ServerAlias www.$serverName\n";
            }
            $newVhostConfig .= "</VirtualHost>\n";
            $ssh->exec("echo \"" . addslashes($newVhostConfig) . "\" | sudo tee -a $configPath > /dev/null");
    
            // Reload Apache to apply changes
            $ssh->exec('sudo systemctl reload apache2');
        }
    
        return response()->json(['message' => 'Clients updated, databases created, and data imported successfully']);
    }
    
    // Retrieve the custom link for the new client
    private function getCustomLinkForNewClient()
    {
        // Example: Retrieve a specific customer's custom_link
        $customer = Customer::find(29); // Adjust the ID as necessary
        return $customer ? $customer->custom_link : 'defaultlink.khabirak.pro'; // Provide a default or handle the error
    }
}
