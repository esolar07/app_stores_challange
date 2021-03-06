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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/stores', 'StoresController@getAllStores');

Route::get('/add_store', 'StoresController@showStoreForm');

Route::get('/store/{id}', 'StoresController@getSingleStore');

Route::post('/add_store/post', 'StoresController@addStore');