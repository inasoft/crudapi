<?php

Route::get('/', function () {
    return view('index');
});
Route::get('/api/supplier/{id?}', 'UserController@index');
Route::post('/api/supplier', 'UserController@store');
Route::post('/api/supplier/{id}', 'UserController@update');
Route::delete('/api/supplier/{id}', 'UserController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index');
