<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\video;
class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
            $this->middleware('auth:admin');
       }
    public function index()
    {
        $abc = video::orderBy('id','desc')->paginate(4);

        //dd($blogs);
      return view('video.index',compact('abc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $this->validate($request,[
            'title'=>'required|min:2|max:14',
      
            'descrip' => 'required',
            'yvideo' => 'required|unique:videos',
         
  
        ]);

        $aa=$request->yvideo;
       $ba=substr($aa,32,13);
    $ba="embed/".$ba;

      $ab= substr_replace($aa,$ba,24);
          
          $blogs = new video();
          $blogs->title = $request->title;
          $blogs->descrip = $request->descrip;
          $blogs->yvideo =  $ab;
          $request->session()->flash('message','Video added Successfully');
          $blogs->save();
           return \Redirect('/video');
    }


  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $abc = video::find($id);

        //dd($blogs);
         return view('video.edit',compact('abc'));//
       
    }

  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required|min:2|max:14',
                  'descrip' => 'required',
                  'yvideo' => 'required'
           
  
        ]);  
      
        $blogs = video::find($id);


       
        $blogs->title= $request->title;
        $blogs->descrip = $request->descrip;
        
    
        $blogs->save();
        return \Redirect('/video');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs = video::find($id);
 
    
        video::where('id',$id)->delete();
       session()->flash('message','Video deleted Successfully');

        return redirect('/video');
    }
}
