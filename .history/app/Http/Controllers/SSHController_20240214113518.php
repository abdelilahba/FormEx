<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpseclib3\Net\SSH2;
use App\Models\Customer;

class SSHController extends Controller
{
    public function connectAndUpdate(Request $request)
    {
        set_time_limit(300); // Sets the execution time limit to 5 minutes

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
            $configPath =
                $directory === 'front'
                    ? '/etc/httpd/conf.d/expertise_front-le-ssl.conf'
                    : '/etc/httpd/conf.d/expertise_back-le-ssl.conf';

            // Create the new directory and copy update contents

            $ssh->exec("mkdir -p $path/$newClientNumber");

            if ($directory === 'front') {
                
                $copyCommand = "sh -c 'cp -a \"" . addslashes($path) . "/01/.\" \"" . addslashes($path) . "/$newClientNumber/\"'";

                $ssh->exec($copyCommand);
                // Specific operations for the 'front' directory
                $assetsPath = "$path/$newClientNumber/assets";
                // Ensure the assets directory is created
                $ssh->exec("mkdir -p $assetsPath");
                $configJsonPath = "$assetsPath/config.json";
             //   $backendUrl = "https://{$customLink}_api.khabirak.pro";
                $backendUrl = [
                    "backendUrl" => "https://{$customLink}_api.khabirak.pro"
                ];

                // Explicitly define the JSON structure
                $jsonContent = json_encode($backendUrl);

                $command = "echo " . escapeshellarg($jsonContent) . " > " . escapeshellarg($configJsonPath);

                $ssh->exec($command);


                // Generate the JSON string
                // $jsonContent = json_encode(
                //     $jsonArray,
                //     JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT
                // );

                // Prepare the command to write the JSON to the file
                $command =
                    'echo ' .
                    escapeshellarg($jsonContent) .
                    " > $configJsonPath";

                // Execute the command
                $ssh->exec($command);
            }

            // Create and import database for the 'back' directory or shared
            if ($directory === 'back') {
                // $envSourcePath = "$path/update/.env";
                $envDestinationPath = "$path/$newClientNumber/.env";

                // Ensure the .env file is copied, including hidden files
                $copyCommand = "sh -c 'cp -a $path/update/. $path/$newClientNumber/'";
                $ssh->exec($copyCommand);

                // Read, update, and write the .env with the new DB_DATABASE

                $dbName = $newClientNumber;
                // Command to update DB_DATABASE in .env
                $updateEnvCommand = "sed -i 's/DB_DATABASE=.*/DB_DATABASE=$dbName/' $envDestinationPath";
                $ssh->exec($updateEnvCommand);

                $createDbCommand = "PGPASSWORD='$pgsqlPassword' createdb -U $pgsqlUsername -h 127.0.0.1  -p $pgsqlPort \"$dbName\"";
                $ssh->exec($createDbCommand);

                $sqlFilePath = '/var/www/expertise/back/expertise.sql';
                $importCommand = "PGPASSWORD='$pgsqlPassword' psql  -U $pgsqlUsername  -h 127.0.0.1 -p $pgsqlPort  -d \"$dbName\" -f  $sqlFilePath";
                $ssh->exec($importCommand);
            }

            // Update Apache configuration
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
            $ssh->exec(
                "echo \"" .
                    addslashes($newVhostConfig) .
                    "\" | sudo tee -a $configPath > /dev/null"
            );

            // Reload Apache to apply changes
            $navigateToBackDirCommand = "cd $path/$newClientNumber";
            $ssh->exec($navigateToBackDirCommand);

            // Install JWT Auth using Composer
            $composerRequireCommand = 'composer require tymon/jwt-auth';
            $ssh->exec($composerRequireCommand);

            // Publish the JWT Auth config
            $publishVendorCommand =
                "php artisan vendor:publish --provider=\"Tymon\\JWTAuth\\Providers\\LaravelServiceProvider\"";
            $ssh->exec($publishVendorCommand);

            // Generate the JWT secret, forcing yes to any prompts
            $jwtSecretCommand = 'yes | php artisan jwt:secret';
            $ssh->exec($jwtSecretCommand);

            // Set permissions - Be cautious with setting 777 permissions
            $chmodCommand = "sudo chmod -R 777 $path/$newClientNumber/storage";
            $ssh->exec($chmodCommand);
            $ssh->exec(' sudo systemctl restart httpd');
        }

        return response()->json([
            'message' =>
                'Clients updated, databases created, and data imported successfully',
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
