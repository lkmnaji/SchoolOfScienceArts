<?php

namespace App\Http\Controllers\SOSA\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FormPendaftaranSiswa;

class FormSiswaController extends Controller
{
    public function index(){
        $data_formsiswa = FormPendaftaranSiswa::all();
        return view('sosa.content.Admin.FormPendaftaran.formsiswa',compact('data_formsiswa'));
    }
}
