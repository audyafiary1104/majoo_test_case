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

Route::group(['middleware' => ['auth'],'prefix'=>'customer'], function () {
    Route::get('/', 'CustomerController@index')->middleware('permission:view_customer');
    Route::post('/store', 'CustomerController@store')->name('store.customer')->middleware('permission:create_customer');
    Route::post('/update/{id}', 'CustomerController@update')->name('update.customer')->middleware('permission:edit_customer');
    Route::get('/delete/{id}', 'CustomerController@destroy')->name('destroy.customer')->middleware('permission:delete_customer');
});
