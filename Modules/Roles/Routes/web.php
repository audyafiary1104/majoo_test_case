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

Route::group(['middleware' => ['auth'],'prefix'=>'roles'], function () {
    Route::get('/', 'RolesController@index')->name('roles.index')->middleware('permission:view_roles');
    Route::get('/create', 'RolesController@create')->name('create.roles')->middleware('permission:create_roles');
    Route::get('/show/{id}', 'RolesController@show')->name('show.roles')->middleware('permission:edit_roles');
    Route::get('/delete/{id}', 'RolesController@destroy')->name('destroy.roles')->middleware('permission:delete_roles');
    Route::post('/store', 'RolesController@store')->name('store.roles')->middleware('permission:create_roles');
    Route::post('/update/{id}', 'RolesController@update')->name('update.roles')->middleware('permission:edit_roles');
});
