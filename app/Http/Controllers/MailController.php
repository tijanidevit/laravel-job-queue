<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendMail()
    {
//        $staffs = Staff::all();
        foreach (['thenewxpat@gmail.com','hollaxpat@gmail.com'] as $recipient) {
            Mail::to($recipient)->send(new CostomerEmail($));
        }
    }
}
