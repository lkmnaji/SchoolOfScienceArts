<?php

namespace App\Http\Controllers\Repository;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\FormPendaftaranPegawai;

class FormPendaftaranPegawaiRepository
{
    // create 
    public function storeFormPegawai(Request $request)
    {
        Validator::make($request->all(),
        [
            'posisi_lamaran_id' => 'required',
            'nama_calon_pegawai' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin_id' => 'required',
            'img_pegawai' => 'required|image|mimes:png,jpg,jpeg',
            'cv_pegawai' => 'required|file|mimes:pdf,docx,doc',
            'nomor_telepon_pegawai' => 'required',
            'email_calon_pegawai' => 'required'
            
        ])->validate();

        $image = $request->file('img_siswa');
        $image->storeAs('public/img',$image->hashName());

        FormPendaftaranPegawai::create([
            'posisi_lamaran_id' => $request->posisi_lamaran_id,
            'nama_calon_pegawai' => $request->nama_calon_pegawai,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin_id' => $request->jenis_kelamin_id,
            'img_pegawai' => $image->hashName(),
            'cv_pegawai' => $request->cv_pegawai,
            'nomor_telepon_pegawai' => $request->nomor_telepon_pegawai,
            'email_calon_pegawai' => $request->email_calon_pegawai,
        ]);
    
    }

}
