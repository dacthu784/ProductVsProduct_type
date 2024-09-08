<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;
use Illuminate\Support\Facades\Route;
//Route::get('products', [ProductController::class, 'index']);
Route::apiResource('products', ProductController::class);
Route::apiResource('product-types', ProductTypeController::class);
?>
