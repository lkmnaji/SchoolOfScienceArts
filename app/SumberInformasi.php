<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SumberInformasi extends Model
{
    protected $guarded = [];

    public function sumber_formsiswa(){
        $this->hasMany(FormPendaftaranSiswa::class,'sumber_informasi_id','id');
    }
}
