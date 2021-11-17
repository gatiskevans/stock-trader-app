<?php

namespace App\Listeners;

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class SendResponseEmail
{
    public function handle($event)
    {
        Mail::to('test@test.com')->send(new TestMail());
    }
}
