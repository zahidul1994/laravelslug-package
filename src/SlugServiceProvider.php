<?php

namespace Sohibd\Laravelslug;

use Illuminate\Support\ServiceProvider;

class SlugServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'laravelslug');
        $this->mergeConfigFrom(
            __DIR__.'/config/laravelslug.php', 'laravelslug'
        );
        $this->publishes([
            __DIR__.'/config/laravelslug.php' => config_path('laravelslug.php'),
        ]);
        
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        
    }
}
