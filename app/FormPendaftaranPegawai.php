<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormPendaftaranPegawai extends Model
{
    protected $guarded = [];

    public function formpegawai_posisi(){
        return $this->belongsTo(Posisi::class,'posisi_id','id');
    }

    public function formpegawai_jk(){
        return $this->belongsTo(JenisKelamin::class,'jenis_kelamin_id','id');
    }

}
