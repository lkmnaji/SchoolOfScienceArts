<?php

namespace App\Http\Controllers\SOSA\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\JenisKelaminRepository;
use Illuminate\Http\Request;
use App\JenisKelamin;

class JenisKelaminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $repo;

    public function __construct()
    {
        $this->repo = new JenisKelaminRepository;
    }
    
    public function index()
    {
        $data_kelamin = JenisKelamin::all();
        return view('sosa.content.Admin.JenisKelamin.Index',compact('data_kelamin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sosa.content.Admin.JenisKelamin.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repo->storeJenisKelamin($request);
        
        return redirect()->route('jeniskelamin.index')->with(['sukses' => 'Data Berhasil Di Input']);
        
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
    public function edit(JenisKelamin $jeniskelamin)
    {
        $jeniskelamin->find($jeniskelamin->id)->all();
        return view('sosa.content.Admin.JenisKelamin.Edit',compact('jeniskelamin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisKelamin $jeniskelamin)
    {
        $this->repo->updateJenisKelamin($request,$jeniskelamin);

        if($jeniskelamin){
            return redirect()->route('jeniskelamin.index')->with(['sukses' => 'Data Berhasil Di Edit']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisKelamin $jeniskelamin)
    {
        $this->repo->destroyJenisKelamin($jeniskelamin);

        if($jeniskelamin){
            return redirect()->route('jeniskelamin.index')->with(['sukses' => 'Data Berhasil Di Hapus']);
        }
    }
}
