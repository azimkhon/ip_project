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

<<<<<<< HEAD
Route::get('/home', 'HomeController@index')->name('home');
=======
<<<<<<< HEAD
Route::get('/home', 'HomeController@index')->name('home');
=======
Route::get('/', 'HomeController@index')->name('home');
>>>>>>> 6633753e290c8a6ce781a5b522f73b8c74a238a7
>>>>>>> ab432e609307192c0b8ea130924a3c319030295b
