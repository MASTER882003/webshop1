<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    'product' => 'ProductController',
    'category' => 'CategoryController',
]);

//Route::get('/product', 'ProductController@index')->name('product.index');
//Route::get('/product/create', 'ProductController@create')->name('product.create');
//Route::post('/product/store', 'ProductController@store')->name('product.store');
//Route::get('/product/{product}/destroy/', 'ProductController@destroy')->name('product.destroy');
//Route::get('/product/{product}', 'ProductController@show')->name('product.show');
//Route::get('/product/{product}/edit/', 'ProductController@edit')->name('product.edit');
//Route::post('/product/update/{product}', 'ProductController@update')->name('product.update');


Route::get('/cart/add/{product}', 'CartController@add')->name('cart.add');
Route::get('/api/add/', 'ApiController@products')->name('api.products');
