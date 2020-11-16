<?php

namespace App\Http\Controllers\SOSA\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SumberInformasi;
use App\Http\Controllers\Repository\SumberInformasiRepository;

class SumberInformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $repo;

    public function __construct()
    {
        $this->repo = new SumberInformasiRepository;
    }
    public function index()
    {
        $data_informasi = SumberInformasi::all();
        return view('sosa.content.Admin.SumberInformasi.Index',compact('data_informasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sosa.content.Admin.SumberInformasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repo->storeSumberInformasi($request);
        return redirect()->route('sumberinformasi.index')->with(['sukses' => 'Data Berhasil di Input']);
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
    public function edit(SumberInformasi $sumberinformasi)
    {
        $sumberinformasi->find($sumberinformasi->id)->all();
        return view('sosa.content.Admin.SumberInformasi.Edit',compact('sumberinformasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SumberInformasi $sumberinformasi)
    {
        $this->repo->updateSumberInformasi($request,$sumberinformasi);
        return redirect()->route('sumberinformasi.index')->with(['sukses' => 'Data Berhasil di Edit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SumberInformasi $sumberinformasi)
    {
        $this->repo->destroySumberInformasi($sumberinformasi);
        return redirect()->route('sumberinformasi.index')->with(['sukses' => 'Data Berhasil di Hapus']);
    }
}
