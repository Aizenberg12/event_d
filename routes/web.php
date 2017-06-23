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

use App\Event;

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::get('cabinet', 'Controller@show')->name('cabinetShow');

	Route::get('add', 'Controller@add')->name('addShow');

	Route::post('addevent', 'Controller@addEvent')->name('addEvent');

	Route::get('send_email', 'Controller@send_email')->name('send_email');

	Route::post('event_edit/{id}', 'Controller@event_edit_save')->name('event_edit_save');

	Route::get('event_edit/{id}', 'Controller@event_edit')->name('event_edit');

	Route::get('delete_event/{id}', 'Controller@event_delete')->name('event_delete');

});

Route::group(['middleware' => 'role:admin'], function() {
	Route::get('admin', 'Admin@dashboard');

	Route::get('user_delete/{id}', 'Admin@user_delete')->name('user_delete');
});



Route::get('home', 'Controller@home')->name('homeShow');

Route::get('event/{id}', 'Controller@oneEvent')->name('eventShow');

Route::get('/', 'Controller@welcome');




