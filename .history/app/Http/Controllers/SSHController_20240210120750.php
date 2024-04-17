<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpseclib3\Net\SSH2;
use App\Models\Customer;

class SSHController extends Controller
{
    public function connectAndUpdate(Request $request)
    {
        set_time_limit(300); // Extend the execution time to 5 minutes to prevent timeouts
    
        // SSH and database configuration
        $host = '38.242.134.131';
        $username = 'root';
        $password = 'H%9S:8,:u#';
        $pgsqlUsername = 'postgres';
        $pgsqlPassword = 'ZmRmc2FkZFECdets85ddfgrgrgr3WDZmlkbmdhcGRuYTtmbg';
        $pgsqlPort = '21256';
        $directories = ['front', 'back'];
    
        $ssh = new SSH2($host);
        if (!$ssh->login($username, $password)) {
            return response()->json(['error' => 'Login Failed'], 401);
        }
    
        $maxClientNumbers = $this->getMaxClientNumbers($ssh, $directories);
        $newClientNumber = max($maxClientNumbers) + 1;
    
        foreach ($directories as $directory) {
            $customLink = $this->getCustomLinkForNewClient();
            $path = "/var/www/expertise/$directory";
            $configPath = $directory === 'front' ? '/etc/httpd/conf.d/expertise_front-le-ssl.conf' : '/etc/httpd/conf.d/expertise_back-le-ssl.conf';
    
            $ssh->exec("mkdir -p $path/$newClientNumber");
            $ssh->exec("cp -r $path/update/. $path/$newClientNumber/");
    
            if ($directory === 'front') {
                $this->configureFrontDirectory($ssh, $path, $newClientNumber, $customLink);
            }
    
            if ($directory === 'back') {
                $this->configureBackDirectory($ssh, $directory, $path, $newClientNumber, $pgsqlUsername, $pgsqlPassword, $pgsqlPort, $customLink, $configPath);
            }
        }
    
        return response()->json(['message' => 'Clients updated, databases created, and data imported successfully']);
    }
    

    private function getMaxClientNumbers($ssh, $directories)
    {
        $maxClientNumbers = [];
        foreach ($directories as $directory) {
            $path = "/var/www/expertise/$directory";
            $output = $ssh->exec("ls $path");
            $folders = array_filter(explode("\n", $output), fn($folder) => is_numeric($folder));
            $maxClientNumbers[] = !empty($folders) ? max($folders) : 0;
        }
        return $maxClientNumbers;
    }

    private function getCustomLinkForNewClient()
    {
        // This is a placeholder. Implement the logic to retrieve the custom link for the new client.
        // For example, fetching from a database or configuration.
        $customer = Customer::find(29); // Example: fetching from the database
        return $customer ? $customer->custom_link : 'defaultlink.khabirak.pro';
    }

    private function configureFrontDirectory($ssh, $path, $newClientNumber, $customLink)
    {
        $assetsPath = "$path/$newClientNumber/assets";
        $ssh->exec("mkdir -p $assetsPath");
        $configJsonPath = "$assetsPath/config.json";
        $backendUrl = "https://{$customLink}_api.khabirak.pro";
        $jsonContent = json_encode(['backendUrl' => $backendUrl], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        $ssh->exec("echo " . escapeshellarg($jsonContent) . " > $configJsonPath");
    }

    private function configureBackDirectory($ssh, $directory,  $path, $newClientNumber, $pgsqlUsername, $pgsqlPassword, $pgsqlPort, $customLink, $configPath)
    {
        $envDestinationPath = "$path/$newClientNumber/.env";
        $ssh->exec("cp -r $path/update/. $path/$newClientNumber/"); // Ensures .env is copied
        $dbName = "expertise_client_$newClientNumber"; // Database name format
        $updateEnvCommand = "sed -i 's/DB_DATABASE=.*/DB_DATABASE=\"$dbName\"/' $envDestinationPath"; // Corrected to include quotes
        $ssh->exec($updateEnvCommand);
        $createDbCommand = "PGPASSWORD='$pgsqlPassword' createdb -U $pgsqlUsername -h 127.0.0.1 -p $pgsqlPort \"$dbName\"";
        $ssh->exec($createDbCommand);
        $sqlFilePath = '/var/www/expertise/back/expertise.sql';
        $importCommand = "PGPASSWORD='$pgsqlPassword' pg_restore -U $pgsqlUsername -h 127.0.0.1 -p $pgsqlPort -d \"$dbName\" -j 4 $sqlFilePath";
        $ssh->exec($importCommand);
        $this->updateApacheConfiguration($ssh, $directory, $path, $newClientNumber, $customLink, $configPath);

    }

    private function updateApacheConfiguration($ssh, $directory, $path, $newClientNumber, $customLink, $configPath)
    {
        $documentRoot = "$path/$newClientNumber" . ($directory === 'back' ? '/public' : '');
        $serverName = $customLink . ($directory === 'back' ? '_api' : '') . '.khabirak.pro';
        $newVhostConfig = "<VirtualHost *:443>\n    ServerName $serverName\n    DocumentRoot \"$documentRoot\"\n";
        if ($directory === 'back') {
            $newVhostConfig .= "    ServerAlias www.$serverName\n";
        }
        $newVhostConfig .= "</VirtualHost>\n";
        $ssh->exec("echo \"" . addslashes($newVhostConfig) . "\" | sudo tee -a $configPath > /dev/null");
        $ssh->exec('sudo systemctl reload apache2');
    }
}
