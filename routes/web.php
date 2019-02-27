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
// Route::resource('drinks','DrinkController');
// Route::resource('foods','FoodController');
// Route::resource('healthy_diets','Healthy_dietController');
Route::resource('healthies','HealthyController');
Route::resource('homehealthy','HomeHealthyController');
Route::resource('show','HealthyController');
//Route::resource('foods','FoodController');

// Route::resource('/bank','TestController');
// Route::get('/Nida', function(){
// 	return "Hello world";
// });

// //Route::get('/Nida')

// Route::get('/Nida/{id}','Test\TestController@routetesting');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


//Route::resource('foods','FoodController');
//Route::resource('drinks','DrinkController');