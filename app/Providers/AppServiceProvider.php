<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Statamic\Statamic;

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
        // comment out this and tests will pass
        Statamic::pushCpRoutes(function () {
            Route::redirect('/auth/login', '/login')->withoutMiddleware(
                $this->app[Router::class]->getMiddlewareGroups()['statamic.cp.authenticated']
            );
        });
    }
}
