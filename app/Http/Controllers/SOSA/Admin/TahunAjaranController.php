<?php

namespace App\Http\Controllers\SOSA\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TahunAjaran;
use App\Http\Controllers\Repository\TahunAjaranRepository;

class TahunAjaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $repo;

    public function __construct()
    {
        $this->repo = new TahunAjaranRepository;
    }
    public function index()
    {
        $data_tahun = TahunAjaran::all();
        return view('sosa.content.Admin.TahunAjaran.Index',compact('data_tahun'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sosa.content.Admin.TahunAjaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repo->storeTahunAjaran($request);

        return redirect()->route('tahunajaran.index')->with(['sukses' => 'Data Berhasil Di Input']);

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
    public function edit(TahunAjaran $tahunajaran)
    {
        $tahunajaran->find($tahunajaran->id)->all();
        return view('sosa.content.Admin.TahunAjaran.Edit',compact('tahun_ajaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TahunAjaran $tahunajaran)
    {
        $this->repo->updateTahunAjaran($request,$tahunajaran);

        return redirect()->route('tahunajaran.index')->with(['sukses' => 'Data Berhasil Di Edit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TahunAjaran $tahunajaran)
    {
        $this->repo->destroyTahunAjaran($tahunajaran);

        return redirect()->route('tahunajaran.index')->with(['sukses' => 'Data Berhasil Di Hapus']);

    }
}
