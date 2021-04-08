<?php

Route::get('/', 'StudentController@index')->name('home');

Route::get('/edit/{id}', 'StudentController@edit')->name('edit');
Route::get('/show', 'StudentController@show')->name('show');
Route::get('/create', 'StudentController@create')->name('create');
Route::post('/store', 'StudentController@store')->name('store');
Route::post('/update/{id}', 'StudentController@update')->name('update');
Route::get('/delete/{id}', 'StudentController@destroy')->name('delete');
