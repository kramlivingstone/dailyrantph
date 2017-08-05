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


Route::get('/feed','PostsController@index')->name('home');

Route::post('/posts','PostsController@store');

Route::patch('/posts/{id}/edit','PostsController@update');

Route::post('/posts/{post}/comments','CommentsController@store');
Route::patch('/comment/{id}/edit','CommentsController@update');


Route::get('/register','RegisterController@create');
Route::post('/register','RegisterController@store'); 


Route::get('/login','SessionsController@create');
Route::post('/login','SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');

Route::get('/profile/{id}','ProfileController@index');


