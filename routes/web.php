<?php

use App\Receipe;

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

Route::resource('receipe', 'ReceipeController');
Route::resource('category', 'CategoryController');

Route::get('home', 'HomeController@index');

//public routes
Route::get('/','PublicController@index');
Route::get('detail/{id}','PublicController@show');

Auth::routes();

