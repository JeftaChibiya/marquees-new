<?php

namespace App\Providers;

use Auth;
use App;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{   

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['partials.navbar', 'partials.bd-navbar', 'layouts.main'], function($view) {
            
            $categories = \App\Category::all();
            $view->with(compact('categories')); // share variable categories

        });

        view()->composer('auth.passwords.verify-password', function($view) {
            
            $user = Auth::user();
            $view->with(compact('user')); // share variable categories

        });   
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
