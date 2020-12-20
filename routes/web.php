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

/*Route::get('/', function() {
    return view('welcome');
});*/

Route::get('/', 'HomeController@index')->name('start');

Auth::routes();

Route::get('products/{product}/delete', 'ProductController@delete')
    ->name('products.delete');
Route::resource('/products', 'ProductController');

Route::get('categories/{category}/delete', 'CategoryController@delete')
    ->name('categories.delete');
Route::resource('/categories', 'CategoryController');
