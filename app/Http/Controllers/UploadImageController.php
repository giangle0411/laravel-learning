<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Cloudder;

class UploadImageController extends Controller
{
    public function index()
    {
        return view('uploadImage');
    }
    public function uploadImage(Request $request)
    {
        $input = $request->All();
        // dd($input);

        $this->validate($request, [
            'image_name' => 'required|mimes:jpeg,bmp,jpg,png|between:1, 10000',
        ]);

        $imageName = $request->file('image_name');

        $result = Cloudder::upload($imageName->getRealPath(), 'giangImageFile');

        dd($result->getResult());
    }
}
