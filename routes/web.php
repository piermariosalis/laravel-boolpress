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

Route::get('/', 'PageController@home')->name('home');
Route::get('articles', 'PageController@articles')->name('articles');
Route::get('contacts', 'PageController@manage')->name('contacts');
Route::get('api/posts', 'PageController@api')->name('api');

