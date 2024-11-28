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

Route::get('login/google', 'Auth\LoginController@redirectToGoogle')->name('login.google');

// Route::get('login/google/callback', 'Auth\LoginController@handleGoogleCallback');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::Auth();

Route::get('login/google/', 'AuthGoogleController@redirectToGoogle')->name('auth.google');
Route::get('laravel-socialite/login/google/callback', 'AuthGoogleController@handleGoogleCallback');