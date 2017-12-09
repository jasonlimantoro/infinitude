<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function __construct($imgPath)
    {
        $this->imgPath = $imgPath;
    }

    public function intervent() {
        $img = \Image::make(url($this->imgPath))->encode('data-url', 75);
        return $img;
    }
    
}
