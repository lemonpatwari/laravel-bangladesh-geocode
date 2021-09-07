<?php

namespace lemonpatwari\bangladeshgeocode;

use Illuminate\Support\ServiceProvider;

class BangladeshGeocodeServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        /*
                 * Optional methods to load your package assets
                 */

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__.'/../database/migrations' => database_path('migrations'),
            ],'lp-bangladesh-geocode-migrations');

            $this->publishes([
                __DIR__.'/../database/seeders' => database_path('seeders'),
            ],'lp-bangladesh-geocode-seeders');

        }

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }
}
