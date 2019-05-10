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
Route::group(['middleware' => 'locale'], function () {
    Route::view('/welcome', 'page_user.confirm_booking_tour');
    Route::get('change-language/{language}', 'ChangeLanguageController@changeLanguage')
    ->name('change_language');

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('tours', 'TourController@index')->name('tours');
    Route::get('tour/{id}', 'TourController@tourDetail')->name('tour_detail');
    Route::get('place/{slug}', 'HomeController@getScenic')->name('scenic');
    Route::get('filter', 'TourController@filter')->name('filter');
    Route::get('hotels', 'HotelController@index')->name('hotels');
    Route::get('hotel/{id}', 'HotelController@hotelDetail')->name('hotel_detail');
    Route::get('news', 'NewsController@index')->name('news');
    Route::get('news/{slug}', 'NewsController@getNewsDetail')->name('news_detail');
    Route::post('news/{id}', 'NewsController@comment')->name('comment');

    Route::get('booking/{id}', 'TourController@getBookingTour')->name('booking_tour');
    Route::get('booking-buffet/{id}', 'TourController@getBookingBuffetTour')->name('booking_buffet_tour');
    Route::post('book-tour', 'TourController@storeBookingTour')->name('store_booking_tour');
    Route::post('book-custom-tour', 'TourController@storeBookingCustomTour')->name('store_booking_custom_tour');

});

Route::get('logout', ['as' => 'logout', 'uses'=>'UserController@logout']);
Route::get('admin/login', 'UserController@getLoginAdmin')->name('getLogin');
Route::get('admin/logout', 'UserController@getLogout')->name('getlogout');
Route::post('admin/login', 'UserController@postLoginAdmin')->name('postlogin');


Route::group(['middleware' => 'adminLogin', 'prefix' => 'admin', 'namespace' => 'Admin'], function () {
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

    Route::prefix('booking')->group(function() {
        Route::get('booking-tour', 'BookingController@getBookingTours')->name('index_booking');
        Route::get('edit-booking-tour/{id}', 'BookingController@editBookingTour')->name('edit_booking');
        Route::post('update-booking-tour/{id}', 'BookingController@updateBookingTour')->name('update_booking');
        Route::get('delete-booking-tour/{id}', 'BookingController@deleteBookingTour')->name('delete_booking');

        Route::get('booking-custom-tour', 'BookingController@getBookingCustomTours')->name('index_booking_custom');
        Route::get('edit-booking-custom-tour/{id}', 'BookingController@editBookingCustom')->name('edit_booking_custom');
        Route::post('update-booking-custom-tour/{id}', 'BookingController@updateBookingCustom')->name('update_booking_custom');

        Route::get('delete-booking-custom-tour/{id}', 'BookingController@deleteBookingCustom')->name('delete_booking_custom');

        Route::get('search-booking', 'BookingController@filterBooking')->name('filter_booking');

        Route::get('search-booking-custom', 'BookingController@filterBookingCustom')->name('filter_booking_custom');
    });

    Route::prefix('category')->group(function() {
        Route::get('list', 'CategoryController@getList')->name('getListCategory');

        Route::get('add', 'CategoryController@getAdd')->name('getAddCategory');
        Route::post('add', 'CategoryController@postAdd')->name('postAddCategory');

        Route::get('edit/{id}', 'CategoryController@getEdit')->name('getEditCategory');
        Route::post('edit/{id}', 'CategoryController@postEdit')->name('postEditCategory');

        Route::get('delete/{id}', 'CategoryController@getDelete')->name('getDeleteCategory');
    });


    Route::prefix('user')->group(function() {
        Route::get('index', 'UserController@index')->name('index_user');

        Route::get('create', 'UserController@create')->name('create_user');
        Route::post('store', 'UserController@store')->name('store_user');

        Route::get('edit/{id}', 'UserController@edit')->name('edit_user');
        Route::post('update/{id}', 'UserController@update')->name('update_user');

        Route::get('delete/{id}', 'UserController@delete')->name('delete_user');
    });

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
