<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    $users = DB::table('users')->get();
    return view('welcome', compact('users'));
});


Route::get('/register', 'UsersController@create')->name('register');
Route::post('/register', 'UsersController@store')->name('register');
