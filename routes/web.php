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

Auth::routes();

Route::get('/home', 'HomeController@welcome')->name('home');
Route::get('/logout', 'HomeController@logout')->name('logout');


Route::get('/data_entry', 'HomeController@inventory')->name('data_entry');
Route::get('/data_index', 'HomeController@Inventory_index')->name('data_index');
Route::post('/data-store', 'HomeController@InventoryStore')->name('data-store');
