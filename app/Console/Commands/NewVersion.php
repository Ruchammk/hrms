<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use File;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class NewVersion extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hrm:version {version}';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create version';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $version = $this->argument('version');

        $this->clean();
        if ($this->confirm('Do you wish to create branch ' . $version . ' and push to gitlab?', 'yes')) {
            $this->createBranch($version);
        }

        $path = $this->createVersionZip($version);

        $this->createAutoUpdate($version);

        // Grab Filename and path
        $filePath = $path . '.zip';
        $array = explode('/', $filePath);
        $filename = end($array);

        if ($this->confirm('Do you wish upload branch ' . $filePath . ' to codecanyon server?', 'yes')) {

            if (env('FTP_HOST') == '') {
                $this->error('Please create the variables FTP_HOST, FTP_USERNAME, FTP_PASSWORD in .env file to process it');
                return false;
            }

            $this->uploadToCodecanyon($filePath, $filename);

        }

    }

    private function createBranch($version)
    {
        $currentBranch = exec('git branch | grep \* | cut -d \' \' -f2');

        $this->info('Delete old branch ' . $version . ' locally....');
        $this->comment('git branch -d ' . $version);
        echo exec('git branch -d ' . $version) . PHP_EOL;

        $this->info('Delete old branch ' . $version . ' from server....');
        $this->comment('git push origin --delete ' . $version);
        echo exec('git push origin --delete ' . $version) . PHP_EOL;

        $this->info('Create new branch ' . $version . ' ....');
        $this->comment('git branch ' . $version);
        echo exec('git branch ' . $version) . PHP_EOL;

        $this->info('Push to server branch ' . $version . ' ....');
        $this->comment('git checkout ' . $version . PHP_EOL . 'git push origin ' . $version);
        echo exec('git checkout ' . $version) . PHP_EOL;
        echo exec('git push origin ' . $version) . PHP_EOL;

        $this->info('Switching back to current branch ' . $currentBranch . ' ....');
        $this->comment('git checkout ' . $currentBranch . PHP_EOL . 'git push origin ' . $currentBranch);
        echo exec('git checkout ' . $currentBranch) . PHP_EOL;
        echo exec('git push origin ' . $currentBranch) . PHP_EOL;
    }

    private function createVersionZip($version)
    {
        $this->output->progressStart(13);


        $folder = 'hrm-saas-' . $version;
        $path = '../versions/' . $folder;
        $local = '../hrm-saas/';

        $this->output->progressAdvance();
        $this->info(' Creating Versions....');
        $this->info(' Removing old ' . $folder . ' folder to create the new');
        echo exec('rm -rf ' . $path . '/');

        $this->output->progressAdvance();
        $this->info(' Creating the directory ' . $folder . '/script');
        echo exec('mkdir -p ' . $path . '/script');

        $this->output->progressAdvance();
        $this->info(' removing old version.txt file');
        echo exec('rm ' . $local . '/public/version.txt');

        $this->info(' Copying version to know the version to version.txt file');
        echo exec('echo ' . $version . '>> ' . $local . 'public/version.txt');

        $this->output->progressAdvance();
        $this->info(' removing old last-updated.txt file');
        echo exec('rm ' . $local . '/public/last-updated.txt');

        $this->info(' Copying version to know the version to last-updated.txt file');
        echo exec('echo ' . Carbon::now()->format('jS, F Y h:i:s A  T') . '>> ' . $local . 'public/last-updated.txt');


        $this->output->progressAdvance();
        $this->info(' Copying files from ' . $local . ' ' . $path . '/script');
        echo exec('rsync -av --progress ' . $local . ' ' . $path . '/script --exclude=".git" --exclude=".phpintel" --exclude=".env" --exclude=".idea"');

        $this->output->progressAdvance();
        $this->info(' Creating the directory ' . $path . '/script');
        echo exec('mkdir -p ' . $path . '/script');

        $this->output->progressAdvance();
        $this->info(' Removing installed');
        echo exec('rm -rf ' . $path . '/script/storage/installed');

        $this->output->progressAdvance();
        $this->info(' Removing legal file');
        echo exec('rm -rf ' . $path . '/script/storage/legal');

        $this->output->progressAdvance();
        $this->info(' Removing Laravel Log file');
        echo exec('rm -rf ' . $path . '/script/storage/logs/laravel.log');

        $this->output->progressAdvance();
        $this->info(' Removing laraupdater.json and upload.sh file');
        echo exec('rm -rf ' . $path . '/script/laraupdater.json');
        echo exec('rm -rf ' . $path . '/script/upload.sh');

        $this->output->progressAdvance();
        $this->info(' Delete Storage Folder Files');
        echo exec('rm -rf ' . $path . '/script/public/storage');

        $this->output->progressAdvance();
        $this->info(' Removing symlink');
        echo exec('find ' . $path . '/script/storage/app/public \! -name ".gitignore" -delete');

        $this->output->progressAdvance();
        $this->info(' Copying .env.example to .env');
        echo exec('cp ' . $path . '/script/.env.example ' . $path . '/script/.env');

        $this->output->progressAdvance();
        $this->info(' removing old version.txt file');
        echo exec('rm ' . $path . '/script/public/version.txt');

        $this->output->progressAdvance();
        $this->info(' Copying version to know the version to version.txt file');
        echo exec('echo ' . $version . '>> ' . $path . '/script/public/version.txt');

        $this->output->progressAdvance();
        $this->info(' Moving script/documentation to separate folder');
        echo exec('mv ' . $path . '/script/documentation ' . $path . '/documentation/');

        // Zipping the folder
        $this->output->progressAdvance();
        $this->info(' Zipping the folder');
        echo exec('cd ../versions; zip -r ' . $folder . '.zip ' . $folder . '/');
        $this->output->progressFinish();

        return $path;
    }

    private function createAutoUpdate($version)
    {
        //start quick update version
        $this->output->progressStart(8);
        $folder = 'hrm-saas-auto-' . $version;
        $path = '../versions/auto-update/'.$folder;
        $local = '../hrm-saas/';

        $this->output->progressAdvance();
        $this->info(' Creating Auto update version....');
        $this->info(' Removing old ' . $folder . ' folder to create the new');
        echo exec('rm -rf ' . $path . '/' . $folder);


        $this->output->progressAdvance();
        $this->info(' Creating the directory ' . $path . '/script');
        echo exec('mkdir -p ' . $path . '/script');

        $this->output->progressAdvance();
        $this->info(' Copying files from ' . $local . ' to ' . $path);
        echo exec('rsync -av --progress ' . $local . ' ' . $path . '/script --exclude=".git" --exclude=".phpintel" --exclude=".env" --exclude="public/.htaccess" --exclude="public/favicon" --exclude="public/favicon.ico" --exclude=".gitignore" --exclude=".idea"');

        $this->output->progressAdvance();
        $this->info(' Removing legal file');
        echo exec('rm -rf ' . $path . '/script/storage/legal');

        $this->info(' Removing Laravel Log file');
        echo exec('rm -rf ' . $path . '/script/storage/logs/laravel.log');

        $this->info(' Removing Documentation folder');
        echo exec('rm -rf ' . $path . '/script/documentation');

        $this->output->progressAdvance();
        $this->info(' Removing laraupdater.json and upload.sh file');
        echo exec('rm -rf ' . $path . '/script/laraupdater.json');
        echo exec('rm -rf ' . $path . '/script/upload.sh');


        $this->output->progressAdvance();
        $this->info(' Delete Storage Folder Files');
        echo exec('rm -rf ' . $path . '/public/storage');

        $this->output->progressAdvance();
        $this->info(' Removing symlink');
        echo exec('find ' . $path . '/storage/app/public \! -name ".gitignore" -delete');

        $this->output->progressAdvance();
        $this->info(' removing old version.txt file');
        echo exec('rm ' . $path . '/public/version.txt');

        $this->output->progressAdvance();
        $this->info(' Copying version to know the version to version.txt file');
        echo exec('echo ' . $version . '>> ' . $path . '/public/version.txt');
        $this->output->progressFinish();

        return $path;
    }

    private function uploadToCodecanyon($filePath, $filename)
    {
        $this->output->progressStart(2);
        $localFile = File::get($filePath);

        $this->info('Uploading to server....');
        $this->output->progressAdvance();

        Storage::disk('custom-ftp')->put($filename, $localFile);
        $this->info('Done....');

        $this->output->progressFinish();
    }
    private function clean(){
        $this->info(' debugbar:clear');
        Artisan::call('debugbar:clear');

        $this->info(' vendor:cleanup');
        Artisan::call('vendor:cleanup');

        $this->info(' cache:clear');
        Artisan::call('cache:clear');

        $this->info(' view:clear');
        Artisan::call('view:clear');

        $this->info(' config:clear');
        Artisan::call('config:clear');
    }

}
