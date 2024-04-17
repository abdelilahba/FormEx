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
        $pgsqlUsername = 'your_pgsql_user'; // PostgreSQL username
        $pgsqlPassword = 'your_pgsql_password'; // PostgreSQL password
        $pgsqlPort = '21256'; // PostgreSQL port, replace with your port if different
        $directories = ['front', 'back'];
    
        $ssh = new SSH2($host);
        if (!$ssh->login($username, $password)) {
            return response()->json(['error' => 'Login Failed'], 401);
        }
    
        foreach ($directories as $directory) {
            $customLink = $this->getCustomLinkForNewClient(); // Retrieve the custom_link
    
            $path = "/var/www/expertise/$directory";
            $output = $ssh->exec("ls $path");
            $folders = array_filter(explode("\n", $output), function ($folder) {
                return is_numeric($folder);
            });
            $newClientNumber = empty($folders) ? 1 : max($folders) + 1;
    
            $ssh->exec("mkdir -p $path/$newClientNumber");
            $ssh->exec("cp -r $path/update/* $path/$newClientNumber/");
    
            if ($directory === 'front') {
                $assetsPath = "$path/$newClientNumber/assets";
                $ssh->exec("mkdir -p $assetsPath");
                $configJsonPath = "$assetsPath/config.json";
                $backendUrl = "https://{$customLink}_api.khabirak.pro";
                $jsonContent = json_encode(['backendUrl' => $backendUrl], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
                $ssh->exec('echo ' . escapeshellarg($jsonContent) . " > $configJsonPath");
            }
    
            // Create a new PostgreSQL database for the new client
            $dbName = $newClientNumber; // Database name based on new client number
            $createDbCommand = "PGPASSWORD='$pgsqlPassword' createdb -U $pgsqlUsername -p $pgsqlPort $dbName";
            $ssh->exec($createDbCommand);
    
            // Import expertise.sql into the newly created database
            $sqlFilePath = "/var/www/expertise/back/expertise.sql"; // Adjust the path as necessary
            $importCommand = "PGPASSWORD='$pgsqlPassword' psql -U $pgsqlUsername -p $pgsqlPort -d $dbName -f $sqlFilePath";
            $ssh->exec($importCommand);
    
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
