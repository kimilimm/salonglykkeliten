<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendContactEmail() {
        $data = ['message' => 'This is a test!'];

        Mail::to('kim@hoffet.net')->send(new ContactMail($data));

        return redirect()->back()->with('success', 'Takk for din henvendelse. Jeg svarer så fort jeg kan : )');;
    }
}
