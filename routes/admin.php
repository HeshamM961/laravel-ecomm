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
Route::get('login', 'AdminController@login')->name('admin.login');

Route::group(['middleware' => ['admin']], function () {
    // Dashboard Index
    Route::get("dashboard", 'AdminController@dashboard');

});

