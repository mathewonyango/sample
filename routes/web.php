<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', 'UsersController@create')->name('register');
Route::post('/register', 'UsersController@store')->name('register');
