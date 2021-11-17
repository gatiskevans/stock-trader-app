<?php

namespace App\Http\Controllers;

use App\Events\SendEmail;
use Illuminate\Http\Request;

class MailerTestController extends Controller
{
    public function index()
    {
        return view('mail');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'email' => 'required'
        ]);

        SendEmail::dispatch($request->get('email'));

        return redirect()->back();
    }
}
