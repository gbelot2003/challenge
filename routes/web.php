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

Route::get('/', 'EntryController@index');

Route::get('/home', 'HomeController@index')->name('home');

/** Auth URLs */
Auth::routes();

/** Entries resource URLs */
Route::resource('entries', 'EntryController');

/** Entries index  */
Route::get('api/v1/entries/{id}', 'EntriesApiController@index');

/** Profiles */
Route::get('profile/{slug}', 'ProfilesController@show')->name('profile');

/** widget URLs */
Route::resource('twittstate', 'TwittStatesController')->only(['show', 'store', 'destroy']);

/** API URL for twitter resources */
Route::get('twitter/user/{user}', 'TwitterController@show');


