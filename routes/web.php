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

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'AdminController@index');
    Route::any('/{any}', 'AdminController@index')->where('any', '.*');
    Route::prefix('tour', function() {
    	Route::get('create', 'TourController@create')->name('create_tour');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
