<?php

namespace App\Http\Controllers;
use App\Bartender;
use App\User;

use Illuminate\Http\Request;

class BartenderController extends Controller
{
    public function __construct()
    {
            $this->middleware('auth');
       }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $user = auth()->user()->id;
     
        $abc=Bartender::where('user_id',$user)->paginate(3);
     
        //dd($blogs);
      return view('bartender.dashboard',compact('abc'));
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('bartender.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user()->id;
     
        $this->validate($request,[
            'email'=>'required|unique:bartender',
            'phone' => 'required',
       
            'image'=>'required|image'
            ]);
            $blogs = new Bartender();

       // return $request->all(s); for diplaying requested data
  
       /// if column_name and input name is differene $attributes['body'] = $request->editor1;
   //    $attributes =   $request->all();
   //$blogs = Post::create($attributes);
   if($request->hasFile('file')){
    //Get filename with the extension
    $filenameWithExt = $request->file('file')->getClientOriginalName();
    //Get just file name 
    $filename= pathinfo($filenameWithExt, PATHINFO_FILENAME);
    //get just ext
    $extension= $request->file('file')->getClientOriginalExtension();
    //filename to store
    $filenameTo = $filename.'_'.time().'.'.$extension;
    //Upload image
   //Image::make(file('image'))->resize(750, 375);
    $path = $request->file('file')->storeAs('public/cv_files', $filenameTo);
           }

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
        $path = $request->file('image')->storeAs('public/cv_images', $filenameToStore);
               }
           
               $blogs->image = $filenameToStore;
         
           
 
      $blogs->name = $request->name;
      $blogs->email = $request->email;
      $blogs->video = $request->video;
    
      $blogs->user_id =$user;
      $blogs->phone = $request->phone;
      $blogs->address = $request->address;
    
      $blogs->cv = $filenameTo;
    
      $blogs->save();

      $request->session()->flash('message','Bartender Profile added Successfully');
 
      return \Redirect('/bartender');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ab = Bartender::find($id);
        return view('bartender.profile',compact('ab'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $blogs = Bartender::find($id);
    
    

        unlink(storage_path('app/public/cv_images/'.$blogs->image));
        unlink(storage_path('app/public/cv_files/'.$blogs->cv));
    
        Bartender::where('id',$id)->delete();
        
        session()->flash('message','Profile deleted Successfully');
        return redirect('/bartender');
    }
}
