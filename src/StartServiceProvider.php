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

        // publishes tpl's assets [bs4, popper, etc]
        $this->publishes([
            __DIR__.'/../resources/database' => database_path(),
        ], 'start-seeder');
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

    public function setTemplateGlobals()
    {
        $tpl_globals = Config::get('tpl');
        foreach ($tpl_globals as $key => $value) {
            View::share($key, $value);
        }

    }
}
