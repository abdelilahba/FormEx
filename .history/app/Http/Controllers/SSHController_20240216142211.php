<?php

namespace App\Http\Controllers;

use App\Mail\ActivatedCustomerMail;
use App\Mail\CompleteRegistration;
use App\Mail\ValidatedCustomerMail;
use Illuminate\Http\Request;
use phpseclib3\Net\SSH2;
use phpseclib3\Net\SFTP;
use App\Models\Customer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class SSHController extends Controller
{
    private $ssh;
    private $sftp;
    private $host = '38.242.134.131';
    private $username = 'root';
    private $password = 'H%9S:8,:u#';
    private $pgsqlUsername = 'postgres';
    private $pgsqlPassword = 'ZmRmc2FkZFECdets85ddfgrgrgr3WDZmlkbmdhcGRuYTtmbg';
    private $pgsqlPort = '21256';
    private $directories = ['front', 'back'];

    public function __construct()
    {
        set_time_limit(300); // 5 minutes
        $this->ssh = new SSH2($this->host);
        $this->sftp = new SFTP($this->host);

        if (
            !$this->sftp->login($this->username, $this->password) ||
            !$this->ssh->login($this->username, $this->password)
        ) {
            throw new \Exception('Login failed.');
        }
    }

    public function connectAndUpdate(Request $request)
    {
        $customerId = $request->input('id');
        $customer= Customer::findOrFail($customerId);
        $localDirectory = public_path("storage/templates/$customerId");
       
        $newClientNumber = $this->getNewClientNumber();
        $customLink = $this->getCustomLinkForNewClient($customerId);

        foreach ($this->directories as $directory) {
            $this->setUpClientDirectory(
                $directory,
                $newClientNumber,
                $customLink,
                $localDirectory
            );
        }

        $activationLinkDisplay = $this->activate($customerId);
        Mail::to($customer->email)->send(
            new ActivatedCustomerMail($customer,$activationLinkDisplay)
        );

        return response()->json([
            'success' => true,
            'message' => 'Customer activated successfully!',
            'activationLink' => $activationLinkDisplay,
        ]);
    }

    private function getNewClientNumber()
    {
        $maxClientNumbers = array_map(function ($directory) {
            $path = "/var/www/expertise/$directory";
            $output = $this->ssh->exec("ls $path");
            $folders = array_filter(explode("\n", $output), 'is_numeric');
            return $folders ? max($folders) : 0;
        }, $this->directories);

        return max($maxClientNumbers) + 1;
    }

    private function getCustomLinkForNewClient($id)
    {
        $customer = Customer::find($id);
        return $customer ? $customer->custom_link : 'defaultlink.khabirak.pro';
    }

    public function activate($customerId)
    {
        $customer = Customer::find($customerId);
        if ($customer) {
            $customer->state = 1;
            $customer->save();
            return 'https://' . $customer->custom_link . '.khabirak.pro';
        }
    }

    private function listFiles($directory)
    {
        $files = scandir($directory);
        // Filter out . and .. directories
        return array_filter($files, function($file) {
            return !in_array($file, ['.', '..']);
        });
    }
    private function setUpClientDirectory(
        $directory,
        $newClientNumber,
        $customLink,
        $localDirectory
    ) {
        $path = "/var/www/expertise/$directory/$newClientNumber";
        $this->ssh->exec("mkdir -p $path");

        if ($directory === 'front') {
            $this->setupFrontDirectory($path, $customLink);
        } elseif ($directory === 'back') {
            $this->setupBackDirectory(
                $path,
                $newClientNumber,
                $customLink,
                $localDirectory
            );
        }

        $this->updateApacheConfiguration($directory, $path, $customLink);
    }

    private function setupFrontDirectory($path, $customLink)
    {
        $copyCommand = "cp -a /var/www/expertise/front/01/. $path/";
        $this->ssh->exec($copyCommand);

        $assetsPath = "$path/assets";
        $this->ssh->exec("mkdir -p $assetsPath");

        $configJsonPath = "$assetsPath/config.json";
        $backendUrl = "https://{$customLink}_api.khabirak.pro";
        $jsonArray = ['backendUrl' => $backendUrl];
        $jsonContent = json_encode(
            $jsonArray,
            JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT
        );

        $createCommand = "echo   '$jsonContent'  >  '$configJsonPath'";

        // Execute the command
        $this->ssh->exec($createCommand);
    }

    private function setupBackDirectory(
        $path,
        $newClientNumber,
        $customLink,
        $localDirectory
    ) {
        $copyCommand = "cp -a /var/www/expertise/back/update/. $path/";
        $this->ssh->exec($copyCommand);

        $dbName = "$newClientNumber"; // Prefixing for better DB name management
        $envPath = "$path/.env";
        $this->updateEnvFile($envPath, $dbName);

        $this->createAndImportDatabase($dbName);

        // $this->uploadFilesToRemoteDirectory(
        //     $localDirectory,
        //     "/var/www/expertise/back/$newClientNumber/public/template/"
        // );

        // Custom operations for the back directory
        $this->ssh->exec(
            "cd $path && composer require tymon/jwt-auth && php artisan vendor:publish --provider=\"Tymon\\JWTAuth\\Providers\\LaravelServiceProvider\" && yes | php artisan jwt:secret"
        );
        $this->ssh->exec("chmod -R 777 $path/storage"); // Consider more secure permissions
    }

    private function updateApacheConfiguration($directory, $path, $customLink)
    {
        $configPath =
            $directory === 'front'
                ? '/etc/httpd/conf.d/expertise_front-le-ssl.conf'
                : '/etc/httpd/conf.d/expertise_back-le-ssl.conf';
        $serverName =
            $customLink .
            ($directory === 'back' ? '_api' : '') .
            '.khabirak.pro';
        $documentRoot = $path . ($directory === 'back' ? '/public' : '');
        $newVhostConfig = "<VirtualHost *:443>\n    ServerName $serverName\n    DocumentRoot \"$documentRoot\"\n</VirtualHost>\n";

        $this->ssh->exec(
            "echo \"" .
                addslashes($newVhostConfig) .
                "\" | sudo tee -a $configPath > /dev/null"
        );
        $this->ssh->exec('sudo systemctl reload httpd'); // Use reload instead of restart to avoid downtime
    }

    private function updateEnvFile($envPath, $dbName)
    {
        $updateCommand = "sed -i 's/DB_DATABASE=.*/DB_DATABASE=$dbName/' $envPath";
        $this->ssh->exec($updateCommand);
    }

    private function createAndImportDatabase($dbName)
    {
        $createDbCommand = "PGPASSWORD='{$this->pgsqlPassword}' createdb -U {$this->pgsqlUsername} -h 127.0.0.1 -p {$this->pgsqlPort} \"$dbName\"";
        $this->ssh->exec($createDbCommand);

        $importCommand = "PGPASSWORD='{$this->pgsqlPassword}' psql -U {$this->pgsqlUsername} -h 127.0.0.1 -p {$this->pgsqlPort} -d \"$dbName\" -f /var/www/expertise/back/expertise.sql";
        $this->ssh->exec($importCommand);
    }

    private function uploadFilesToRemoteDirectory($localDirectory, $remoteDirectory)
    {
       
       
      
    
        $files = $this->listFiles($localDirectory);
        $checkAndCleanDirCommand = "mkdir -p $remoteDirectory && rm -rf $remoteDirectory*";
                 $this->ssh->exec($checkAndCleanDirCommand);
   
        foreach ($files as $file) {
            $localFilePath = $localDirectory . '/' . $file;
            $remoteFilePath = $remoteDirectory . $file;
          
    
            // Upload the file from local to remote path
            if (!$this->sftp->put($remoteFilePath, $localFilePath, SFTP::SOURCE_LOCAL_FILE)) {
                // Log or handle the error if file upload fails
                // This is a placeholder, replace with actual error handling code
                error_log("Failed to upload $localFilePath to $remoteFilePath");
            }
        }
    }
    
}
