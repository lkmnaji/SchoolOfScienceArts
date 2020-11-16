<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NamaSekolah extends Model
{
    protected $guarded = [];

    public function sekolah_formsiswa(){
        $this->hasMany(FormPendaftaranSiswa::class,'nama_sekolah_id','id');
    }
}
