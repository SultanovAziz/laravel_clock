<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoriesController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[MainController::class,'index'])->name('home');
Route::get('/currency/change',[CurrencyController::class,'change'])->name('currency');
Route::get('/product/{alias}',[ProductController::class,'index'])->name('product.alias');
Route::get('/categories/{alias}',[CategoriesController::class,'index'])->name('categories.alias');
Route::get('/cart/show',function () {

})->name('cart.show');


