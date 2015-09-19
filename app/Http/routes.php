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

Route::get('/', 'HomeController@getHome');

Route::get('/register', 'RegisterController@getHome');

Route::post('/register', 'RegisterController@createUser');

Route::get('/register/register_success','RegisterController@getSuccess');

Route::get('/login', 'LoginController@getHome');

Route::post('/login', 'LoginController@loginUser');

Route::get('/logout', 'LoginController@logoutUser');

Route::get('/about', 'AboutController@getHome');

Route::get('/house', 'HouseController@getHome');

Route::get('/house/house_register', 'HouseController@getHouseRegister');

Route::post('house/house_register', 'HouseController@createHouse');

Route::get('/house/house_register/house_register_success', 'HouseController@getSuccess');

Route::get('/contact', 'ContactController@getHome');

