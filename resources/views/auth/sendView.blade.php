@extends('layouts.head')
<h2>Illusion Bartender Academy</h2> <br>
<p style="
   border: 1px solid ;
   background-color:grey;
    color: white;
  
    font-size: 16px;
    justify-content:center;">Welcome to illusion, First visit the link to activate your account
To verify your email </p></br><a style="background-color:green;

padding: 10px 12px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size:15px;
  font-weight: normal;
color:white;"  href="{{route('sendEmailDone',["email" => $user->email,"verifyToken"=>$user->verifyToken])}}">Click</a>