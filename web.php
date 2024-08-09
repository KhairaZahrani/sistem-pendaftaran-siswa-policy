<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\JurusanController;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/daftar-mahasiswa', [MahasiswaController::class, 'daftarMahasiswa'])->middleware('auth');
Route::get('/tabel-mahasiswa', [MahasiswaController::class, 'tabelMahasiswa'])->middleware('auth');
Route::get('/blog-mahasiswa', [MahasiswaController::class, 'blogMahasiswa'])->middleware('auth');
Route::get('/', [JurusanController::class, 'index'])->middleware('auth');
Route::resource('jurusans',JurusanController::class)->middleware('auth');
Route::get('/jurusans/{jurusan}', [JurusanController::class, 'show'])
->name('jurusans.show')->middleware('auth')->middleware('can:view,jurusan');