<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visitor;

class VisitorsController extends Controller
{
    public function send() {
        // create a new visitor from the requested data and save it to the database
        $visitor = new Visitor;
        
        Visitor::create([
            'name' => request('name'),
            'email' => request('email'),
            'message' => request('message')
        ]);

        return redirect('/#contact-us');
    }
}
