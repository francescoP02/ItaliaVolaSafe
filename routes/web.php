<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('emails', 'EmailController');

Route::get('/', 'EmailController@index')->name('home');

Route::get('/contact', 'EmailController@create')->name('contact');

// Route::get('/contact', function () {
//     return view('contact');
// });
