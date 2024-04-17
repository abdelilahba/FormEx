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
        $directories = ['front', 'back'];
        $pgsqlUsername = 'postgres'; // PostgreSQL username
        $pgsqlPort = '21256'; // PostgreSQL port, replace with your port if different

        $pgsqlPassword = 'ZmRmc2FkZFECdets85ddfgrgrgr3WDZmlkbmdhcGRuYTtmbg'; // PostgreSQL password
        $ssh = new SSH2($host);
        if (!$ssh->login($username, $password)) {
            return response()->json(['error' => 'Login Failed'], 401);
        }

        foreach ($directories as $directory) {
            $customLink = $this->getCustomLinkForNewClient(); // Retrieve the custom_link

            $path = "/var/www/expertise/$directory";
            $configPath =
                $directory === 'front'
                    ? '/etc/httpd/conf.d/expertise_front-le-ssl.conf'
                    : '/etc/httpd/conf.d/expertise_back-le-ssl.conf';

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
                $jsonContent = json_encode(
                    ['backendUrl' => $backendUrl],
                    JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
                );
                $ssh->exec(
                    'echo ' .
                        escapeshellarg($jsonContent) .
                        " > $configJsonPath"
                );
            }
            $dbName = $newClientNumber; // Database name based on new client number
            $createDbCommand = "PGPASSWORD='$pgsqlPassword' createdb -U $pgsqlUsername -p $pgsqlPort $dbName";

            $ssh->exec($createDbCommand);

            // Import expertise.sql into the newly created database
            $ $sqlFilePath = "/var/www/expertise/back/expertise.sql"; // Adjust the path as necessary
            $importCommand = "PGPASSWORD='$pgsqlPassword' psql -U $pgsqlUsername -p $pgsqlPort -d $dbName -f $sqlFilePath";
            $ssh->exec($importCommand);

            // Dynamically create VirtualHost entry
            $documentRoot =
                "$path/$newClientNumber" .
                ($directory === 'back' ? '/public' : '');
            $serverName =
                $customLink .
                ($directory === 'back' ? '_api' : '') .
                '.khabirak.pro';
            $newVhostConfig = "<VirtualHost *:443>\n    ServerName $serverName\n    DocumentRoot \"$documentRoot\"\n";
            if ($directory === 'back') {
                $newVhostConfig .= "    ServerAlias www.$serverName\n";
            }
            $newVhostConfig .= "</VirtualHost>\n";

            // Append the new VirtualHost configuration within the IfModule mod_ssl.c block
            $newVhostConfig =
                "echo \"" .
                addslashes($newVhostConfig) .
                "\" | sudo tee -a $configPath > /dev/null";

            $ssh->exec($newVhostConfig);

            // Reload Apache to apply changes
            $ssh->exec('sudo systemctl reload apache2');
        }

        return response()->json([
            'message' =>
                'Clients updated and Apache configuration modified successfully',
        ]);
    }

    // Retrieve the custom link for the new client
    private function getCustomLinkForNewClient()
    {
        // Example: Retrieve a specific customer's custom_link
        $customer = Customer::find(29); // Adjust the ID as necessary
        return $customer ? $customer->custom_link : 'defaultlink.khabirak.pro'; // Provide a default or handle the error
    }
}
