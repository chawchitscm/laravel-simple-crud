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
        // Dao Registration
        $this->app->bind("App\Interfaces\Dao\Product\ProductDaoInterface", "App\Dao\Product\ProductDao");
        $this->app->bind("App\Interfaces\Dao\Auth\AuthDaoInterface", "App\Dao\Auth\AuthDao");

        // Business logic registration
        $this->app->bind("App\Interfaces\Services\Product\ProductServiceInterface", "App\Services\Product\ProductService"); 
        $this->app->bind("App\Interfaces\Services\Auth\AuthServiceInterface", "App\Services\Auth\AuthService"); 
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
