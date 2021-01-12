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

Route::get('/','FirstController@index');
Route::get('/about', 'FirstController@about')->name('about');
Route::get('/hairstyles' ,'FirstController@hairstyles')->name('hairstyles');
Route::get('/news' ,'FirstController@news')->name('news');
Route::get('/contact' ,'FirstController@contact')->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


?>