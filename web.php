<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\FileUploadController;
// use App\Http\Controllers\SessionController;



Route::fallback(function() {
    return "Maaf alamat tidak ditemukan";
});

// Route::get('/mahasiswas', [MahasiswaController::class, 'index'])->name('mahasiswas.index');

// Route::get('/mahasiswas/create', [MahasiswaController::class, 'create'])->name('mahasiswas.create');

// Route::post('/mahasiswas', [MahasiswaController::class, 'store'])->name('mahasiswas.store');

// Route::get('/mahasiswas/{mahasiswa}', [MahasiswaController::class,'show'])
// ->name('mahasiswas.show');

// Route::get('/mahasiswas/{mahasiswa}/edit', [MahasiswaController::class,'edit'])
// ->name('mahasiswas.edit');

// Route::put('/mahasiswas/{mahasiswa}', [MahasiswaController::class,'update'])
// ->name('mahasiswas.update');

// Route::delete('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'destroy'])->name('mahasiswas.destroy');


// // File Upload
// Route::get('/file-upload', [FileUploadController::class, 'fileUpload']);
// Route::post('/file-upload', [FileUploadController::class, 'prosesFileUpload']);


// Mini Case Study
Route::get('/file-upload-rename', [FileUploadController::class, 'fileUploadRename']);
Route::post('file-upload-rename', [FileUploadController::class, 'prosesFileUploadRename']);


// Middleware
// Route::get('/daftar-mahasiswa', [MahasiswaController::class, 'daftarMahasiswa']);
// Route::get('/tabel-mahasiswa', [MahasiswaController::class,'tabelMahasiswa']);
// Route::get('/blog-mahasiswa', [MahasiswaController::class, 'blogMahasiswa']);


// SESSION
// Route::get('/', [SessionController::class, 'index']);
// Route::get('/buat-session', [SessionController::class, 'buatSession']);
// Route::get('/akses-session', [SessionController::class, 'aksesSession']);
// Route::get('/hapus-session', [SessionController::class, 'hapusSession']);
// Route::get('/flash-session', [SessionController::class, 'flashSession']);


