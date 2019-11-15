<?php

namespace App\Http\Controllers;




use App\Mail\sendMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
   public function send(request $request)
   {
    //    return $request;
    //    Mail::send('emails.contact-message',['msg' => $request->message], 
    //    function($mail) use($request)
    //    {
    //        $from = $request->input('email');
    //        $name = $request->input('name');
    //     //    $message = $request->input('message');
    //        $subject = $request->input('subject');

    //        $mail->from($from,$name);
    //        $mail->to('deepak.kumar@tarkuli.com')->subject($subject);
    //    });
    //    return \redirect()->back()->with('flash_message', "Thank You for contacting us");

        $data =  array(
            'name' => $request->name,
            'message' => $request->message,
            'fromMail' => $request->email,
            'subject' => $request->subject
        );
        Mail::to('deepak.kumar@tarkuli.com')->send(new sendMail($data));
               return \redirect()->back()->with('flash_message', "Thank You for contacting us");

   }
}
