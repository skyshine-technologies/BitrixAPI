<?php

namespace Skyshinein31\Bitrix;

use Illuminate\Support\ServiceProvider;

class BitrixServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Skyshinein31\Bitrix\BitrixController');
        $this->loadViewsFrom(__DIR__.'/views', 'bitrix');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
        include_once __DIR__.'/sdk/crest.php';
    }
}
