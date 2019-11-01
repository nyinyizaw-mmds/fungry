<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\UploadImage;
use App\Traits\UploadTrait;

class UploadImageController extends Controller
{
    public function index(){
        return view('partials.addimage');
    }

    public function store(Request $request){
        
        $image_upload = new UploadImage();

        $request->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
       ]);


        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file-> getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move(public_path('images'),$filename);
            $image_upload->image=$filename;
        }
       
        $image_upload->save();

        return view('welcome');
    }
} 
