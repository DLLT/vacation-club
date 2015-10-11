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

Route::post('/create_let', 'LetController@createLet');

Route::get('/about', 'AboutController@getHome');

Route::get('/requests', 'OccupantController@getHome');

Route::get('/user_houses', 'HouseController@getUserHouse');

Route::post('/user_houses', 'LetController@getHome');

Route::get('/house', 'HouseController@getHome');

Route::post('/house', 'HouseController@displayDetails');

Route::get('/house/house_register', 'HouseController@getHouseRegister');

Route::post('house/house_register', 'HouseController@createHouse');

Route::post('/search_houses', 'HouseController@displayLetHouses');

Route::get('/let/let_success', 'LetController@getSuccess');

Route::get('/occupant/occupant_success', 'LetController@getOccupantSuccess');

Route::get('/house/house_register/house_register_success', 'HouseController@getSuccess');

Route::get('/contact', 'ContactController@getHome');

Route::get('/rate_houses', 'RatingController@getHomeHouses');

Route::get('/rate_users', 'RatingController@getHomeUsers');

Route::post('/rate_house', 'RatingController@getRate');

Route::post('/rate_user', 'RatingController@getUserRate');

Route::post('/create_rating', 'RatingController@createRate');

Route::post('/create_user_rating', 'RatingController@createUserRate');

Route::post('/create_occupancy', 'LetController@createOccupancy');

Route::post('/confirm_occupancy', 'OccupantController@confirmOccupancy');

Route::get('/rating/house_rating_success', 'RatingController@getSuccess');

Route::get('/ratings', 'RatingController@getHome');

Route::post('/create_occupancy', 'LetController@createOccupancy');
