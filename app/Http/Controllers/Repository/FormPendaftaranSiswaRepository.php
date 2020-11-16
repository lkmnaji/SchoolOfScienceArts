<?php

namespace App\Http\Controllers\Repository;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\FormPendaftaranSiswa;

class FormPendaftaranSiswaRepository
{
    // create 
    public function storeFormSiswa(Request $request)
    {
        Validator::make($request->all(),
        [
            'tingkat_pendidikan_id' => 'required',
            'nama_sekolah_id' => 'required',
            'tahun_ajaran_id' => 'required',
            'nama_calon_siswa' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin_id' => 'required',
            'alamat_calon_siswa' => 'required',
            'img_siswa' => 'required|image|mimes:png,jpg,jpeg',
            'nomor_telepon' => 'required',
            'nomor_telepon_orangtua' => 'required',
            'sumber_informasi_id' => 'required'
            
        ])->validate();

        $image = $request->file('img_siswa');
        $image->storeAs('public/img',$image->hashName());

        FormPendaftaranSiswa::create([
            'tingkat_pendidikan_id' => $request->tingkat_pendidikan_id,
            'nama_sekolah_id' => $request->nama_sekolah_id,
            'tahun_ajaran_id' => $request->tahun_ajaran_id,
            'nama_calon_siswa' => $request->nama_calon_siswa,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin_id' => $request->jenis_kelamin_id,
            'alamat_calon_siswa' => $request->alamat_calon_siswa,
            'img_siswa' => $image->hashName(),
            'nomor_telepon' => $request->nomor_telepon,
            'nomor_telepon_orangtua' => $request->nomor_telepon_orangtua,
            'sumber_informasi_id' => $request->sumber_informasi_id,
        ]);
    
    }

}
