<?php
use Illuminate\Support\Facades\File;
namespace App\Http\Controllers;
use App\album;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abc = album::orderBy('id','desc')->paginate(5);

        //dd($blogs);
      return view('album.index',compact('abc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('album.create');
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
            'name'=>'required|unique:albums|min:2|max:14',
      
            'descrip' => 'required',
         
  
        ]);



        if($request->hasFile('image')) {
            //get filename with extension
            $filenamewithextension = $request->file('image')->getClientOriginalName();
     
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
     
            //get file extension
            $extension = $request->file('image')->getClientOriginalExtension();
     
            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;
     

            $request->file('image')->storeAs('public/album_images/', $filenametostore);
     
            //Resize image here
            $thumbnailpath = public_path('storage/album_images/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(650, 500)->save($thumbnailpath);
      
        }
               
          $blogs = new album();
          $blogs->name = $request->name;
          $blogs->descrip = $request->descrip;
          $blogs->image =  $filenametostore;
          $request->session()->flash('message','Album added Successfully');
          $blogs->save();
           return \Redirect('/album');
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
        $abc= album::find($id);

        //dd($blogs);
         return view('album.edit',compact('abc'));//
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
                  'descrip' => 'required',
           
  
        ]);  
        $filenameToStore = album::find($id)->image;
        $blogs = album::find($id);

       
        if($request->hasFile('image')) {
            //get filename with extension
            $filenamewithextension = $request->file('image')->getClientOriginalName();
     
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
     
            //get file extension
            $extension = $request->file('image')->getClientOriginalExtension();
     
            //filename to store
            $filenameToStore = $filename.'_'.time().'.'.$extension;
     

            $request->file('image')->storeAs('public/album_images/',$filenameToStore);
     
            //Resize image here
            $thumbnailpath = public_path('storage/album_images/'.$filenameToStore);
            $img = Image::make($thumbnailpath)->resize(650, 500)->save($thumbnailpath);
      
        }
       
        $blogs->name = $request->name;
        $blogs->descrip = $request->descrip;
        $blogs->image = $filenameToStore;
    
        $blogs->save();
        return \Redirect('/album');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
        $blogs = album::find($id);
    
    

        unlink(storage_path('app/public/album_images/'.$blogs->image));
  
    
        album::where('id',$id)->delete();
        

        return redirect('/album');
    }
}
