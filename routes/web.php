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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

Route::get('/driver', 'DriverController@index');

Route::post('/driver/create', 'DriverController@create');

Route::get('/driver/{id}/profile', 'DriverController@profile');



Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('profile', 'ProfileController@edit')->name('profile.edit');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('profile', 'ProfileController@edit')
        ->name('profile.edit');

    Route::patch('profile', 'ProfileController@update')
        ->name('profile.update');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('password', 'PasswordController@edit')
        ->name('user.password.edit');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('password', 'PasswordController@edit')
        ->name('user.password.edit');

    Route::patch('password', 'PasswordController@update')
        ->name('user.password.update');
});