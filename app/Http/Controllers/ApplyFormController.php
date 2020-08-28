<?php

namespace App\Http\Controllers;


use App\Mail\ApplyFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;



class ApplyFormController extends Controller
{
  public function create()
  {
      return view('apply');
  }
  public function store(Request $request) 
  {
      $data  =[
     'name' => $request->name,
     'message' => $request->message,
     'email' => $request->email,
     'address' => $request->address,
     'number' => $request->phone,
     'Course' => $request->sellist1,
      ];
 
      Mail::to('samirsubedi3@gmail.com')->send(new ApplyFormMail($data));
$request->session()->flash('Success'," Successfully Applied");

       return redirect('apply');
  }




}
