<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TingkatPendidikan extends Model
{
    protected $guarded = [];

    public function tingkat_formsiswa(){
        $this->hasMany(FormPendaftaranSiswa::class,'tingkat_pendidikan_id','id');
    }
    
}
