<?php

namespace Subashrijal5\ChatgptLaravel;

use Illuminate\Support\ServiceProvider;

class ChatgptLaravelServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'subashrijal5');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'subashrijal5');
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
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/chatgpt-laravel.php', 'chatgpt-laravel');

        // Register the service the package provides.
        $this->app->singleton('chatgpt-laravel', function ($app) {
            return new ChatgptLaravel;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['chatgpt-laravel'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/chatgpt-laravel.php' => config_path('chatgpt-laravel.php'),
        ], 'chatgpt-laravel.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/subashrijal5'),
        ], 'chatgpt-laravel.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/subashrijal5'),
        ], 'chatgpt-laravel.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/subashrijal5'),
        ], 'chatgpt-laravel.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
