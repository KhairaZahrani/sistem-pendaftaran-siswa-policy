<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
        echo '<ul>';
        echo '<li><a href=/buat-session>Buat Session</a></li>';
        echo '<li><a href=/akses-session>Akses Session</a></li>';
        echo '<li><a href=/hapus-session>Hapus Session</a></li>';
        echo '<li><a href=/flash-session>Flash Session</a></li>';
    }

    public function buatSession()
    {
        session(['hakAkses' => 'admin', 'nama' => 'Anto']);
        return "Session sudah dibuat";
    }

    public function aksesSession(Request $request)
    {
        dump(session()->all());
    }

    public function hapusSession()
    {

    }

    public function flashSession()
    {

    }
}
