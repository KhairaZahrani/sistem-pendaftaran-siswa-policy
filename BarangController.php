<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;


class BarangController extends Controller
{

    public function index()
    {
        $barang = Barang::all();
        return view('index', ['barangs' => $barang]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_barang' => 'required',
            'harga_barang' => 'required',
            'jenis_barang' => 'required',
        ]);

        Barang::create($validateData);
        return redirect()->route('barang.index')->with('pesan', "Penambahan data barang {$validateData['nama_barang']} berhasil");
    }

    public function show(Barang $barang)
    {
        return view('show', ['barang' => $barang]);
    }

    public function edit(Barang $barang)
    {
        return view('edit', ['barang' => $barang]);
    }

    public function update(Request $request, Barang $barang)
    {
        $validateData = $request->validate([
            'nama_barang' => 'required',
            'harga_barang' => 'required',
            'jenis_barang' => 'required',
        ]);

        Barang::where('id', $barang->id)->update($validateData);

        return redirect()->route('barang.index', ['barang'=>$barang->id])
        ->with('pesan', "Update data {$validateData['nama_barang']} berhasil");
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barang.index')->with('pesan', "Hapus data $barang->nama_barang berhasil");
    }
}
