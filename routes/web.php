<?php


Route::get('/', 'StrudentController@index');
Route::get('/edit/{id}', 'StrudentController@edit');
Route::get('/show', 'StrudentController@show');
Route::get('/create', 'StrudentController@create');
Route::post('/store', 'StrudentController@store');
Route::post('/update/{id}', 'StrudentController@update');