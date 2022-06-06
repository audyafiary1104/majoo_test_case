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

Route::group(['middleware' => ['auth'],'prefix'=>'product'], function () {
    Route::get('/', 'ProductController@index')->name('product.index');
    Route::get('/create', 'ProductController@create')->name('create.product');
    Route::get('/edit/{id}', 'ProductController@edit')->name('edit.product');
    Route::post('/store', 'ProductController@store')->name('store.product');
    Route::post('/update/{id}', 'ProductController@update')->name('update.product');
    Route::get('/destroy/{id}', 'ProductController@destroy')->name('destroy.product');
});
