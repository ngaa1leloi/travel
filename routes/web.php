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
Route::get('logout', ['as' => 'logout', 'uses'=>'UserController@logout']);

Route::get('/', 'HomeController@index')->name('home');
Route::get('tours', 'TourController@index')->name('tours');
Route::get('filter', 'TourController@filter')->name('filter');
Route::get('hotels', 'HotelController@index')->name('hotels');
Route::get('news', 'NewsController@index')->name('news');
Route::get('news/{id}', 'NewsController@getNewsDetail')->name('news_detail');
Route::post('news/{id}', 'NewsController@comment')->name('comment');

Route::get('booking/{id}', 'TourController@getBookingTour')->name('booking_tour');
Route::post('book-tour', 'TourController@storeBookingTour')->name('store_booking_tour');

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

    Route::prefix('place')->group(function() {
        Route::get('index', 'PlaceController@index')->name('index_place');

        Route::get('create', 'PlaceController@create')->name('create_place');
        Route::post('store', 'PlaceController@store')->name('store_place');

        Route::get('edit/{id}', 'PlaceController@edit')->name('edit_place');
        Route::post('update/{id}', 'PlaceController@update')->name('update_place');

        Route::get('delete/{id}', 'PlaceController@delete')->name('delete_place');
    });

    Route::prefix('scenic')->group(function() {
        Route::get('index', 'ScenicController@index')->name('index_scenic');

        Route::get('create', 'ScenicController@create')->name('create_scenic');
        Route::post('store', 'ScenicController@store')->name('store_scenic');

        Route::get('edit/{id}', 'ScenicController@edit')->name('edit_scenic');
        Route::post('update/{id}', 'ScenicController@update')->name('update_scenic');

        Route::get('delete/{id}', 'ScenicController@delete')->name('delete_scenic');
    });

    Route::prefix('hotel')->group(function() {
        Route::get('index', 'HotelController@index')->name('index_hotel');

        Route::get('create', 'HotelController@create')->name('create_hotel');
        Route::post('store', 'HotelController@store')->name('store_hotel');

        Route::get('edit/{id}', 'HotelController@edit')->name('edit_hotel');
        Route::post('update/{id}', 'HotelController@update')->name('update_hotel');

        Route::get('delete/{id}', 'HotelController@delete')->name('delete_hotel');
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
