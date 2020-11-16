<?php

namespace App\Http\Controllers\SOSA\User;

use App\Footer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Repository\FormPendaftaranPegawaiRepository;
use App\JenisKelamin;
use App\Posisi;

class FormPendaftaranPegawaiController extends Controller
{
    protected $repo;

    public function __construct()
    {
        $this->repo = new FormPendaftaranPegawaiRepository;
    }

    public function index(){
        $footer = Footer::all();
        return view('sosa.content.User.formpendaftaranpegawai.index',compact('footer'));
    }

    public function create(){
        $data_posisi = Posisi::all();
        $data_kelamin = JenisKelamin::all();
        $footer = Footer::all();
        return view('sosa.content.User.formpendaftaranpegawai.create',compact('data_posisi','data_kelamin','footer'));
    }
    
    public function store(Request $request){

        $this->repo->storeFormPegawai($request);
        return redirect()->route('index.pendaftaranpegawai')->with(['sukses' => 'Terimakasih telah mendaftar di School Of Science & Arts']);

    }
}
