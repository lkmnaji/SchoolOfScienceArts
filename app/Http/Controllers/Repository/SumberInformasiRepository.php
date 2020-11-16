<?php

namespace App\Http\Controllers\Repository;

use Illuminate\Http\Request;
use App\SumberInformasi;

class SumberInformasiRepository 
{
    // Create
    public function storeSumberInformasi(Request $request)
    {
        $validasi = $request->validate([
            'sumber_informasi' => 'required'
        ]);

        $sumberinformasi = SumberInformasi::create($validasi);
        $sumberinformasi->save();
    }

    // Update
    public function updateSumberInformasi(Request $request, SumberInformasi $sumberinformasi)
    {
        $validasi = $request->validate([
            'sumber_informasi' => 'required'
        ]);
        $sumberinformasi->update($validasi);
    }

    // Delete
    public function destroySumberInformasi(SumberInformasi $sumberinformasi)
    {
        $sumberinformasi->delete();
    }
}
