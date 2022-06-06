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
    Route::get('/', 'ProductController@index')->name('product.index')->middleware('permission:view_product');
    Route::get('/create', 'ProductController@create')->name('create.product')->middleware('permission:create_product');
    Route::get('/edit/{id}', 'ProductController@edit')->name('edit.product')->middleware('permission:edit_transaction');
    Route::post('/store', 'ProductController@store')->name('store.product')->middleware('permission:create_product');
    Route::post('/update/{id}', 'ProductController@update')->name('update.product')->middleware('permission:edit_product');
    Route::get('/destroy/{id}', 'ProductController@destroy')->name('destroy.product')->middleware('permission:delete_product');
});
