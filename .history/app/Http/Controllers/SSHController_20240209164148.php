<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpseclib3\Net\SSH2;

class SSHController extends Controller
{
    public function connect(Request $request)
    {
        $host = '38.242.134.131'; // Update with your server IP or hostname
        $port = 22; // Default SSH port is 22
        $username = 'admin'; // SSH username
        $password = '-2?j^XtLo&oXb9'; // SSH password

        $ssh = new SSH2($host, $port);
        if (!$ssh->login($username, $password)) {
            return response()->json(['error' => 'Login Failed'], 401);
        }

        // Example command
        $output = $ssh->exec('ls -l');
        return response()->json(['output' => $output]);
    }
}
