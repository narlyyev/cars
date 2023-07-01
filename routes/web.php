<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(HomeController::class)
    ->group(function () {
        Route::get('', 'index')->name('home');
    });


Route::controller(CategoryController::class)
    ->group(function () {
        Route::get('category/{id}', 'show')->name('category.show');
    });

Route::controller(BrandController::class)
    ->group(function () {
        Route::get('brand/{slug}', 'show')->name('brand.show');
    });

Route::controller(ProductController::class)
    ->group(function () {
        Route::get('product/{slug}', 'show')->name('product.show');
    });