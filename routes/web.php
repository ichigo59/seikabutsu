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

Route::get('/', 'PostController@index');
Route::get('/posts/chat', 'PostController@chat');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/login', 'PostController@login');
Route::get('/posts/mypage', 'PostController@mypage');
Route::get('/posts/register', 'PostController@register');
Route::get('/posts/review', 'PostController@review');
Route::get('/posts/start', 'PostController@start');
Route::get('/posts/explanation', 'PostController@explanation');
Route::get('/posts/{post}', 'PostController@index');
Route::post('/posts', 'PostController@store');
