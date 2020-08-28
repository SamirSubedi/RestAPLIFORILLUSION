<?php

namespace App\Http\Controllers;
use App\Download;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 

class DownloadController extends Controller
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
        $abc = Download::orderBy('id','desc')->paginate(3);

        //dd($blogs);
      return view('download.index',compact('abc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('download.create');
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
            $path = $request->file('image')->storeAs('public/files', $filenameToStore);
                   }
             
               
          $blogs = new Download();
          $blogs->name = $request->name;
        
        
          $size = Storage::size($path);
          $size=($size/1024);
         
          $size=bcdiv($size,1,2);
          $size=$size.kb;
          $blogs->size = $size." ";
       

          $blogs->extension =  $extension;
          
            $blogs->size = $size." ";
      
          $blogs->file = $filenameToStore;
        
          $blogs->save();
         
     
          return \Redirect('/download');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Download::find($id);

        //dd($blogs);
         return view('download.edit',compact('category'));//
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
            'name'=>'required|min:2|max:14',
                 
           
  
        ]);  
        $filenameToStore = download::find($id)->file;
        $blogs = download::find($id);

        if($request->hasFile('file')){
            //Get filename with the extension
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            //Get just file name 
            $filename= pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension= $request->file('file')->getClientOriginalExtension();
            //filename to store
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
           // Image::make(file('image'))->resize(750, 375);
            $path = $request->file('file')->storeAs('public/files', $filenameToStore);
            $blogs->extension =  $extension;
            $size = Storage::size($path);
            $size=($size/1024);
           
            $size=bcdiv($size,1,2);
            $size=$size.kb;
            $blogs->size = $size." ";
                   }
       
        $blogs->name = $request->name;
      
        $blogs->file = $filenameToStore;
    
        $blogs->save();
        return \Redirect('/download');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs = Download::find($id);
    
    

        unlink(storage_path('app/public/files/'.$blogs->file));
  
    
        download::where('id',$id)->delete();
        

        return redirect('/download');
    }
}
