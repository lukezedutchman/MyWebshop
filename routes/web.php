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
    return view('../auth/login');
});

Route::get('/home', function () {
    return view('/webshop/home');
});

Route::get('categories', function () {
    return view('/webshop/categories');
});

Route::get('/product', function () {
    return view('/webshop/product');
});

Route::get('/addproduct', 'ProductController@create');

Route::post('/store', 'ProductController@store')->name('create.store');

Auth::routes();


/*Route::get('/login', 'HomeController@index')->name('home');

Route::get('/finance', function () {
    return view('/finance/finance_index');
});*/

