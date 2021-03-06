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

// Route::get('/', 'PageController@home')->name('home');
// Route::get('articles', 'PageController@articles')->name('articles');
// Route::get('contacts', 'PageController@manage')->name('contacts');
// Route::get('api', 'PageController@api')->name('api');




// // resource route/contoller
// Route::resource('articles', 'ArticleController');

Route::get('/', 'PageController@index')->name('home');
Route::get('about', 'PageController@about')->name('about');
Route::get('contacts', 'PageController@contacts')->name('contacts');
Route::get('admin', 'PageController@admin')->name('admin');
Route::get('article', 'PageController@api')->name('api');



// resource route/contoller
Route::resource('articles', 'ArticleController');