<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([            
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $details = [            
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::to('adeccocreacionsindicato@gmail.com')->send(new ContactMail($details));

        return back()->with('success', 'El mensaje ha sido enviado.');
    }
}