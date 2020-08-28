@extends('layouts.head')
<h3>Illusion Bartender Academy</h3> <br>
Welcome to illusion, First visit the link to activate your account
To verify your email <a class="btn btn-info" role="button" href="{{route('sendEmailDone',["email" => $user->email,"verifyToken"=>$user->verifyToken])}}"><button class="btn btn-info">Click</button></a>