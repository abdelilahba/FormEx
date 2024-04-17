<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpseclib3\Net\SSH2;
use App\Models\Customer;

class SSHController extends Controller
{
    public function connectAndUpdate(Request $request)
    {
        $host = 'your_server_ip'; // Update with your server IP or hostname
        $username = 'your_username'; // SSH username
        $password = 'your_password'; // SSH password
        $directories = ['front', 'back'];
    
        $ssh = new SSH2($host);
        if (!$ssh->login($username, $password)) {
            return response()->json(['error' => 'Login Failed'], 401);
        }
    
        foreach ($directories as $directory) {
            // Assuming you have a method to get the custom_link for the new client
            $customLink = $this->getCustomLinkForNewClient(); // This is a placeholder, implement accordingly
    
            $path = "/var/www/expertise/$directory";
            $configPath = "/etc/httpd/conf.d/expertise_{$directory}-le-ssl.conf";
    
            // List all client folders, filter them, and determine the new client number
            $output = $ssh->exec("ls $path");
            $folders = array_filter(explode("\n", $output), function ($folder) {
                return is_numeric($folder);
            });
            $newClientNumber = empty($folders) ? 1 : max($folders) + 1;
    
            // Create the new client folder
            $ssh->exec("mkdir $path/$newClientNumber");
    
            // Copy contents from the update folder to the new client folder
            $ssh->exec("cp -r $path/update/* $path/$newClientNumber/");
    
            // Update Apache configuration
            $documentRoot = $directory === 'front' ? "/var/www/expertise/front/$newClientNumber/" : "/var/www/expertise/back/$newClientNumber/public";
            $serverName = $customLink . ($directory === 'back' ? '_api' : '') . '.khabirak.pro';
            $newVhostConfig = "\n<VirtualHost *:443>\n    ServerName $serverName\n    DocumentRoot \"$documentRoot\"\n</VirtualHost>\n";
    
            // Append the new VirtualHost configuration
            $ssh->exec("echo '$newVhostConfig' >> $configPath");
    
            // Optional: Reload Apache to apply changes - Ensure your user has the necessary sudo permissions without a password prompt for this command
            $ssh->exec("sudo systemctl reload apache2");
        }
    
        return response()->json(['message' => 'Clients updated and Apache configuration modified successfully']);
    }
    
    // Placeholder method - implement this based on your actual logic to retrieve the custom link
    private function getCustomLinkForNewClient() {
        $customer = Customer::find(29);
        $customLink=$customer->custom_link;
        // Your logic here to retrieve the custom link from the database
        return $customLink; // Example return value
    }

}
