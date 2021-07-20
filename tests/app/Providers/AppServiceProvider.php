<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\HelpReturn;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \View::composer('layouts.app', function ($view) {
            $view->with('helps', \App\HelpReturn::all());
        });
    }
}
