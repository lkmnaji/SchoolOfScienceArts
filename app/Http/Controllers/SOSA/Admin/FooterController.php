<?php

namespace App\Http\Controllers\SOSA\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Repository\FooterRepository;
use App\Footer;

class FooterController extends Controller
{
    protected $repo;

    public function __construct()
    {
        $this->repo = new FooterRepository;
    }

    public function index()
    {
        $data_footer = footer::all();
        return view('sosa.layouts.Admin.footeruser.Index',compact('data_footer'));
    }

    public function create()
    {
        return view('sosa.layouts.Admin.footeruser.Create');
    }

    public function store(Request $request)
    {
        $this->repo->storeFooter($request);

        return redirect()->route('footer.index')->with(['sukses' => 'Data Footer berhasil di input']);
    }

    public function edit(Footer $footer)
    {
        $footer->find($footer->id)->all();
        return view('sosa.layouts.Admin.footeruser.edit',compact('footer'));
    }

    public function update(Request $request, Footer $footer)
    {
        $this->repo->updateFooter($request, $footer);

        return redirect()->route('footer.index')->with(['sukses' => 'Data Berhasil Di Edit']);
    }

    public function destroy(footer $footer)
    {
        $this->repo->destroyFooter($footer);
        
        return redirect()->route('footer.index')->with(['sukses' => 'Data Berhasil Di Hapus']);
    }
}