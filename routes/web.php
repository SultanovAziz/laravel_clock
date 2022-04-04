<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','MainController@index')->name('home');
Route::get('/currency/change','CurrencyController@change');
Route::get('/product/{alias}','ProductController@index')->name('product.alias');
Route::get('/categories/{alias}','CategoriesController@index')->name('categories.alias');

