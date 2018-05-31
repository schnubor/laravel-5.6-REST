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

Route::get('/', function() {
    return view('home');
});

/* Clients */
Route::get('/clients', [
    'as' => 'clients.index',
    'uses' => 'ClientController@index'
]);

Route::get('/clients/create', [
    'as' => 'clients.create',
    'uses' => 'ClientController@create'
]);

Route::get('/clients/edit/{id}', [
    'as' => 'clients.edit',
    'uses' => 'ClientController@edit'
]);

Route::get('/clients/{id}', [
    'as' => 'clients.show',
    'uses' => 'ClientController@show'
]);

/* Categories */
Route::get('/categories', [
    'as' => 'categories.index',
    'uses' => 'CategoryController@index'
]);

Route::get('/categories/create', [
    'as' => 'categories.create',
    'uses' => 'CategoryController@create'
]);

Route::get('/categories/edit/{id}', [
    'as' => 'categories.edit',
    'uses' => 'CategoryController@edit'
]);

Route::get('/categories/{id}', [
    'as' => 'categories.show',
    'uses' => 'CategoryController@show'
]);