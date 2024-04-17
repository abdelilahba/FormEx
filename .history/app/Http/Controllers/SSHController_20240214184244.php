<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpseclib3\Net\SSH2;
use phpseclib3\Net\SFTP;
use App\Models\Customer;

class SSHController extends Controller
{
    protected $ssh;
    protected $sftp;
    protected $host = '38.242.134.131';
    protected $username = 'root';
    protected $password = 'H%9S:8,:u#';
    protected $pgsqlUsername = 'postgres';
    protected $pgsqlPassword = 'ZmRmc2FkZFECdets85ddfgrgrgr3WDZmlkbmdhcGRuYTtmbg';
    protected $pgsqlPort = '21256';
    protected $directories = ['front', 'back'];

    public function __construct()
    {
        $this->ssh = new SSH2($this->host);
        $this->sftp = new SFTP($this->host);

        if (!$this->sftp->login($this->username, $this->password) || !$this->ssh->login($this->username, $this->password)) {
            throw new \Exception('Login Failed');
        }
    }

    public function connectAndUpdate(Request $request)
    {
        $customerId = $request->input('id');
        $localDirectory = public_path("storage/templates/$customerId");
        $newClientNumber = $this->getNewClientNumber();
        $customLink = $this->getCustomLinkForNewClient($customerId);

        foreach ($this->directories as $directory) {
            $this->prepareDirectory($directory, $newClientNumber, $customerId, $localDirectory);
            $this->updateApacheConfigAndPermissions($directory, $newClientNumber, $customLink);
        }

        $activationLinkDisplay = $this->activate($customerId);

        return response()->json([
            'success' => true,
            'message' => 'Customer activated successfully!',
            'activationLink' => $activationLinkDisplay,
        ]);
    }

    private function getNewClientNumber()
    {
        $maxClientNumbers = [];
        foreach ($this->directories as $directory) {
            $path = "/var/www/expertise/$directory";
            $output = $this->ssh->exec("ls $path");
            $folders = array_filter(explode("\n", $output), function ($folder) {
                return is_numeric($folder);
            });
            $maxClientNumbers[] = !empty($folders) ? max($folders) : 0;
        }
        return max($maxClientNumbers) + 1;
    }

    private function prepareDirectory($directory, $newClientNumber, $customerId, $localDirectory)
    {
        $path = "/var/www/expertise/$directory/$newClientNumber";
        $this->ssh->exec("mkdir -p $path");
    
        if ($directory === 'front') {
            // Copying the template for the 'front' directory
            $copyCommand = "cp -a /var/www/expertise/$directory/template/. $path/";
            $this->ssh->exec($copyCommand);
            // Handle additional front-specific setup here
            $assetsPath = "$path/$newClientNumber/assets";
              $customLink = $this->getCustomLinkForNewClient($customerId);
                // Ensure the assets directory is created
                $this->ssh->exec("mkdir -p $assetsPath");
                $configJsonPath = "$assetsPath/config.json";
                $backendUrl = "https://{$customLink}_api.khabirak.pro";

                // Explicitly define the JSON structure
                $jsonArray = ['backendUrl' => $backendUrl];

                // Generate the JSON string
                $jsonContent = json_encode(
                    $jsonArray,
                    JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT
                );

                $removeCommand = 'rm -f ' . escapeshellarg($configJsonPath);
                $this->ssh->exec($removeCommand);

                // Prepare the command to write the JSON to the file
                $createCommand = "echo   '$jsonContent'  >  '$configJsonPath'";

                // Execute the command
                $this->ssh->exec($createCommand);
        }
    
        if ($directory === 'back') {
            // Assuming template copy for 'back' directory as well
            $copyTemplateCommand = "cp -a /var/www/expertise/$directory/template/. $path/";
            $this->ssh->exec($copyTemplateCommand);
            
    
            // Prepare and import database for 'back' directory
            $dbName = "client_db_$newClientNumber"; // Customize DB naming as needed
            $createDbCommand = "PGPASSWORD='$this->pgsqlPassword' createdb -U $this->pgsqlUsername -h localhost -p $this->pgsqlPort \"$dbName\"";
            $this->ssh->exec($createDbCommand);
    
            $importDbCommand = "PGPASSWORD='$this->pgsqlPassword' psql -U $this->pgsqlUsername -h localhost -p $this->pgsqlPort -d \"$dbName\" -f /path/to/initial_db.sql";
            $this->ssh->exec($importDbCommand);
    
            // Update .env or other config files as needed
            $updateConfigCommand = "echo \"DB_DATABASE=$dbName\" >> $path/.env"; // Example for .env
            $this->ssh->exec($updateConfigCommand);
        }
    
        // Upload files from local storage to the remote server
        $files = $this->listFiles($localDirectory);
        foreach ($files as $file) {
            $localFilePath = "$localDirectory/$file";
            $remoteFilePath = "$path/$file";
            $this->sftp->put($remoteFilePath, $localFilePath, SFTP::SOURCE_LOCAL_FILE);
        }
    }

    private function updateApacheConfigAndPermissions($directory, $newClientNumber, $customLink)
    {
        $path = "/var/www/expertise/$directory/$newClientNumber";
        $configPath = $directory === 'front' ? '/etc/httpd/conf.d/expertise_front.conf' : '/etc/httpd/conf.d/expertise_back.conf';
    
        $serverName = $customLink . ($directory === 'back' ? '_api' : '') . '.khabirak.pro';
        $vhostConfig = "<VirtualHost *:80>\nServerName $serverName\nDocumentRoot \"$path\"\n</VirtualHost>\n";
    
        // Append the new VirtualHost configuration to the Apache config file
        $this->ssh->exec("echo '$vhostConfig' >> $configPath");
    
        // Set permissions
        $this->ssh->exec("chown -R www-data:www-data $path");
        $this->ssh->exec("chmod -R 755 $path");
    
        // Optionally reload Apache to apply changes
        $this->ssh->exec("systemctl reload apache2");
    }

    private function activate($customerId)
    {
        $customer = Customer::find($customerId);
        if (!$customer) {
            throw new \Exception("Customer not found.");
        }

        $customer->state = 1; // Assuming 1 represents 'Active'
        $customer->save();

        return 'https://' . $customer->custom_link . '.khabirak.pro';
    }

    private function getCustomLinkForNewClient($id)
    {
        $customer = Customer::find($id);
        return $customer ? $customer->custom_link : 'defaultlink.khabirak.pro';
    }

    private function listFiles($directory)
    {
        $files = scandir($directory);
        return array_filter($files, function ($file) {
            return !in_array($file, ['.', '..']);
        });
    }
}
