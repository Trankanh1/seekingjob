<?php

namespace App\Providers;

use App\Models\ClientModel;
use Illuminate\Support\ServiceProvider;
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
        $this->app->bind('App\Repositories\Interfaces\RepositoryInterface', 'App\Repositories\JobRepository');
        $this->app->bind('App\Repositories\Interfaces\RepositoryInterface', 'App\Repositories\CompanyRepository');
        $this->app->bind('App\Repositories\Interfaces\RepositoryInterface', 'App\Repositories\ReviewRepository');
   
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        
    }
}
