<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
    public function daftarMahasiswa(Request $request)
    {
        return view('halaman', ['judul' => 'Daftar Mahasiswa', 'content' => 'Ini halaman Daftar Mahasiswa']);

    }

    public function tabelMahasiswa()
    {
        return view('halaman', ['judul' => 'Tabel Mahasiswa', 'content' => 'Ini halaman Tabel Mahasiswa']);
    }

    public function blogMahasiswa()
    {
        return view('halaman', ['judul' => 'Blog Mahasiswa', 'content' => 'Ini halaman Blog Mahasiswa']);
    }
}
