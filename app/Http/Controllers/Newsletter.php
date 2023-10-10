<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Mail;

class Newsletter extends Controller
{
    public function index(){

        return view('sendmail');
    }

    public function sendEmail(Request $request){

        $mailData = [
            'title' => 'Hello',
            'content' => 'Content',
        ];

        try{
            Mail::to($request->email)->send(new SendMail($mailData));
        }catch(Exeption $e){
            print($e);
        }

        return redirect()->back();
    }

}
