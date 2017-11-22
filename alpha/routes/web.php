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

Route::get('/me', function () {
    return view('me');
});

Route::get('/darkwelcome', function () {
    return view('darkwelcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/darkregister', function () {
    return view('darkregister');
});
