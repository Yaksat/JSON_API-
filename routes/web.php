<?php

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


//
Route::view('/', 'home')->name('workers.home');
Route::get('/workers', \App\Http\Controllers\IndexController::class)->name('workers.index');
Route::get('/workers/create', \App\Http\Controllers\CreateController::class)->name('workers.create');
Route::post('/workers', \App\Http\Controllers\StoreController::class)->name('workers.store');
Route::get('/workers/{worker}', \App\Http\Controllers\ShowController::class)->name('workers.show');
