<?php

namespace Rakshitbharat\Cleanify;

use Illuminate\Support\ServiceProvider;

class CleanifyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        if ($this->app->runningInConsole()) {
            $this->commands([
                ConsoleCommand::class
            ]);
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('cleanify.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'cleanify');

        // Register the main class to use with the facade
        $this->app->singleton('cleanify', function () {
            return new Cleanify;
        });
    }
}
