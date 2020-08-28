<?php

namespace App\Http\Controllers;
use App\Post;
use App\Bartender;
use App\Download;
use App\gallery;
use App\album;
use App\User;
use App\video;
use App\Category;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */

 
    public function index()
    {
      $abc = Post::orderBy('id','desc')->paginate(3);
      
        
      return view('welcome',compact('abc'));
    }
    public function profile()
    {
  
      $abc = Bartender::orderBy('id','desc')->paginate(6);

      
      return view('profile',compact('abc'));
        
    }
    public function message()
    {
  
     

      
      return view('message');
        
    }
    public function video()
    {   
      $abc = video::orderBy('id','desc')->paginate(4);
      return view('video',compact('abc'));
        
    }


    public function blog()
    {
   
      $abc = Post::orderBy('id','DESC')->paginate(3);

      

      return view('blog1',compact('abc'));
    }
    public function post(Post $slug)
    {
        //dd($blogs);
        $abc = Post::orderBy('id','DESC')->paginate(3);
      
      return view('blog-details',compact('slug','abc'));



    }
    public function download()
    {
        
      $abc = Download::orderBy('id','DESC')->paginate(3);
      
      return view('DownloadsUser',compact('abc'));
    }
   

    public function image()
    {
        $abc = album::orderBy('id','desc')->paginate(6);
      
        
      return view('/imagealbum',compact('abc'));
    }

    public function search()
    {
      
      $abc = Bartender::orderBy('id','desc')->paginate(6);

      
            return view('search',compact('abc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   }
