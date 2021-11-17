<?php

namespace App\Http\Controllers;

use App\Events\EmailWasSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EmailController extends Controller
{
    public function processEmail()
    {
        event(new EmailWasSubmitted());
        return view('/dashboard');
    }
}
