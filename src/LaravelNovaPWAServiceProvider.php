<?php

namespace Sergeich5\LaravelNovaPwa;

use Illuminate\Support\ServiceProvider;

class LaravelNovaPWAServiceProvider extends ServiceProvider
{
    function register()
    {
        //
    }

    function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'nova-pwa');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/nova-pwa'),
        ], 'nova-pwa-view');

        $this->publishes([
            __DIR__ . '/../config/nova-pwa.php' => config_path('nova-pwa.php'),
        ], 'nova-pwa-config');
    }
}
