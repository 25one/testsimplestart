<?php

/*Route::get('/', 'Frontend\FrontController@indexAction')→name('frontend-main');
 
Route::get('/reports', 'Frontend\ReportsController@indexAction')>name('frontend-reports'); 
Route::get('/admin', 'Backend\MainController@indexAction')→name('backendmain');
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

// --- NAPA ---
Route::get('/grant', 'GrantController@index')->name('grant');
Route::post('/grantstore', 'GrantController@store')->name('grantstore');
