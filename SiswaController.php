<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
use Illuminate\Support\Facades\File;
use Illuminete\Support\Facades\Session;

class SiswaController extends Controller
{

    public function index()
    {
     // $data = siswa::all();
        $data = siswa::orderBy('nomor_induk', 'asc')->paginate(5);
        return view('siswa/index')->with('data', $data);
    }

    public function create()
    {
        return view('siswa/create');
    }

    public function store(Request $request)
    {
     $request->validate([
        'nomor_induk' => 'required|numeric',
        'nama' => 'required',
        'alamat' => 'required',
        'foto' => 'required|mimes:jpeg,jpg,png,gif',
    ], [
        'nomor_induk.required' => 'Nomor induk wajib diisi',
        'nomor_induk.numeric' => 'Nomor induk wajib berisi angka',
        'nama.required' => 'Nama wajib diisi',
        'alamat.required' => 'Alamat wajib diisi',
        'foto.required' => 'Foto wajib diisi',
        'foto.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG,JPG,PNG,GIF',
    ]);

     $foto_file = $request->file('foto');
     $foto_ekstensi = $foto_file->extension();
     $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
     $foto_file->move(public_path('foto'), $foto_nama);

     $data = [
        'nomor_induk' => $request->input('nomor_induk'),
        'nama' => $request->input('nama'),
        'alamat' => $request->input('alamat'),
        'foto' => $foto_nama,
    ];
    siswa::create($data);
    return redirect('siswa')->with('pesan', "Berhasil memasukkan data");
}

public function show($id)
{
    $data = siswa::where('nomor_induk', $id)->first();
    return view('siswa/show')->with('data', $data);
}

public function edit($id)
{
    $data = siswa::where('nomor_induk', $id)->first();
    return view('siswa/edit')->with('data', $data);
}

public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required',
        'alamat' => 'required'
    ]);
    $data = [
        'nama' => $request->input('nama'),
        'alamat' => $request->input('alamat'),
    ];

    if($request->hasFile('foto')){
        $request->validate([
            'foto' => 'mimes:jpeg,jpg,png,gif'
        ],[
            'foto.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG,JPG,PNG,GIF'
        ]);
        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
        $foto_file->move(public_path('foto'), $foto_nama);

        $data_foto = siswa::where('nomor_induk', $id)->first();
        File::delete(public_path('foto'). '/'.$data_foto->foto);

        $data['foto'] = $foto_nama;
        
    }

    siswa::where('nomor_induk', $id)->update($data);
    return redirect('/siswa')->with('pesan',"Berhasil melakukan update data");
}

public function destroy($id)
{
    $data = siswa::where('nomor_induk', $id)->first();
    File::delete(public_path('foto') . '/' . $data->foto);
    siswa::where('nomor_induk', $id)->delete();
    return redirect('/siswa')->with('pesan', "Berhasil menghapus data");
}
}
