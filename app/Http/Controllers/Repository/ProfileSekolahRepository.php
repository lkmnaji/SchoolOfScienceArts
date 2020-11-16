<?php

namespace App\Http\Controllers\Repository;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\ProfileSekolah;

class ProfileSekolahRepository
{
    // create 
    public function storeProfile(Request $request)
    {
        Validator::make($request->all(),
        [
            'img_profilesekolah' => 'required|image|mimes:png,jpg,jpeg',
            'profile_sekolah' => 'required',

        ])->validate();

        $image = $request->file('img_profilesekolah');
        $image->storeAs('public/img',$image->hashName());

        ProfileSekolah::create([
            'img_profilesekolah' => $image->hashName(),
            'profile_sekolah' => $request->profile_sekolah,
        ]);
    
    }

    // Update

    public function updateProfile(Request $request, ProfileSekolah $profilesekolah)
    {
        Validator::make($request->all(),
        [
            'img_profilesekolah' => 'required|image|mimes:png,jpg,jpeg',
            'profile_sekolah' => 'required',
        ])->validate();

        $profilesekolah = ProfileSekolah::findOrFail($profilesekolah->id);

        if($request->file('img_profilesekolah') == ""){
            $profilesekolah->update([
                'profile_sekolah' => $request->profile_sekolah,
            ]);
        }else{
            Storage::disk('local')->delete('public/img/'.$profilesekolah->img_profilesekolah);

            $image = $request->file('img_profilesekolah');
            $image->storeAs('public/img',$image->hashName());

            $profilesekolah->update([
                'img_profilesekolah' => $image->hashName(),
                'profile_sekolah' => $request->profile_sekolah, 
            ]);
        }

    }

    // delete
    public function destroyProfile(ProfileSekolah $profilesekolah)
    {
        $profilesekolah->delete();
    }
}
