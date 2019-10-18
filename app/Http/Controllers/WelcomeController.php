<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UploadImage;

class WelcomeController extends Controller
{
    public function index(){

        $image = UploadImage::all();
 
        return view('welcome')->with('image',$image);
    }
}
