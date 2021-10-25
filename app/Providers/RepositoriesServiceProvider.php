<?php

namespace App\Providers;

use App\Repositories\EloquentUserrepository;
use App\Repositories\IUserrepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
       // $this->app->bind(IUserrepository::class,EloquentUserrepository::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
