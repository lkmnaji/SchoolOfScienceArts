<?php

namespace App\Http\Controllers\Repository;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Carousel;

class CarouselRepository 
{
    // Create
    public function storeCarousel(Request $request)
    {
        Validator::make($request->all(),
        [
            'img_carousel' => 'required|image|mimes:png,jpg,jpeg'

        ])->validate();

        $image = $request->file('img_carousel');
        $image->storeAs('public/img',$image->hashName());

        Carousel::create(
        [
            'img_carousel' => $image->hashName(),
        ]);
    }

    // Update
    public function updateCarousel(Request $request, Carousel $carousel)
    {
        Validator::make($request->all(),
        [
            'img_carousel' => 'required|image|mimes:png,jpg,jpeg'
        ])->validate();

        $carousel = Carousel::findOrFail($carousel);

        Storage::disk('local')->delete('public/img'.$carousel->img_carousel);

        $image = $request->file('img_carousel');
        $image->storeAs('public/img', $image->hashName());

        $carousel->update([
            'img_carousel' => $image->hashName(),
        ]);
    }

    // Delete
    public function destroyCarousel(Carousel $carousel)
    {
        $carousel->delete();
    }

}
