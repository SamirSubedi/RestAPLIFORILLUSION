<?php

namespace App\Http\Controllers;
use App\gallery;
use App\album;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class GalleryController extends Controller
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

      //  $comment =gallery::all()->album();
     //dd($comment);
        $abc = gallery::orderBy('id','DESC')->paginate(8);
        return view('gallery.index',compact('abc'));
     //
}
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $abc =  album::orderBy('id','asc')->get();
        return view('gallery.create',compact('abc'));
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   if($request->hasFile('image')){
   foreach ($request->image as $file)
            {
            //Get filename with the extension
            $filename= $file->getClientOriginalName();
            $file->storeAs('public/gallery_images', $filename);
            $blogs = new gallery();
            $blogs->album_id =$request->gallery;
            $blogs->image = $filename;  
            $blogs->save();           
                  }
                  $request->session()->flash('message','Image added Successfully');
 
                  return \Redirect('/gallery');
       
    }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

       // $blogs = Post::with('albu')->where('id',$id)->first();
        $blog = album::find($id)->galleries;
        $ab = album::find($id)->first();

        return view('image-gallery',compact('ab','blog'));
     
       // return view('image-gallery')->with('blog',$blog);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
   
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs = gallery::find($id);
    
    

        unlink(storage_path('app/public/gallery_images/'.$blogs->image));
  
    
        gallery::where('id',$id)->delete();
       session()->flash('message','Image deleted Successfully');

        return redirect('/gallery');
    }
}
