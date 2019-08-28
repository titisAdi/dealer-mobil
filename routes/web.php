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

Route::get('login', array('uses' => 'LoginController@showLogin'));
Route::post('login', array('uses' => 'LoginController@doLogin'));

Route::get('dashboard', array('uses' => 'DashboardController@showDashboard'));
Route::post('input-mobil', 'DashboardController@insertMobil')->name('input-mobil');
Route::get('mobil-list', 'DashboardController@showData'); 

Route::get('/', function () {
    return view('welcome');
});
