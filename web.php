<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [SiswaController::class, 'index'])->middleware('auth');
Route::resource('/siswas', SiswaController::class)->middleware('auth');
