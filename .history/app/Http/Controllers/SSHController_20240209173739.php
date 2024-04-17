<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpseclib3\Net\SSH2;

class SSHController extends Controller
{
    public function connectAndUpdate(Request $request)
    {
        $host = '38.242.134.131'; // Update with your server IP or hostname
        $username = 'root'; // SSH username
        $password = 'H%9S:8,:u#'; // SSH password
        $directories = ['front', 'back'];

        $ssh = new SSH2($host);
        if (!$ssh->login($username, $password)) {
            return response()->json(['error' => 'Login Failed'], 401);
        }

        foreach ($directories as $directory) {
            // Navigate to the directory
            $path = "/var/www/expertise/$directory";

            // List all client folders and filter them
            $output = $ssh->exec("ls $path");
            $folders = array_filter(explode("\n", $output), function($folder) {
                return is_numeric($folder);
            });

            // Determine the highest client number and increment
            $newClientNumber = empty($folders) ? 1 : max($folders) + 1;

            // Create the new client folder
            $ssh->exec("mkdir $path/$newClientNumber");

            // Copy contents from the update folder to the new client folder
            $ssh->exec("cp -r $path/update/* $path/$newClientNumber/");
        }

        return response()->json(['message' => 'Clients updated successfully']);
    }
}
