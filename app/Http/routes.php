<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@index');

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@logout');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('settings/profile', 'SettingsController@getProfile');
Route::post('settings/profile', 'SettingsController@postProfile');

Route::resource('/user', 'UsersController');
Route::resource('/vendors', 'VendorsController');
Route::get('/vendors/{id}/adduser', 'VendorsController@getAddUserToVendor');
Route::post('/vendors/{id}/adduser', 'VendorsController@postAddUserToVendor');
Route::delete('/vendors/{id}/removeuser', 'VendorsController@removeUserFromVendor');