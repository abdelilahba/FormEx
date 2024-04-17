<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpseclib3\Net\SSH2;
use App\Models\Customer;

class SSHController extends Controller
{
    
    public function connectAndUpdate(Request $request)
    {
        $host = '38.242.134.131'; // Server IP
        $username = 'root'; // Consider using a less privileged user
        $password = 'H%9S:8,:u#'; // Consider more secure ways to handle passwords
        $directories = ['front', 'back'];
    
        $ssh = new SSH2($host);
        if (!$ssh->login($username, $password)) {
            return response()->json(['error' => 'Login Failed'], 401);
        }
    
        foreach ($directories as $directory) {
            $customLink = $this->getCustomLinkForNewClient(); // Ensure this is sanitized
    
            $path = "/var/www/expertise/$directory";
            $configPath = "/etc/httpd/conf.d/expertise_{$directory}-le-ssl.conf";
    
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
                // Use base64 to safely transfer JSON content through SSH
                $jsonContentBase64 = base64_encode($jsonContent);
                $ssh->exec("echo $jsonContentBase64 | base64 --decode > $configJsonPath");
            }
    
            $documentRoot = "$path/$newClientNumber" . ($directory === 'back' ? "/public" : "");
            $serverName = $customLink . ($directory === 'back' ? '_api' : '') . '.khabirak.pro';
            $newVhostConfig = "<VirtualHost *:443>\n    ServerName $serverName\n    DocumentRoot \"$documentRoot\"\n";
            if ($directory === 'back') {
                $serverAlias = "www.$serverName";
                $newVhostConfig .= "    ServerAlias $serverAlias\n";
            }
            $newVhostConfig .= "</VirtualHost>\n";
    
            // Properly escape the new vhost config for shell
            $newVhostConfigEscaped = escapeshellarg($newVhostConfig);
            $ssh->exec("echo $newVhostConfigEscaped >> $configPath");
    
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
