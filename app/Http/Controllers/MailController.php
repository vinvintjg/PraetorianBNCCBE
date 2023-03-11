<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Mail\testMail;

class MailController extends Controller
{
    //
    public function sendMail(){
        Mail::to('vincent@gmail.com')->send(new testMail());


        return "email has been sent";
    }

}
