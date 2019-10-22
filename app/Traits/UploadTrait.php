<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait UploadTrait
{
    public function uploadOne(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null)
    {
    

        $file = $uploadedFile->storeAs($folder, $uploadedFile->getClientOriginalExtension(), $disk);

        return $file;
    }
}