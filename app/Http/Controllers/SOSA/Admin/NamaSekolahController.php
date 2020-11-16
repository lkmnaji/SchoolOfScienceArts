<?php

namespace App\Http\Controllers\SOSA\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NamaSekolah;
use App\Http\Controllers\Repository\NamaSekolahRepository;

class NamaSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $repo;

    public function __construct()
    {
        $this->repo = new NamaSekolahRepository;
    }

    public function index()
    {
        $data_sekolah = NamaSekolah::all();
        return view('sosa.content.Admin.NamaSekolah.Index',compact('data_sekolah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sosa.content.Admin.NamaSekolah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repo->storeNamaSekolah($request);
        return redirect()->route('namasekolah.index')->with(['sukses' => 'Data Berhasil di Input']);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(NamaSekolah $namasekolah)
    {
        $namasekolah->find($namasekolah->id)->all();
        return view('sosa.content.Admin.NamaSekolah.Edit',compact('namasekolah')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NamaSekolah $namasekolah)
    {
        $this->repo->updateNamaSekolah($request, $namasekolah);

        return redirect()->route('namasekolah.index')->with(['sukses' => 'Data Berhasil di Edit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(NamaSekolah $namasekolah)
    {
        $this->repo->destroyNamaSekolah($namasekolah);

        if($namasekolah){
            return redirect()->route('namasekolah.index')->with(['sukses' => 'Data Berhasil di Hapus']);
        }
    }
}
