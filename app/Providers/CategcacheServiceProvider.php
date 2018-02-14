<?php

namespace App\Providers;

use App;
use Illuminate\Support\ServiceProvider;
use App\EloquentCategories as EloquentCategories;
use App\CacheableCategories as CacheableCategories;

class CategcacheServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('App\Categories', function () {

            return new CacheableCategories(new EloquentCategories);

        });        
    }
}
