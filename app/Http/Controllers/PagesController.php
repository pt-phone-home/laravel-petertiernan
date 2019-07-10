<?php

namespace App\Http\Controllers;

use App\Mail;
use App\Mail\WebsiteMessage;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index()
    {
        return view('index');
    }
    public function contact()
    {
        return view('contact');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email|required',
            'message' => 'required|min:10',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        $email = new Mail;

        $email->name = $request['name'];
        $email->email = $request['email'];
        $email->message = $request['message'];

        \Mail::to('ptiernan@gmail.com')->send(new WebsiteMessage($email));

        return redirect()->back()->with('success', 'Thanks for getting in touch. I will get back to you soon.');
    }
}
