<?php

namespace App\Http\Controllers\SOSA\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Repository\CarouselRepository;
use App\Carousel;

class CarouselController extends Controller
{
    protected $repo;

    public function __construct()
    {
        $this->repo = new CarouselRepository;
    }

    public function index()
    {
        $data_carousel = Carousel::all();
        return view('sosa.content.Admin.CarouselUser.index',compact('data_carousel'));
    }

    public function create()
    {
        return view('sosa.content.Admin.CarouselUser.create');
    }

    public function store(Request $request){

        $this->repo->storeCarousel($request);
        
        return redirect()->route('carousel.index')->with(['sukses' => 'Data Carousel Berhasil di Input']);
    }

    public function edit(Carousel $carousel)
    {
        $carousel->find($carousel->id)->all();
        return view('sosa.content.Admin.CarouselUser.edit',compact('carousel'));
    }

    public function update(Request $request, Carousel $carousel)
    {
        $this->repo->updateCarousel($request, $carousel);
        
        return redirect()->route('carousel.index')->with(['sukses' => 'Data Berhasil Di Edit']);
    }

    public function destroy(Carousel $carousel)
    {
        $this->repo->destroyCarousel($carousel);

        if($carousel){
            return redirect()->route('carousel.index')->with(['sukses' => 'Data Carousel Berhasil di Hapus']);
        }
    }
}
