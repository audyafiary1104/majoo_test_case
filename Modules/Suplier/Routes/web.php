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

Route::group(['middleware' => ['auth'],'prefix'=>'suplier'], function () {
    Route::get('/', 'SuplierController@index')->middleware('permission:view_suplier');
    Route::post('/store', 'SuplierController@store')->name('suplier.store')->middleware('permission:create_suplier');
    Route::post('/update/{id}', 'SuplierController@update')->name('update.suplier')->middleware('permission:edit_suplier');
    Route::get('/delete/{id}', 'SuplierController@destroy')->name('destroy.suplier')->middleware('permission:delete_suplier');
});
