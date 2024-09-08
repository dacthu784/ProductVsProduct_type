<?php

namespace App\Providers;

use App\Models\ProductType;
use Illuminate\Support\ServiceProvider;
use App\Repository\Interface\ProductRepositoryInterface;
use App\Repository\Interface\ProductTypeRepositoryInterface;
use App\Repository\ProductTypeRepository;
use App\Repository\ProductRepository;
use App\Services\ProductService;
use App\Services\ProductTypeService;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ProductTypeRepositoryInterface:: class,ProductTypeRepository:: class);
        $this->app->bind(ProductRepositoryInterface:: class,ProductRepository:: class);
        $this->app->bind(ProductService:: class,ProductService:: class);
        $this->app->bind(ProductTypeService:: class,ProductTypeService:: class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    }
}
