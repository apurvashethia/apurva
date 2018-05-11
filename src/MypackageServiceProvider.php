<?php

namespace Apurva\Mypackage;

use Illuminate\Support\ServiceProvider;

class MypackageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()  
    {
           include __DIR__.'/routes.php';

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Apurva\Mypackage\MypackageController');
        $this->loadViewsFrom(__DIR__.'/views', 'mypackage');

    }
}
