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

Route::get('/userrecord','ClientController@userdata');
Route::get('/graphdata','ClientController@graphdata');
Route::get('/','ClientController@start');
Route::post('/register','ClientController@test');
Route::get('/working','ClientController@working');
Route::get('/login','ClientController@login');

Route::get('/Signup','ClientController@signup');
Route::post('/Auth','ClientController@Authen');
Route::post('/Clientdata/{data}','ClientController@AddClientData');
// Route::post('/useradd','ClientController@register');


// new route for record data...




