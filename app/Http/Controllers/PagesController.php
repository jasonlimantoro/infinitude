<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visitor;
class PagesController extends Controller
{
    public function index() {
        // return session('message');
        return view('pages.index');
    }

}
