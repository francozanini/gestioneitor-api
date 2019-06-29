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

Route::post('/expenses', 'ExpenseController@store');
Route::get('/expenses/{id}', 'ExpenseController@show');
Route::put('/expenses/{id}', 'ExpenseController@update');
Route::delete('/expenses/{id}', 'ExpenseController@destroy');

Route::get('/user/{id}/expenses', 'UserController@expenses');
