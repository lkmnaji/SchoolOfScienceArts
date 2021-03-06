<?php

namespace App\Http\Controllers\SOSA\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Footer;
use App\ProfileSekolah;

class SMPArtController extends Controller
{
    public function index(){
        $data = ProfileSekolah::orderBy('created_at','DESC')->where('id', 3)->take(1)->get();
        $footer = Footer::all();
        return view('sosa.content.User.profilesekolah.smpart',compact('data','footer'));
    }
}
