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

Route::prefix('auth')->group(function() {
    Route::get('/', 'AuthController@index')->name('auth')->middleware('guest');
    Route::get('/logout', 'AuthController@index')->name('logout')->middleware('auth');
    Route::post('/login', 'AuthController@login')->name('auth.login');
});
