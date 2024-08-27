<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{

    public function index()
    {
        return view('siswa.index', ['siswas' => Siswa::all()]);
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
           'nis' => 'required|size:6|unique:siswas,nis', 
           'nama' => 'required|string|max:255', 
           'alamat' => 'required|string|max:255', 
           'tgl_lahir' => 'required|date'  
       ],
       [
        'nis.required' => 'NIS wajib diisi.',
        'nis.size' => 'NIS harus berukuran 6 karakter.',
        'nis.unique' => 'NIS sudah ada di dalam sistem.',
        'nama.required' => 'Nama wajib diisi.',
        'nama.string' => 'Nama harus berupa teks.',
        'nama.max' => 'Nama tidak boleh lebih dari 255 karakter.',
        'alamat.required' => 'Alamat wajib diisi.',
        'alamat.string' => 'Alamat harus berupa teks.',
        'alamat.max' => 'Alamat tidak boleh lebih dari 255 karakter.',
        'tgl_lahir.required' => 'Tanggal lahir wajib diisi.',
        'tgl_lahir.date' => 'Tanggal lahir harus berupa tanggal yang valid.'
    ]);

        Siswa::create($validateData);
        return redirect('/')->with('pesan', "Siswa dengan nama $request->nama berhasil di tambahkan");
    }

    public function show(siswa $siswa)
    {
        return view('siswa.show', compact('siswa'));
    }

    public function edit(siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, siswa $siswa)
    {
        $validateData = $request->validate([
         'nis' => 'required|size:6|unique:siswas,nis,' . $siswa->id,
         'nama' => 'required|string|max:255', 
         'alamat' => 'required|string|max:255', 
         'tgl_lahir' => 'required|date'  
     ],

     [
        'nis.required' => 'NIS wajib diisi.',
        'nis.size' => 'NIS harus berukuran 6 karakter.',
        'nis.unique' => 'NIS sudah ada di dalam sistem.',
        'nama.required' => 'Nama wajib diisi.',
        'nama.string' => 'Nama harus berupa teks.',
        'nama.max' => 'Nama tidak boleh lebih dari 255 karakter.',
        'alamat.required' => 'Alamat wajib diisi.',
        'alamat.string' => 'Alamat harus berupa teks.',
        'alamat.max' => 'Alamat tidak boleh lebih dari 255 karakter.',
        'tgl_lahir.required' => 'Tanggal lahir wajib diisi.',
        'tgl_lahir.date' => 'Tanggal lahir harus berupa tanggal yang valid.'
    ]);
        $siswa->update($validateData);

        return redirect('/siswas/'. $siswa->id)
        ->with('pesan', "Siswa dengan nama $siswa->nama berhasil diupdate");
    }

    public function destroy(siswa $siswa)
    {
        $siswa::delete();
        return redirect('/')->with('pesan', "Siswa dengan nama $siswa->nama berhasil dihapus");
    }
}
