<?php

namespace App\Providers;

use App\Repositories\Implementations\PeopleRepository;
use App\Repositories\Interfaces\IPeopleRepository;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->app->bind(IPeopleRepository::class, PeopleRepository::class);
    }
}
