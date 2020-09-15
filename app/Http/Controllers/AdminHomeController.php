<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;

class AdminHomeController extends Controller
{

    public function __construct()
    {
            $this->middleware('auth:admin');
       }
    public function index()
    {
    //$name=auth()->user()->phone;
     //dd($name) ;
        
      return view('admin/dashboard');
    }

}
