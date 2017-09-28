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
    return view('home');
});

Route::POST('login', 'LoginController@login')->name('login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'AdminController@index')->name('dashboard');
Route::get('/clients', 'AdminController@clients')->name('clients');
Route::get('/emails', 'AdminController@emails')->name('emails');
Route::get('/actions', 'AdminController@actions')->name('actions');

Route::resource('clients', 'ClientController');