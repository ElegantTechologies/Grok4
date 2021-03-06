<?php

namespace ElegantTechnologies\Grok4;

use Illuminate\Support\ServiceProvider;

class Grok4ServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'eleganttechnologies');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'eleganttechnologies');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

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
        $this->mergeConfigFrom(__DIR__.'/../config/grok4.php', 'grok4');

        // Register the service the package provides.
        $this->app->singleton('grok4', function ($app) {
            return new Grok4;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['grok4'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/grok4.php' => config_path('grok4.php'),
        ], 'grok4.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/eleganttechnologies'),
        ], 'grok4.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/eleganttechnologies'),
        ], 'grok4.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/eleganttechnologies'),
        ], 'grok4.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
