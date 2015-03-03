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

Route::get('/', function(){
	return View::make('home.index');
});

Route::get('widget', function(){
	return View::make('widgets.widget-search');
});

Route::get('widget-vertical', function(){
    return View::make('widgets.widget-search-vertical');
});

Route::post('widget', array(
	'as' => 'post-widget',
    'uses' => 'ReservationController@postWidget')
);

Route::post('widget-vertical', array(
    'as' => 'post-widget',
    'uses' => 'ReservationController@postWidget')
);

Route::get('reservation/room-list/{param}', array(
    'as' => 'getRoomList',
    'uses' => 'ReservationController@getRoomList')
);

Route::get('reservation/room-detail/{objParam}', array(
    'as' => 'getRoomDetail',
    'uses' => 'ReservationController@getRoomDetail')
);

Route::get('room-list', array(
    'as' => 'showAllRoom',
    'uses' => 'RoomController@showAllRoom')
);

Route::get('room-list/{id}', array(
    'as' => 'show',
    'uses' => 'RoomController@show')
);

Route::post('room-list/{id}', array(
    'as' => 'check-room-availability',
    'uses' => 'ReservationController@getAvailabilityDetail')
);

/* Reservation */
Route::post('reservation', array(
    'as' => 'check-availability',
    'uses' => 'ReservationController@postWidget')
);

/* Reservation */

Route::post('reservation/checkout', array(
    'as' => 'checkout',
    'uses' => 'ReservationController@getCheckout')
);

Route::get('reservation/checkout', array(
    'as' => 'postCheckout',
    'uses' => 'ReservationController@postBooking')
);

Route::get('reservation/checkout/success/{bookingId}', array(
    'as' => 'getSuccess',
    'uses' => 'ReservationController@getConfirmationPage')
);

Route::get('reservation/checkout/expired', array(
    'as' => 'getExpired',
    'uses' => 'ReservationController@getExpiredPage')
);










