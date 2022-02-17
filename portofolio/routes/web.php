<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('index');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/detail',[MainController::class,'detail'])->name('detail');
Route::get('/hobi2',[MainController::class,'hobi2'])->name('hobi2');
Route::get('/hobi3',[MainController::class,'hobi3'])->name('hobi3');

Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::get('/indexHobiJson', [AdminController::class, 'index_json'])->name('indexHobiJson');
Route::get('/add', [AdminController::class, 'add'])->name('add');
Route::post('/store', [AdminController::class, 'store'])->name('store');
