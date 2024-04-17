<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpseclib3\Net\SSH2;

class SSHController extends Controller
{
    public function connect(Request $request)
    {
        $host = 'your_server_ip'; // Update with your server IP or hostname
        $port = 22; // Default SSH port is 22
        $username = 'your_username'; // SSH username
        $password = 'your_password'; // SSH password

        $ssh = new SSH2($host, $port);
        if (!$ssh->login($username, $password)) {
            return response()->json(['error' => 'Login Failed'], 401);
        }

        // Example command
        $output = $ssh->exec('ls -l');
        return response()->json(['output' => $output]);
    }
}
