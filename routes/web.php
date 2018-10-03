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

//Route::resource('/products', 'ProductController');

Route::get('/products')
    ->uses('ProductController@index')
    ->name('products');

Route::post('/products/create')
    ->uses('ProductController@store')
    ->name('product.add');

Route::get('/products/create')
    ->uses('ProductController@create')
    ->name('product-form');

Route::get('/products/delete')
    ->uses('ProductController@destroy')
    ->name('product-table-delete');