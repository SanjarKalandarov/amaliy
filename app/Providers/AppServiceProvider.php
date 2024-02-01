<?php

namespace App\Providers;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
//        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
        View::composer('layout.master', function ($view) {
            $view->with('current_locale', App::currentLocale());
            $view->with('all_locales',config('app.all_locales'));
        });
        JsonResource::withoutWrapping();
    }
}
