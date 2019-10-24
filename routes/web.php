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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// --- NAPA ---
//Front
Route::prefix('')->namespace('Front')->group(function () {
   //Route::middleware('auth')->group(function () {	
   // --- grant ---
      //Route::get('/grant', 'Front\GrantController@index')->name('grant');
      //Route::post('/grantstore', 'Front\GrantController@store')->name('grantstore');
      Route::get('/grant', 'GrantController@index')->name('grant');
      Route::post('/grantstore', 'GrantController@store')->name('grantstore');      
   //});
});