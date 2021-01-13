<?php

namespace FireBender\Laravel\Widgets\Providers;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider

{
    /**
     * 
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'widgets');
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
    }

    /**
     * 
     */
    public function register()
    {
    }

}
