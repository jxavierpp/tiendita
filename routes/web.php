<?php

use Illuminate\Support\Facades\Route;

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

// Rutas de las Categorias
Route::get('/','CategoryController@index');

Route::get('/categories','CategoryController@index');
Route::get('/categories/create', 'CategoryController@create');
Route::post('/categories/store', 'CategoryController@store');
Route::get('/categories/edit/{id}', 'CategoryController@edit');
Route::put('/categories/{id}', 'CategoryController@update');
Route::delete('/categories/{id}', 'CategoryController@destroy');

// Rutas de los Productos
Route::get('/products','ProductController@index');
Route::get('/products/create', 'ProductController@create');
Route::post('/products/store', 'ProductController@store');
Route::get('/products/edit/{id}', 'ProductController@edit');
Route::put('/products/{id}', 'ProductController@update');
Route::delete('/products/{id}', 'ProductController@destroy');
