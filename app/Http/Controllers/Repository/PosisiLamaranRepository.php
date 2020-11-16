<?php

namespace App\Http\Controllers\Repository;

use Illuminate\Http\Request;
use App\Posisi;

class PosisiLamaranRepository 
{
    // Create
    public function storePosisiLamaran(Request $request)
    {
        $validasi = $request->validate([
            'posisi_lamaran' => 'required'
        ]);

        $posisi = Posisi::create($validasi);
        $posisi->save();
    }

    // Update
    public function updatePosisiLamaran(Request $request, Posisi $posisi)
    {
        $validasi = $request->validate([
            'posisi_lamaran' => 'required'
        ]);
        $posisi->update($validasi);
    }

    // Delete
    public function destroyPosisiLamaran(Posisi $posisi)
    {
        $posisi->delete();
    }
}
