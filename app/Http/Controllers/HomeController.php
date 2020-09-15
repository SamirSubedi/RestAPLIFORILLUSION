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
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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
      SEOMeta::setTitle('Illusion Bartender Academy');
      SEOMeta::setDescription('Best Bartender School in Nepal focusing on deveoping competent bartenders providing skill oriented trainings.We focus on practical oriented teaching ,Apply Here');
      $abc = Post::orderBy('id','desc')->paginate(3);
      $video = video::orderBy('id','desc')->paginate(3);
      return view('welcome',compact('abc','video'));
    }
    public function profile()
    {
      SEOMeta::setTitle('Bartenders In Nepal');
      SEOMeta::setDescription('Illusion bartender keep profile of  different bartenders with vital experiences and willing to showcase their skills and talent,Complete Bartender School.View here');
      $abc = Bartender::orderBy('id','desc')->paginate(6);

      
      return view('profile',compact('abc'));
        
    }
    public function message()
    {
  
      SEOMeta::setTitle('Contact Illusion Bartender Academy');

      
      return view('message');
        
    }
    public function video()
    {   
      SEOMeta::setTitle('Illusion Bartender Academy Video');
      SEOMeta::setDescription('Illusion bartender keeps on doing various events and competition to encourage bartenders to display their competence.View here');
      $abc = video::orderBy('id','desc')->paginate(4);
      return view('video',compact('abc'));
        
    }


    public function blog()
    {
      SEOMeta::setTitle('Illusion Bartender Academy Blog');
      SEOMeta::setDescription('Various blog updated by Illusion bartender academy to deploy knowledge to our reader.View here');
      $abc = Post::orderBy('id','DESC')->paginate(3);

      

      return view('blog1',compact('abc'));
    }
    public function post(Post $slug)
    {
    
        //dd($blogs);
        $abc = Post::orderBy('id','DESC')->paginate(3);
        SEOMeta::setTitle($abc->slug);
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
      
      $abc = Bartender::orderBy('id','desc')->paginate(9);

      
            return view('search',compact('abc'));
    }

    public function searchprofile()
    {
      $q = Input::get ( 'q' );
      if($q != ""){
      $abc = Bartender::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'email', 'LIKE', '%' . $q . '%' )->paginate (6)->setPath ( '' );
     
      $abc->appends(array(
                  'q' => Input::get ('q') 
          ));
        
      if (count ($abc) > 0){
      
          return view ('profile',compact('abc'));
      }
          return view ( 'profile' )->withMessage( 'No Details found. Try to search again !' );
  }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    }}
