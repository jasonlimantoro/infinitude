<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visitor;
use App\Http\Controllers\ImagesController;

class PagesController extends Controller
{
    public function index() {
        $img = new ImagesController('/images/Home_BG.png');
        $bgImage = $img->intervent();
        $mailto = 'jasonlimantoro99@gmail.com';
        return view('pages.index', compact(['mailto', 'bgImage']));
    }

}
