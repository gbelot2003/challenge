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

/** API URL for testing */
Route::get('twitter/user/{user}', 'TwitterController@show');

Route::get('profile/{slug}', 'ProfilesController@show')->name('profile');
Route::resource('twittstate', 'TwittStatesController');
