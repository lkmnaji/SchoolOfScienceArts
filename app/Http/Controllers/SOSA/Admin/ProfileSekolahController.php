<?php

namespace App\Http\Controllers\SOSA\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Repository\ProfileSekolahRepository;
use App\ProfileSekolah;

class ProfileSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $repo;

    public function __construct()
    {
        $this->repo = new ProfileSekolahRepository;
    }
    
    public function index()
    {
        $data_profile = ProfileSekolah::all();
        return view('sosa.content.Admin.ProfileSekolah.index',compact('data_profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sosa.content.Admin.ProfileSekolah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repo->storeProfile($request);

        return redirect()->route('profilesekolah.index')->with(['sukses' => 'Data Berhasil Di Input']);
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
    public function edit(ProfileSekolah $profilesekolah)
    {
        $profilesekolah->find($profilesekolah->id)->all();
        return view('sosa.content.Admin.ProfileSekolah.edit',compact('profilesekolah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProfileSekolah $profilesekolah)
    {
        $this->repo->updateProfile($request, $profilesekolah);

        if($profilesekolah){
            return redirect()->route('profilesekolah.index')->with([
                'sukses' => 'Data Berhasil Di Edit'
            ]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfileSekolah $profilesekolah)
    {
        $this->repo->destroyProfile($profilesekolah);

        if($profilesekolah){
            return redirect()->route('profilesekolah.index')->with([
                'sukses' => 'Data Berhasil Di Hapus'
            ]);
        }
    }
}
