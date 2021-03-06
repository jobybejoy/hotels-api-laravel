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

Route::get('/home', 'HotelsController@index')->name('home');
// Route::get('/hotels', 'HotelsController@index')->name('hotels_list');

Route::get('/hotel/{id}','HotelsController@getHotel');
Route::get('/hotel/{hotel_id}/room/{room_no}','HotelsController@getRoom');
// Route::get('/hotel/{hotel_id}/room/type/{room_type}','HotelsController@getRoomByType');
Route::get('/hotel/{hotel_id}/breakfasts','HotelsController@getBreakfasts');
Route::get('/hotel/{hotel_id}/services','HotelsController@getServices');

Route::get('/selected/hotel/{hotel_id}/room/{room_no}','HotelsController@setRoom');
Route::get('/selected/hotel/{hotel_id}/breakfast/{b_type}','HotelsController@setBreakfast');


//Mananger Routes

//Hotel Routes
Route::get('/manager', 'Manager\HotelsController@index')->name('man');
Route::get('/view/hotel/{hotel_id}', 'Manager\HotelsController@viewHotel');
Route::get('/add/hotel', 'Manager\HotelsController@showAddHotel');
Route::post('/add/hotel','Manager\HotelsController@addHotel')->name('add_hotel');
Route::get('/edit/hotel/{hotel_id}', 'Manager\HotelsController@showEditHotel');
Route::post('/edit/hotel/{hotel_id}','Manager\HotelsController@editHotel')->name('edit_hotel');
Route::get('/delete/hotel/{hotel_id}', 'Manager\HotelsController@showDeleteHotel');
Route::post('/delete/hotel/{hotel_id}','Manager\HotelsController@deleteHotel')->name('delete_hotel');

Route::get('/add/hotel/{hotel_id}/room', 'Manager\RoomsController@showAddRoom');
Route::post('/add/hotel/{hotel_id}/room','Manager\RoomsController@addRoom')->name('add_room');
Route::get('/edit/hotel/{hotel_id}/room/{room_no}','Manager\RoomsController@showEditRoom');
Route::post('/edit/hotel/{hotel_id}/room/{room_no}','Manager\RoomsController@editRoom')->name('edit_room');
Route::get('/delete/hotel/{hotel_id}/room/{room_no}','Manager\RoomsController@showDeleteRoom');
Route::post('/delete/hotel/{hotel_id}/room/{room_no}','Manager\RoomsController@deleteRoom')->name('delete_room');