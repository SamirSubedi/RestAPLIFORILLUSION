<?php

namespace App\Http\Controllers;


use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;
class ContactFormController extends Controller
{

   
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request) 
    {
        $data  =[
       'name' => $request->name,
       'message' => $request->message,
       'email' => $request->email,
       'subject' => $request->subject,
      
     
        ];
   
        Mail::to('samirsubedi3@gmail.com')->send(new ContactFormMail($data));
$request->session()->flash('Success'," Mail Sent Successfully");

         return redirect('contact');
    }
}
