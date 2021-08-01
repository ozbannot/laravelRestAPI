<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
        \App\Repositories\TestRepositoryInterface::class,
        \App\Repositories\TestRepository::class,
        );
        $this->app->bind(
        \App\Repositories\ProductRepositoryInterface::class,
        \App\Repositories\ProductRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
