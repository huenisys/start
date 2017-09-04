<?php

namespace Huenisys\Start;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class StartServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/tpl.php' => config_path('tpl.php'),
        ], 'start-config');

        // generates an sqlite db
        $this->publishes([
            __DIR__.'/../database' => database_path(),
        ], 'start-sqdb');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/start.php', 'start'
        );

        $this->app->singleton('start', function ($app) {
            return new Start($app);
        });
    }

}
