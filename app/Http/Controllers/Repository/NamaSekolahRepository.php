<?php

namespace App\Http\Controllers\Repository;

use Illuminate\Http\Request;
use App\NamaSekolah;

class NamaSekolahRepository 
{
     // Create
     public function storeNamaSekolah(Request $request)
     {
         $validasi = $request->validate([
             'nama_sekolah' => 'required'
         ]);
 
         $namasekolah = NamaSekolah::create($validasi);
         $namasekolah->save();
     }
 
     // Update
     public function updateNamaSekolah(Request $request, NamaSekolah $namasekolah)
     {
         $validasi = $request->validate([
             'nama_sekolah' => 'required'
         ]);
         $namasekolah->update($validasi);
     }
 
     // Delete
     public function destroyNamaSekolah(NamaSekolah $namasekolah)
     {
         $namasekolah->delete();
     }
}
