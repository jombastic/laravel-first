<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \Blade;
use Illuminate\Support\Facades\Schema;

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
        // makes recentPosts variable available to every view of the application
        // view()->share('recentPosts', Post::recent());

        // view()->composer('partials.sidebar', function($view) {
        //     $view->with('recentPosts', Post::recent());
        // });

        // view()->composer(['partials.header', 'partials.footer'], function($view) {
        //     $view->with('recentPosts', Post::recent());
        // });

        // view()->composer('partials.*', function($view) {
        //     $view->with('recentPosts', Post::recent());
        // });
        Schema::defaultStringLength(191);

    }
}
