<?php

Route::post('register', 'Api\AuthController@actionRegister');
Route::post('login', 'Api\AuthController@actionLogin');
Route::get('me', 'Api\UserController@me')->middleware('auth:api');
Route::post('wall', 'Api\WallController@store')->middleware('auth:api');
Route::get('wall', 'Api\WallController@index')->middleware('auth:api');
Route::get('wall/{wp}', 'Api\WallController@show')->middleware('auth:api');
Route::put('wall/{wp}', 'Api\WallController@update')->middleware('auth:api');
Route::delete('wall/{wp}', 'Api\WallController@destroy')->middleware('auth:api');

// Route::apiResource('wall','Api\WallController')->middleware('auth:api');
