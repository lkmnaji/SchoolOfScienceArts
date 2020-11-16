<?php

namespace App\Http\Controllers\Repository;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Footer;

class FooterRepository
{
    // create 
    public function storeFooter(Request $request)
    {
        Validator::make($request->all(),
        [
            'img_footer' => 'required|file|mimes:png,gif,jpg,jpeg',
            'about_us' => 'required',
            'address' => 'required',
            'contact_us' => 'required'

        ])->validate();

        $gif = $request->file('img_footer');
        $gif->storeAs('public/img',$gif->hashName());

        Footer::create([
            'img_footer' => $gif->hashName(),
            'about_us' => $request->about_us,
            'address' => $request->address,
            'contact_us' => $request->contact_us,
        ]);
    
    }

    // Update

    public function updateFooter(Request $request, Footer $footer)
    {
        Validator::make($request->all(),
        [
            'img_footer' => 'required|file|mimes:png,jpg,gif,jpeg',
            'about_us' => 'required',
            'address' => 'required',
            'contact_us' => 'required'
        ])->validate();

        $footer = Footer::findOrFail($footer->id);

        if($request->file('img_footer') == ""){
            $footer->update([
                'about_us' => $request->about_us,
                'address' => $request->address,
                'contact_us' => $request->contact_us
            ]);
        }else{
            Storage::disk('local')->delete('public/img/'.$footer->img_footer);

            $image = $request->file('img_footer');
            $image->storeAs('public/img',$image->hashName());

            $footer->update([
                'img_footer' => $image->hashName(),
                'about_us' => $request->about_us,
                'address' => $request->address,
                'contact_us' => $request->contact_us   
            ]);
        }

    }

    // delete
    public function destroyFooter(Footer $footer)
    {
        $footer->delete();
    }
}
