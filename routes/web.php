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

use \Illuminate\Support\Facades\Route;

Route::post('/expenses', 'ExpenseController@store');
Route::get('/expenses/{expense}', 'ExpenseController@show');
Route::put('/expenses/{expense}', 'ExpenseController@update');
Route::delete('/expenses/{expense}', 'ExpenseController@destroy');

Route::get('/expenses/{expense}/details', 'ExpenseDetailsController@index');
Route::get('/expenses/{expense}/details/{detail}', 'ExpenseDetailsController@show');
Route::post('/expenses/{expense}/details}', 'ExpenseDetailsController@store');
Route::delete('/expenses/{expense}/details/{detail}', 'ExpenseDetailsController@destroy');
Route::put('/expenses/{expense}/details/{detail}', 'ExpenseDetailsController@update');

Route::get('/user/{user}/expenses', 'UserController@expenses');
