<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisKelamin extends Model
{
    protected $guarded = [];

    public function jk_formsiswa(){
        $this->hasMany(FormPendaftaranSiswa::class,'jenis_kelamin_id','id');
    }
    public function jk_formpegawai(){
        $this->hasMany(FormPendaftaranPegawai::class,'jenis_kelamin_id','id');
    }
}

