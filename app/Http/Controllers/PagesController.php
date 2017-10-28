<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visitor;
class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function send() {
        // create a new visitor from the requested data
        $visitor = new Visitor;
        
        $visitor->name = request('name');
        $visitor->email = request('email');
        $visitor->message = request('message');

        // save it to the database (visitor table)
        $visitor->save();
        // Redirect
        return redirect('/');

    }
}
