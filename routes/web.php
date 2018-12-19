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


Route::get('/','HomeController@addpost');
Route::post('savepost','HomeController@savepost');
Route::get('allpost','HomeController@allpost');
Route::get('edit/{id}','HomeController@edit');

