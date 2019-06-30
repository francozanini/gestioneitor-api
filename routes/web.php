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

Route::get('/expenses/{expense}/details', 'ExpenseDetailController@index');
Route::get('/details/{detail}', 'ExpenseDetailController@show');
Route::post('/expenses/{expense}/details', 'ExpenseDetailController@store');
Route::delete('/details/{detail}', 'ExpenseDetailController@destroy');
Route::put('/details/{detail}', 'ExpenseDetailController@update');

Route::get('/user/{user}/expenses', 'UserController@expenses');
