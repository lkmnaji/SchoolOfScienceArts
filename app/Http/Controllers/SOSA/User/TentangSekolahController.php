<?php

namespace App\Http\Controllers\SOSA\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Footer;

class TentangSekolahController extends Controller
{
    public function indextentangsekolah(){
        $footer = Footer::all();
        return view('sosa.content.User.tentangsekolah',compact('footer'));
    }
    public function indexvisimisisekolah(){
        $footer = Footer::all();
        return view('sosa.content.User.visimisi',compact('footer'));
    }   
}   

