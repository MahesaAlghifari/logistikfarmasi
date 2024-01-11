<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

class ObatController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'nama_obat' => 'required|string|max:255',
            'akronim' => 'required|string|max:10',
            'satuan' => 'required|string|max:50',
            'jenis_obat' => 'required|string|max:50',
            'keterangan' => 'nullable|string|max:255',
        ]);

        // Simpan data obat ke database
        Obat::create([
            'nama_obat' => $request->nama_obat,
            'akronim' => $request->akronim,
            'satuan' => $request->satuan,
            'jenis_obat' => $request->jenis_obat,
            'keterangan' => $request->keterangan,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('obat.index')->with('success', 'Data obat berhasil ditambahkan.');
    }
}
