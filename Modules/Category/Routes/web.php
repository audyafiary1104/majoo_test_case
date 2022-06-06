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

Route::group(['middleware' => ['auth'],'prefix'=>'category'], function () {
    Route::get('/', 'CategoryController@index')->middleware('permission:view_category');
    Route::get('/delete/{id}', 'CategoryController@destroy')->name('delete.category')->middleware('permission:delete_category');
    Route::post('/store', 'CategoryController@store')->name('store.category')->middleware('permission:create_category');
    Route::post('/update/{id}', 'CategoryController@update')->name('update.category')->middleware('permission:edit_category');
});
