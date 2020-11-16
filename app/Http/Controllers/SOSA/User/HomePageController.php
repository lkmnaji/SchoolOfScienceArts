<?php

namespace App\Http\Controllers\SOSA\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Footer;
use App\Carousel;

class HomePageController extends Controller
{
    public function indexhomeuser(){
        $footer = Footer::all();
        $carousel = Carousel::where('id',1)->get();
        $carousel2 = Carousel::orderBy('created_at','DESC')->get();
        return view('sosa.content.User.homepage',compact('footer','carousel','carousel2'));
    }   
}
