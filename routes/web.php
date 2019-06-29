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
Route::get('/expenses/{id}', 'ExpenseController@getExpensesByUserId');
Route::put('/expenses/{id}', 'ExpenseController@update');
