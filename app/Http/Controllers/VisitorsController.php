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
        $this->validate(request(), [
            'name' => 'required|min:5',
            'email' => 'required|email',
            'message' => 'required|max:200'
        ]);

        // Send the email to the administrator's gmail
        \Mail::to('jasonlimantoro99@gmail.com')->send(new VisitorContact($visitor));

        if (! \Mail::failures()) {
            // upon sucessful, save it to the database
            Visitor::create($visitor);

            // and send a flash message
            session()->flash('message', 'Thank you for contacting us! We will get back to you soon!');
        }
        // Redirect to the bottom page
        return redirect('/#contact-us');
    }
}
