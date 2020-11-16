<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahunAjaran extends Model
{
    protected $guarded = [];

    public function tahun_formsiswa(){
        $this->hasMany(FormPendaftaranSiswa::class,'tahun_ajaran_id','id');
    }
}
