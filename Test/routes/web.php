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

Auth::routes();
Route::get('/', function () {
    return view('auth.login');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/detail/{id}', 'HomeController@detail');
Route::delete('/delete/{id}', 'HomeController@destroy');
Route::get('/mypost', 'HomeController@mypost');
Route::get('/mypost/{id}/update', 'HomeController@update');
Route::get('/addpost', 'HomeController@addpost');


