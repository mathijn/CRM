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

Route::get('/dashboard', 'AdminController@index')->name('dashboard');

Route::resource('clients', 'ClientController');
Route::resource('actions', 'ActionController');
Route::resource('employees', 'EmployeeController');

Route::get('pdf', 'PdfController@generatePdf')->name('pdf');
