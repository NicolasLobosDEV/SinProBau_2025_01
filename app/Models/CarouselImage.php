<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarouselImage extends Model {
    protected $fillable = ["image_url", "image_path", "alt"];
}
