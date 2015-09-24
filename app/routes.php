<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


// Login
Route::get('login', array('uses' => 'LoginController@showLogin'));
Route::post('login', array('uses' => 'LoginController@doLogin'));

//Logout
Route::get('logout', array('uses' => 'LoginController@doLogout'));

Route::group(array('before' => 'verifyTenant'), function()
{
	// Dashboard
	Route::get('/', 'DashboardController@index');
	Route::get('dashboard', 'DashboardController@index');
});