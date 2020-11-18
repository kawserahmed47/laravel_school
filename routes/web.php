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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('index');
Route::get('/dashboard', 'AdminController@index')->name('dashboard');



// Route::resource('sharks', 'sharkController');

Route::resource('/create', 'UnitTypeController');
Route::resource('/unit','UnitController');