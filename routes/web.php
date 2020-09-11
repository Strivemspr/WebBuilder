<?php

use Illuminate\Support\Facades\Route;

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

// Single Restaurant Routes
Route::resource('restaurant', 'RestaurantsController');

// Auth Routes
Auth::routes();

// Home Routes
Route::get('/', 'PagesController@index');

// Dashboard Routes
Route::get('/dashboard', 'DashboardController@index');
Route::post('/dashboard', 'DashboardController@store');
Route::get('/dashboard/restaurant', 'DashboardController@restaurant');
Route::get('/dashboard/restaurant/{id}/edit', 'DashboardController@edit');
Route::delete('/dashboard/restaurant/{id}', 'DashboardController@destroy');
Route::get('/dashboard/user', 'DashboardController@user');
Route::put('/dashboard/user/{id}', 'DashboardController@userUpdate');

// Dashboard Form Routes
Route::post('/dashboard/restaurant/{id}', 'DashboardController@storeRestaurantDetails');
Route::put('/dashboard/restaurant/{id}', 'DashboardController@update');

// Menu Routes
Route::post('/dashboard/restaurant/{id}/menu', 'MenuController@create');
Route::put('/dashboard/restaurant/{id}/{menu_id}', 'MenuController@update');
Route::delete('/dashboard/restaurant/{id}/{menu_id}', 'MenuController@delete');

// Category Routes
Route::post('/dashboard/restaurant/{id}/category', 'MenuController@createCategory');
Route::put('/dashboard/restaurant/{id}/category/{category_id}', 'MenuController@updateCategory');


