<?php

namespace App\Http\Controllers\SOSA\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TingkatPendidikan;
use App\Http\Controllers\Repository\TingkatPendidikanRepository;

class TingkatPendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $repo;

    public function __construct()
    {
        $this->repo = new TingkatPendidikanRepository;
    }
    public function index()
    {
        $data_tingkat = TingkatPendidikan::all();
        return view('sosa.content.Admin.TingkatPendidikan.Index',compact('data_tingkat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sosa.content.Admin.TingkatPendidikan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repo->storeTingkatPendidikan($request);
        
        return redirect()->route('tingkatpendidikan.index')->with(['sukses' => 'Data Berhasil Di Input']);
        
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
    public function edit(TingkatPendidikan $tingkatpendidikan)
    {
        $tingkatpendidikan->find($tingkatpendidikan->id)->all();
        return view('sosa.content.Admin.TingkatPendidikan.edit',compact('tingkatpendidikan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TingkatPendidikan $tingkatpendidikan)
    {
        $this->repo->updateTingkatPendidikan($request,$tingkatpendidikan);
        
        return redirect()->route('tingkatpendidikan.index')->with(['sukses' => 'Data Berhasil Di Update']);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TingkatPendidikan $tingkatpendidikan)
    {
        $this->repo->destroyTingkatPendidikan($tingkatpendidikan);
        
        return redirect()->route('tingkatpendidikan.index')->with(['sukses' => 'Data Berhasil di Hapus']);
       
    }
}
