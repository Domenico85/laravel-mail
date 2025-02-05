<?php

namespace App\Http\Controllers;

use App\Mail\testmail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Mail::to('your-email@example.com')->send(new testmail($data));

        return back()->with('success', 'Email sent successfully!');
    }
}
