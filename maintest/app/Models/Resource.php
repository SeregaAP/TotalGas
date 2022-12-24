<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Image;

class Resource extends Model
{
    use HasFactory;

    public function images(){
        return $this->belongsToMany(Image::class,'resource_image','resource_id','image_id');
       // return $this->belongsToMany(image::class,'resource_image','resource_id','image_id');
    }
}
