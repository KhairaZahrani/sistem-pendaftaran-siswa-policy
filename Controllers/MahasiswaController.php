<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{

    // CASE STUDI:LOGIN MIDDLEWARE
    public function daftarMahasiswa()
    {
        return view('halaman', ['judul' => 'Daftar Mahasiswa']);
    }

    public function tabelMahasiswa()
    {
        return view('halaman', ['judul' => 'Tabel Mahasiswa']);
    }

    public function blogMahasiswa()
    {
        return view('halaman', ['judul' => 'Blog Mahasiswa']);
    }

    public function login()
    {
        return view('form-login');
    }

    public function prosesLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
        ]);

        $validUsername = ['andi','rani','lisa','joko'];
        if(in_array($request->username, $validUsername))
        {
            session(['username' => $request->username]);
            return redirect('/daftar-mahasiswa');
        }
        else
        {
            return back()->withInput()->with('pesan',"Username tidak valid");
        }
    }

    public function logout()
    {
        session()->forger('username');
        return redirect('login')->with('pesan', 'Logout berhasil');
    }

}
