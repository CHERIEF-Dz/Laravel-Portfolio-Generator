<?php

namespace App\Services;

use Illuminate\Http\Request;

class FileUploader
{
    public static function uploadImage(Request $request, $dir){
        $imageName= '';
        if( $request->hasFile('image')){
            $imageName= $dir.time().'.'. $request->image->extension();
            $request->image->move(public_path($dir),$imageName);
        }
        return $imageName;
    }
    public static function updateImage(Request $request, $dir, $imageOriginal){
        if( $request->hasFile('image')){
            $imageName= $dir.time().'.'. $request->image->extension();
            $request->image->move(public_path($dir),$imageName);
            FileUploader::deleteFile($imageOriginal);
            return $imageName;
        }
        return $imageOriginal;
    }
    public static function deleteFile($fileName){
        if( file_exists($fileName) ) {
            unlink($fileName);
        }
    }
}
