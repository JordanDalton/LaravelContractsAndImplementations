<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
             \App\Contracts\Dvr::class,
             \App\Implementations\Haydon::class
         );

        $this->app
            ->when(\App\Http\Controllers\HoneywellController::class)
            ->needs(\App\Contracts\Dvr::class)
            ->give(\App\Implementations\Honeywell::class);

        $this->app
            ->when(\App\Http\Controllers\HaydonController::class)
            ->needs(\App\Contracts\Dvr::class)
            ->give(\App\Implementations\Haydon::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
