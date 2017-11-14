<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visitor;
use App\Mail\VisitorContact;

class VisitorsController extends Controller
{
    public function send() {
        // Validate the form
        $this->validate(request(), [
            'name' => 'required|min:5',
            'email' => 'required|email',
            'message' => 'required|max:200'
            ]);
        
        // create a new visitor from the requested data and save it to database
        $visitor = Visitor::create(
            request(
                [
                    'name', 
                    'email', 
                    'message'
                ]
        ));

        // Send the email to the administrator's gmail
        $mailto = 'jasonlimantoro99@gmail.com';
        \Mail::to($mailto)->send(new VisitorContact($visitor));

        if (! \Mail::failures()) {
        // upon successful, send a flash message
            session()->flash('message', 'Thank you for contacting us! We will get back to you soon!');
        }
        // Redirect to the bottom page
        return redirect('/#contact-us');
    }
}
