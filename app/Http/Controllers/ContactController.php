<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function ContactUs(){
        return view('contact-us');
    }

    public function MailSent(Request $request){
        if($request->name==null || $request->surname==null || $request->email==null|| $request->message==null){
            return redirect()->back()->with(['error'=>'compila correttamente i campi!']);
        }

        $mail= new ContactMail($request->name, $request->surname,$request->email,$request->message,);
        Mail::to('noreply@blog.it')->send($mail);

return redirect()->back()->with(['success'=>'email sent!']);
}

public function thankYou(){
    return view('thank-you');
}
    }
    
