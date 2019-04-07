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
    //Route::any('/{any}', 'AdminController@index')->where('any', '.*');
    
    Route::prefix('tour')->group(function() {
        Route::get('index', 'TourController@index')->name('index_tour');

    	Route::get('create', 'TourController@create')->name('create_tour');
        Route::post('store', 'TourController@store')->name('store_tour');

        Route::get('edit/{id}', 'TourController@edit')->name('edit_tour');
        Route::post('update/{id}', 'TourController@update')->name('update_tour');

        Route::get('delete/{id}', 'TourController@delete')->name('delete_tour');
    });

    Route::prefix('news')->group(function() {
        Route::get('index', 'NewsController@index')->name('index_news');

        Route::get('create', 'NewsController@create')->name('create_news');
        Route::post('store', 'NewsController@store')->name('store_news');

        Route::get('edit/{id}', 'NewsController@edit')->name('edit_news');
        Route::post('update/{id}', 'NewsController@update')->name('update_news');

        Route::get('delete/{id}', 'NewsController@delete')->name('delete_news');
    });

    Route::prefix('category')->group(function() {
        Route::get('list', 'CategoryController@getList')->name('getListCategory');

        Route::get('add', 'CategoryController@getAdd')->name('getAddCategory');
        Route::post('add', 'CategoryController@postAdd')->name('postAddCategory');

        Route::get('edit/{id}', 'CategoryController@getEdit')->name('getEditCategory');
        Route::post('edit/{id}', 'CategoryController@postEdit')->name('postEditCategory');

        Route::get('delete/{id}', 'CategoryController@getDelete')->name('getDeleteCategory');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
