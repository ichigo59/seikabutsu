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

Route::get('/', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/mypage', 'PostController@mypage');
Route::get('/posts/chat', 'PostController@chat');
Route::get('/posts/review', 'PostController@review');
Route::get('/posts/register', 'PostController@register');
Route::get('/posts/login', 'PostController@login');
Route::get('/posts/{post}', 'PostController@show');
                
