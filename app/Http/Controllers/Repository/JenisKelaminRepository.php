<?php

namespace App\Http\Controllers\Repository;

use Illuminate\Http\Request;
use App\JenisKelamin;

class JenisKelaminRepository 
{
    // Create
    public function storeJenisKelamin(Request $request)
    {
        $validasi = $request->validate([
            'jenis_kelamin' => 'required'
        ]);

        $jeniskelamin = JenisKelamin::create($validasi);
        $jeniskelamin->save();
    }

    // Update
    public function updateJenisKelamin(Request $request, JenisKelamin $jeniskelamin)
    {
        $validasi = $request->validate([
            'jenis_kelamin' => 'requried'
        ]);
        $jeniskelamin->update($validasi);
    }

    // Delete
    public function destroyJenisKelamin(JenisKelamin $jeniskelamin)
    {
        $jeniskelamin->delete();
    }
}
