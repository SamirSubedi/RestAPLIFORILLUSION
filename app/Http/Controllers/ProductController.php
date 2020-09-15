<?php

namespace App\Http\Controllers;
use App\Product;
use App\Cat_Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
       $product=Product::orderBy('id','desc')->paginate(7);
       return view('product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Cat_Product::all();
        
       return view('product.create',compact('category'));
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
            'name'=>'required|unique:products|min:2|max:20',
           
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
        $path = $request->file('image')->storeAs('public/product_images', $filenameToStore);
               }
               else{
                   $FileNameToStore = 'noimage.jpg';
               }
           
      $blogs = new Product();
      $blogs->name = $request->name;
      $blogs->price = $request->price;
      $blogs->quantity = $request->quantity;
      $blogs->slug = $request->slug;
      $blogs->description = $request->descrip;
      $blogs->category = $request->check;
      $blogs->image = $filenameToStore;
      $blogs->save();
      $request->session()->flash('message','Products added Successfully');
      return \Redirect('/product');
      
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
        $post = Product::find($id);    
        return view('product.edit',compact('post'));
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
        $filenameToStore =  Product::find($id)->image;
        
        $namedb =  Product::find($id)->name;
        $slugdb =  Product::find($id)->slug;

        $blogs = Product::find($id);
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
            $path = $request->file('image')->storeAs('public/product_images', $filenameToStore);
                   }
                 
               
                  
                   if($namedb!=$request->name)
                   {
                    $blogs->name = $request->name;
                   }

                   if($slugdb!=$request->slug)
                   {
                    $blogs->slug = $request->slug;
                   }
                   $blogs->price = $request->price;
                   $blogs->quantity = $request->quantity;
             
                   $blogs->description = $request->descrip;
                   $blogs->image = $filenameToStore;
                   $blogs->save();
                   $request->session()->flash('message','Products Updated Successfully');
                   return \Redirect('/product');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs = Product::find($id);
    
    

        unlink(storage_path('app/public/product_images/'.$blogs->image));
  
    
        Product::where('id',$id)->delete();
        
        session()->flash('message','Product deleted Successfully');
        return redirect('/product');

    }
}
