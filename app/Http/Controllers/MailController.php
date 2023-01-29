<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendWelcome()
    {
        Mail::to('user@mail.com')->send(new WelcomeMail());
        return new WelcomeMail();
    }
}
