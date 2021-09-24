<?php

namespace App\Jobs;

use App\Mail\CustomerEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct()
    {
        //
    }

    public function handle()
    {
        $mail = new CustomerEmail();
        foreach (['thenewxpat@gmail.com','hollaxpat@gmail.com'] as $recipient) {
            Mail::to($recipient)->send($mail);
        }
    }
}
