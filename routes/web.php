<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('dashboard');



Route::get('change-password', 'ChangePasswordController@index')->name('change.password');
Route::post('change-password', 'ChangePasswordController@store')->name('post.change.password');