<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posisi extends Model
{
    protected $guarded = [];

    public function posisi_formpegawai(){
        $this->hasMany(FormPendaftaranPegawai::class,'posisi_id','id');
    }
}
