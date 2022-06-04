<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;
    public static function makeDirectory(){
        $subfolder = 'images/' . date('Y/m/d');
        Storage::makeDirectory($subfolder);
        return $subfolder;
    }

    public static function getDimension($image){
        [$width, $height] = getimageSize(Storage::path($image));
        return $width . "x" . $height;
    }
    public function scopePublished($query){
      return $query->where('is_published',true);
    }

    public function fileUrl(){
        return Storage::url($this->file);
    }

    public function permalink(){
        return route('images.show', $this->slug);
    }
}
