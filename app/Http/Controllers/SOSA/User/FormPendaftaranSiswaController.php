<?php

namespace App\Http\Controllers\SOSA\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\FormPendaftaranSiswaRepository;
use Illuminate\Http\Request;
use App\NamaSekolah;
use App\TahunAjaran;
use App\TingkatPendidikan;
use App\JenisKelamin;
use App\SumberInformasi;
use App\Footer;

class FormPendaftaranSiswaController extends Controller
{
    protected $repo;

    public function __construct()
    {
        $this->repo = new FormPendaftaranSiswaRepository;
    }

    public function index(){
        $footer = Footer::all();
        return view('sosa.content.User.FormPendaftaranSiswa.Index',compact('footer'));
    }

    public function create()
    {
        $data_kelamin = JenisKelamin::all();
        $data_sekolah = NamaSekolah::all();
        $data_informasi = SumberInformasi::all();
        $data_tahun = TahunAjaran::all();
        $data_tingkat = TingkatPendidikan::all();
        $footer = Footer::all(); 
        return view('sosa.content.User.FormPendaftaranSiswa.Create',compact('data_kelamin','data_informasi','data_sekolah','data_tingkat','data_tahun','footer'));
    }

    public function store(Request $request)
    {
        $this->repo->storeFormSiswa($request);
        return redirect()->route('index.pendaftaransiswa')->with(['sukses' => 'Terimakasih telah mendaftar di School Of Science & Arts']);
    }
}
