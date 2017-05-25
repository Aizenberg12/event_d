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

Route::get('/', 'Controller@home')->name('homeShow');
 
Route::get('cabinet', 'Controller@show')->name('cabinetShow');

Route::get('add', 'Controller@add')->name('addShow');

