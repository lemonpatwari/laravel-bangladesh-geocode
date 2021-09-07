<?php

namespace lemonpatwari\bangladeshgeocode\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class LpCommand extends Command
{
    protected $hidden = false; // if hidden on the command class then use true

    protected $signature = 'geolocation:install';

    protected $description = 'Install the migration and seeders file';

    public function handle()
    {
        $this->info('Installing migration and seeders...');


        $this->publishConfiguration();
        $this->info('Published configuration');

        exec('composer dump-autoload');
        $this->info('composer dump-autoload complete.');

        $migrate = \Artisan::call('migrate');
        $this->info('migrate complete.');

        $migrate = \Artisan::call('db:seed --class=DivisionSeeder');
        $this->info('Division seeder run complete.');

        $migrate = \Artisan::call('db:seed --class=DistrictSeeder');
        $this->info('District seeder run complete.');

        $migrate = \Artisan::call('db:seed --class=ThanaSeeder');
        $this->info('Thana / Upazila seeder run complete.');

        $migrate = \Artisan::call('db:seed --class=UnionSeeder');
        $this->info('Union seeder run complete.');

        $this->info('Installed migration and seeders');
    }

    private function publishConfiguration($forcePublish = false)
    {
        $params = [
            '--provider' => "lemonpatwari\bangladeshgeocode\BangladeshGeocodeServiceProvider"
        ];

        if ($forcePublish === true) {
            $params['--force'] = true;
        }

        $this->call('vendor:publish', $params);
    }
}
