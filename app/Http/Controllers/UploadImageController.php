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

    //    if ($files = $request->file('image')) {
    //        $destinationPath = public_path('images'); // upload path
    //        $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
          
    //        $files->move($destinationPath, $profileImage);
           
    //       $image_upload->image = $profileImage;

    //     }

        // if ($request->has('image')) {
        //     // Get image file
        //     $image = $request->file('image');
        //     // Make a image name based on user name and current timestamp
        
        //     // Define folder path
        //     $folder = '/uploads/images/';
        //     // Make a file path where image will be stored [ folder path + file name + file extension]
        //     $filePath = $folder . '.' . $image->getClientOriginalExtension();
        //     // Upload image
        //     $this->uploadOne($image, $folder, 'public');
        //     // Set user profile image path in database to filePath
        //     $image_upload->image = $filePath;
        // }

        if($request->hasfile('image')){
            $file = $request->file('image');
           // $size = $file->getSize();
            $extension = $file-> getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move(public_path('images'),$filename);
            $image_upload->image=$filename;
        }
       
        $image_upload->save();

        return view('welcome');
    }
}
