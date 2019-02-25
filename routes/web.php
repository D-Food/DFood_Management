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

// Route::get('/', function () {
//     return view('welcome');
// });
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

Route::get('/', 'HomeController@index');

// Route::get('home', function(){
// 	return view('home');
// });

// Route::get('welcome', function(){
// 	return view('welcome');
// });

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

<<<<<<< HEAD
// Route::resource('restaurants','restaurantController');


=======
Route::resource('order', 'OrderController');

Route::resource('recipes', 'RecipeController');


Route::get('master', function () {
    return view('layouts.master');
});

Route::get('recipeHome', function () {
    return view('recipes.recipeHome');
});

Route::get('recipe', function () {
    return view('layouts.recipe');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> 70af7e244e68a61e88e2c15fa9cda150a86acb6d
