<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpseclib3\Net\SSH2;
use App\Models\Customer;

class SSHController extends Controller
{public function connectAndUpdate(Request $request)
    {
        $host = '38.242.134.131'; // Example server IP
        $username = 'root'; // SSH username
        $password = 'H%9S:8,:u#'; // SSH password
        $directories = ['front', 'back'];
    
        $ssh = new SSH2($host);
        if (!$ssh->login($username, $password)) {
            return response()->json(['error' => 'Login Failed'], 401);
        }
    
        foreach ($directories as $directory) {
            $customLink = $this->getCustomLinkForNewClient(); // Retrieve the custom_link
            
            $path = "/var/www/expertise/$directory";
            $configPath = "/etc/httpd/conf.d/expertise_{$directory}-le-ssl.conf";
    
            // Determine the new client number
            $output = $ssh->exec("ls $path");
            $folders = array_filter(explode("\n", $output), function ($folder) {
                return is_numeric($folder);
            });
            $newClientNumber = empty($folders) ? 1 : max($folders) + 1;
    
            // Create the new client folder and copy contents from the update folder
            $ssh->exec("mkdir -p $path/$newClientNumber");
            $ssh->exec("cp -r $path/update/* $path/$newClientNumber/");
    
            if ($directory === 'front') {
                // For the front service, create/update the config.json in the assets folder
                $assetsPath = "$path/$newClientNumber/assets";
                $ssh->exec("mkdir -p $assetsPath"); // Ensure the assets directory exists
                $configJsonPath = "$assetsPath/config.json";
                $backendUrl = "https://{$customLink}_api.khabirak.pro";
                // Generate JSON content without escaping slashes
                $jsonContent = json_encode(['backendUrl' => $backendUrl], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
                $ssh->exec("echo '$jsonContent' > $configJsonPath");
            }
    
            // Update Apache configuration
            $documentRoot = "$path/$newClientNumber" . ($directory === 'back' ? "/public" : "");
            $serverName = $customLink . ($directory === 'back' ? '_api' : '') . '.khabirak.pro';
            $serverAlias = ($directory === 'back' ? "www.$serverName" : "");
            $newVhostConfig = "\n<VirtualHost *:443>\n    ServerName $serverName\n";
            if ($directory === 'back') {
                $newVhostConfig .= "    ServerAlias $serverAlias\n";
            }
            $newVhostConfig .= "    DocumentRoot \"$documentRoot\"\n</VirtualHost>\n";
    
            // Append the new VirtualHost configuration
            $ssh->exec("echo '" . addslashes($newVhostConfig) . "' >> $configPath");
    
            // Reload Apache to apply changes
            $ssh->exec("sudo systemctl reload apache2");
        }
    
        return response()->json(['message' => 'Clients updated and Apache configuration modified successfully']);
    }
    
    // Retrieve the custom link for the new client
    private function getCustomLinkForNewClient() {
        // Example: Retrieve a specific customer's custom_link
        $customer = Customer::find(29); // Adjust the ID as necessary
        return $customer ? $customer->custom_link : 'defaultlink.khabirak.pro'; // Provide a default or handle the error
    }
}
