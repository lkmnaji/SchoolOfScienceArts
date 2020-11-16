<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormPendaftaranSiswa extends Model
{
    protected $guarded = [];

    public function formsiswa_tingkat(){
        return $this->belongsTo(TingkatPendidikan::class,'tingkat_pendidikan_id','id');
    }

    public function formsiswa_sekolah(){
        return $this->belongsTo(NamaSekolah::class,'nama_sekolah_id','id');
    }

    public function formsiswa_tahun(){
        return $this->belongsTo(TahunAjaran::class,'tahun_ajaran_id','id');
    }

    public function formsiswa_jk(){
        return $this->belongsTo(JenisKelamin::class,'jenis_kelamin_id','id');
    }
    
    public function formsiswa_sumber(){
        return $this->belongsTo(SumberInformasi::class,'sumber_informasi_id','id');
    }
}
