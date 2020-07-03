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
//guest
Route::get('/', function () {
	return view('home');
});


Route::get('/home/page', function () {
    return view('welcome');
});

Route::get('/profiles/pay', 'PayController@payIndex');
Route::post('/process-payment', 'PayController@proccessing');

//admin authentication...
Auth::routes();

Route::post('/follow/{user}', 'Followscontroller@store');

// posts routes
Route::get('/admin/page', 'HomeController@index')->name('home');
Route::get('/create-new-post/create', 'PostsController@create')->name('posts.create');
Route::post('/create-new-post', 'PostsController@store')->name('posts.store');
Route::get('/show/posts', 'PostsController@show')->name('posts.show');
Route::get('/edit/{post}/edit', 'PostsController@edit')->name('posts.edit');
Route::patch('/edit/{post}', 'PostsController@update')->name('posts.update');
Route::delete('/posts/{post}', 'PostsController@destroy')->name('posts.destroy');

//user profiles
Route::get('/profiles/{user}', 'ProfilesController@index')->name('profiles.show');

