<?php

namespace App\Http\Controllers\Repository;

use Illuminate\Http\Request;
use App\TahunAjaran;

class TahunAjaranRepository 
{
    // Create
    public function storeTahunAjaran(Request $request)
    {
        $validasi = $request->validate([
            'tahun_ajaran' => 'required'
        ]);

        $tahunajaran = TahunAjaran::create($validasi);
        $tahunajaran->save();
    }

    // Update
    public function updateTahunAjaran(Request $request, TahunAjaran $tahunajaran)
    {
        $validasi = $request->validate([
            'tahun_ajaran' => 'required'
        ]);
        $tahunajaran->update($validasi);
    }

    // Delete
    public function destroyTahunAjaran(TahunAjaran $tahunajaran)
    {
        $tahunajaran->delete();
    }
}
