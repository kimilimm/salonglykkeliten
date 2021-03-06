<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendContactEmail(Request $request) {

        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'text_message' => 'required',
            'g-recaptcha-response' => 'required|recaptcha',
        ]);

        Mail::to('kim@hoffet.net')->send(new ContactMail($request->email, $request->name, $request->text_message));

        return redirect()->back()->with('success', 'Takk for din henvendelse. Jeg svarer så fort jeg kan : )');;
    }
}
