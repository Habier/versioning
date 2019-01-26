<?php

namespace Habier\Versioning;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class AssetVersioningServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/version.php', 'version');

        // Register the service the package provides.
        /*$this->app->singleton('version', function ($app) {
            return new AssetVersioning;
        });*/
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
 /*   public function provides()
    {
        return ['versioned'];
    }
*/
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__ . '/../config/version.php' => config_path('version.php'),
        ], 'version.config');
    }
}
