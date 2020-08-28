<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Post;
use App\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function __construct()
    {
            $this->middleware('auth:admin');
       }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //get();
        $abc = Post::orderBy('id','desc')->paginate(6);

        //dd($blogs);
      return view('blog.index',compact('abc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $abc =  Category::orderBy('id','asc')->get();
        return view('blog.create',compact('abc'));
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
            'title'=>'required|unique:posts|min:2|max:20',
            'subtitle' => 'required|min:40|max:120',
            'slug' => 'required',
            'body' => 'required',
            'image'=>'required|image'
            ]);

       // return $request->all(s); for diplaying requested data
  
       /// if column_name and input name is differene $attributes['body'] = $request->editor1;
   //    $attributes =   $request->all();
   //$blogs = Post::create($attributes);
       if($request->hasFile('image')){
        //Get filename with the extension
        $filenameWithExt = $request->file('image')->getClientOriginalName();
        //Get just file name 
        $filename= pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //get just ext
        $extension= $request->file('image')->getClientOriginalExtension();
        //filename to store
        $filenameToStore = $filename.'_'.time().'.'.$extension;
        //Upload image
       //Image::make(file('image'))->resize(750, 375);
        $path = $request->file('image')->storeAs('public/blog_images', $filenameToStore);
               }
               else{
                   $FileNameToStore = 'noimage.jpg';
               }
           
      $blogs = new Post();
      $blogs->title = $request->title;
      $blogs->subtitle = $request->subtitle;
      
      $blogs->slug = $request->slug;
      $blogs->body = $request->body;
      $blogs->image = $filenameToStore;
    
      $blogs->save();
      $blogs->categories()->sync($request->categories);
      $request->session()->flash('message','Blog added Successfully');
 
      return \Redirect('/blog');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

       // $blogs = Post::find($id);
        

        //dd($blogs);
         //return view('blog.edit',compact('blogs'));

         $post = Post::with('categories')->where('id',$id)->first();
        
         $categories =Category::all();
         return view('blog.edit',compact('categories','post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        
        $filenameToStore = Post::find($id)->image;
        $blogs = Post::find($id);
       
       
        if($request->hasFile('image')){
            //Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //Get just file name 
            $filename= pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension= $request->file('image')->getClientOriginalExtension();
            //filename to store
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
           // Image::make(file('image'))->resize(750, 375);
            $path = $request->file('image')->storeAs('public/blog_images', $filenameToStore);
                   }
                 
       
        $blogs->title = $request->title;
        $blogs->subtitle = $request->subtitle;
        $blogs->image = $filenameToStore;
        $blogs->categories()->sync($request->categories);
        $blogs->save();
        return \Redirect('/blog');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $blogs = Post::find($id);
    
    

        unlink(storage_path('app/public/blog_images/'.$blogs->image));
  
    
        post::where('id',$id)->delete();
        
        session()->flash('message','Blog deleted Successfully');
        return redirect('/blog');


        //$post = Post::find($id);
      
        //check for correct user to edit their own postoi
      //$post->delete();
     // return redirect('/blog');
    }
}
