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

        // Business logic registration
        $this->app->bind("App\Interfaces\Services\Product\ProductServiceInterface", "App\Services\Product\ProductService"); 
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
