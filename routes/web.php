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

Route::group(['prefix' => 'manage', 'namespace' => 'Admin', 'middleware' => ['auth']], function() {
  Route::get('/', 'ManageController@manage')->name('manage.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/transfer', 'TransferController@index')->name('transfer_global_page');
