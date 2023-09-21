<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

// Login
Route::group(['middleware' => ['admin']], function () {
    Route::get('dashboard', 'AdminController@dashboard')->name('adminn.dashboard');

    //Logout
    Route::get('logout', 'AdminController@logout')->name('admin.logout');
});
