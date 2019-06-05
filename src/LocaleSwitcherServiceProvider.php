<?php

namespace Vectorwyse\LocaleSwitcher;

use Illuminate\Support\ServiceProvider;
use Vectorwyse\LocaleSwitcher\Http\Middleware\SetLocale;

class LocaleSwitcherServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__.'/config/locales.php', 'app');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'locale-switcher');
        app('router')->pushMiddlewareToGroup('web', SetLocale::class);
    }
}
