<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', 'UsersController@create')->name('register.create');
Route::post('/register', 'UsersController@store')->name('register.store');
