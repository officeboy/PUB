<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Bind route Peramiters
Route::model('customer', 'Customer');

// Show pages.
Route::get('/', 'CustomersController@index');
Route::get('/create', 'CustomersController@create');
Route::get('/edit/{customer}', 'CustomersController@edit');
Route::get('/delete/{customer}', 'CustomersController@delete');

// Handle form submissions.
Route::post('/create', 'CustomersController@handleCreate');
Route::post('/edit', 'CustomersController@handleEdit');
Route::post('/delete', 'CustomersController@handleDelete');
