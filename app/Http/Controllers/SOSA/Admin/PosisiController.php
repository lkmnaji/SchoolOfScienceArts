<?php

namespace App\Http\Controllers\SOSA\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Posisi;
use App\Http\Controllers\Repository\PosisiLamaranRepository;

class PosisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $repo;

    public function __construct()
    {
        $this->repo = new PosisiLamaranRepository;
    }

    public function index()
    {
        $data_posisi = Posisi::all();
        return view('sosa.content.Admin.PosisiPegawai.Index',compact('data_posisi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sosa.content.Admin.PosisiPegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repo->storePosisiLamaran($request);

        return redirect()->route('posisi.index')->with(['sukses' => 'Data Berhasil di Input']);

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
    public function edit(Posisi $posisi)
    {
        $posisi->find($posisi->id)->all();
        return view('sosa.content.Admin.PosisiPegawai.Edit',compact('posisi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posisi $posisi)
    {
        $this->repo->updatePosisiLamaran($request,$posisi);
        return redirect()->route('posisi.index')->with(['sukses' => 'Data Berhasil Di Edit']);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posisi $posisi)
    {
        $this->repo->destroyPosisiLamaran($posisi);
        return redirect()->route('posisi.index')->with(['sukses' => 'Data Berhasil Di Hapus']);
    }
}
