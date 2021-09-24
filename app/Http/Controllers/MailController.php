<?php

namespace App\Http\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\CustomerEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail()
    {
        $mail = new CustomerEmail();
        foreach (['thenewxpat@gmail.com','hollaxpat@gmail.com'] as $recipient) {
            Mail::to($recipient)->send($mail);
        }
    }
}
