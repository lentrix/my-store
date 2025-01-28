<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Welcome');
});

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/products/{category}', [ProductController::class, 'index'])->name('products.index');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
