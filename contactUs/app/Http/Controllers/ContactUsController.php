<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsFormMAil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            "name" => 'required',
            "email" => "required",
            "message" => "required"
        ]);
        Mail::to("nabeeltaariq@gmail.com")->send(new ContactUsFormMAil());
    }
}
