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

        exec('composer dump-autoload');
        echo 'composer dump-autoload complete.' . "\r\n";

        $migrate = \Artisan::call('migrate');
        echo 'migrate complete.' . "\r\n";

        $migrate = \Artisan::call('db:seed --class=DivisionSeeder');
        echo 'Division seeder run complete.' . "\r\n";

        $migrate = \Artisan::call('db:seed --class=DistrictSeeder');
        echo 'District seeder run complete.' . "\r\n";

        $migrate = \Artisan::call('db:seed --class=ThanaSeeder');
        echo 'Thana seeder run complete.' . "\r\n";

        $migrate = \Artisan::call('db:seed --class=UnionSeeder');
        echo 'Union seeder run complete.' . "\r\n";

        $this->info('Installed migration and seeders');
    }
}
