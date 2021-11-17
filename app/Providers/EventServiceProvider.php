<?php

namespace App\Providers;

use App\Events\EmailWasSubmitted;
use App\Events\SendEmail;
use App\Listeners\SendEmailNotification;
use App\Listeners\SendResponseEmail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{

    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        EmailWasSubmitted::class => [
            SendResponseEmail::class,
        ],
        SendEmail::class => [
            SendEmailNotification::class
        ]
    ];
}
