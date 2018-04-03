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

Route::get('/', 'SiteController@index');

Auth::routes();

Route::get('/admin', 'Admin\AdminController@index')->name('home');

Route::prefix('admin')->group(function () {
    Route::resource('blogs', 'Admin\BlogController');
});
