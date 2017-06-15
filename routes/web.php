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

Route::get('/', 'Controller@home')->name('homeShow');

Route::get('event/{id}', 'Controller@oneEvent')->name('eventShow');

Route::get('cabinet', 'Controller@show')->name('cabinetShow');

Route::get('add', 'Controller@add')->name('addShow');

Route::post('add', 'Controller@addEvent')->name('addEvent');

Route::get('welcome', 'Controller@welcome');

Auth::routes();
/*sfsdfsdfsdssdfsdf*/
Route::get('/home', 'HomeController@index')->name('home');
