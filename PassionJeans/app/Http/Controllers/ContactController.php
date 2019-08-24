<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function ContactUs(){
        $message="";
        return view('contact')->with('message',$message);

    }

    public function ContactUsPost(Request $request){

       /* $data = array('name'=>$request->input('name'));
        Mail::send('mail', $data, function($message) {
            $message->to('passionsjeans2000@gmail.com', 'Contact Us')->subject
            ('Contact Us Mail');
            $message->from('passionsjeans2000@gmail.com','Virat Gandhi');
        });
*/


        $message="your message has been send";
        return view('contact')->with('message',$message);
    }

}
