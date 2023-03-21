<?php

namespace App\Http\Controllers;

use App\Mail\NewMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{





    public function sendEmail( Request $req) {
        // $data=[
        //        'email'=>$req->email,
        //        'message'=>$req->message
        // ];

        $req->validate([

            'email' => 'required|email',

            'message' => 'required',
            'phone'=>'required'
        ]);

        Contact::create($req->all());

        return redirect()->back()->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }



     }





