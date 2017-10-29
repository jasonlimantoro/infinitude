<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visitor;
use App\Mail\VisitorContact;

class VisitorsController extends Controller
{
    public function send() {
        // create a new visitor from the requested data
        $visitor = [
            'name' => request('name'),
            'email' => request('email'),
            'message' => request('message')
        ];
        // Send the email to the administrator
        \Mail::to('admin@infinitudecommunity.org')->send(new VisitorContact($visitor));

        if (! \Mail::failures()) {
            // upon sucessful, save it to the database
            Visitor::create($visitor);
        }
        // Redirect to the bottom page
        return redirect('/#contact-us');
    }
}
