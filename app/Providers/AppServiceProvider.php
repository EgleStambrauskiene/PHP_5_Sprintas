<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// For MariaDB < 10.2.2
// use Illuminate\Support\Facades\Schema;

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
        // For MariaDB < 10.2.2
        // Schema::defaultStringLength(191);
        $this->app->bind('Msg', function ($app) {
            return new App\Services\MsgService();
        });
    }
}
