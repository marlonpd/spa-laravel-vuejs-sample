<?php

namespace App\Providers;

use App\Repositories\PersonEloquent;
use App\Repositories\PersonInterface;
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
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PersonInterface::class, PersonEloquent::class);
    }
}
