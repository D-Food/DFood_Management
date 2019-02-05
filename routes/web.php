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
// Route::get('/leaphea',function(){
// 	return "Hello world!!!";
// });
// Route::get('/leaphea/{id}','Test\TestController@routeTesting');
// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/user','testController@index');

Route::get('master', function(){
	return view('layouts.master');
});

// Route::get('restaurant', function(){
// 	return view('restaurant.create');
// });

Route::resource('restaurants', 'RestaurantController');
Route::resource('foods', 'FoodController');
Route::resource('drinks', 'DrinkController');

Route::get('member', function(){
	return view('layouts.user_register');
});

Route::get('member', function(){
	return view('layouts.user_register');
});
// Route::resource('restaurants','restaurantController');


