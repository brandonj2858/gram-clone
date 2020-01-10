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

Route::post('follow/{user}', 'FollowsController@store');

Route::get('/p/create', 'PostsController@create');
Route::get('/p/{post}', 'PostsController@show');
Route::post('/p', 'PostsController@store');

Route::patch('/profile/{profile}', 'ProfilesController@update');
Route::get('/profile/{user}/edit', 'ProfilesController@edit');
Route::get('/profile/{user}', 'ProfilesController@show')->name('profile.show');

Auth::routes();

/* { }*/
