<?php

namespace App\Http\Controllers\SOSA\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Footer;
use App\ProfileSekolah;

class SMAScienceController extends Controller
{
    public function index(){
        $data = ProfileSekolah::orderBy('created_at','DESC')->where('id', 2)->take(1)->get();
        $footer = Footer::all();
        return view('sosa.content.User.profilesekolah.smascience',compact('data','footer'));
    }
}
