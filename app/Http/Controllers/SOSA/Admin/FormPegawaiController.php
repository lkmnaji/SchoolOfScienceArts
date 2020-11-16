<?php

namespace App\Http\Controllers\SOSA\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FormPendaftaranPegawai;

class FormPegawaiController extends Controller
{
    public function index(){
        $data_formpegawai = FormPendaftaranPegawai::all();
        return view('sosa.content.Admin.FormPendaftaran.formpegawai',compact('data_formpegawai'));
    }
}
