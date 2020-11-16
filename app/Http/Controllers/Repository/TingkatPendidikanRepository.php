<?php

namespace App\Http\Controllers\Repository;

use Illuminate\Http\Request;
use App\TingkatPendidikan;

class TingkatPendidikanRepository 
{
     // Create
     public function storeTingkatPendidikan(Request $request)
     {
         $validasi = $request->validate([
             'tingkat_pendidikan' => 'required'
         ]);
 
         $tingkatpendidikan = TingkatPendidikan::create($validasi);
         $tingkatpendidikan->save();
     }
 
     // Update
     public function updateTingkatPendidikan(Request $request, TingkatPendidikan $tingkatpendidikan)
     {
         $validasi = $request->validate([
             'tingkat_pendidikan' => 'required'
         ]);
         $tingkatpendidikan->update($validasi);
     }
 
     // Delete
     public function destroyTingkatPendidikan(TingkatPendidikan $tingkatpendidikan)
     {
         $tingkatpendidikan->delete();
     }
}
