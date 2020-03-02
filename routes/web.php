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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([ 'register' => false ]);

Route::prefix('admin')
    ->middleware(array('auth'))
    ->namespace('Admin')
    ->group(function (){

        // Admin Dashboard
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');

        // Pages
        // Products
});