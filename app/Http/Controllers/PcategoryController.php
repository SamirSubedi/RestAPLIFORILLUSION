<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat_Product;
class PcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Cat_Product::orderBy('id','desc')->paginate(12);
        return view('product_category.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('product_category.create');
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
        'name'=>'required|unique:cat__products|min:2|max:20',
      
     
       
        ]);
    $blogs = new Cat_Product();
    $blogs->name = $request->name;
    
 
  
    $blogs->save();
    $request->session()->flash('message','Category added Successfully');

    return \Redirect('/pcategory');
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
    

        $category = Cat_Product::find($id);    
        return view('product_category.edit',compact('category'));
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
       
        $blogs=Cat_Product::find($id);
        $blogs->name=$request->name;
        $blogs->save();
        $request->session()->flash('message','Product Category Updated Successfully');
        return redirect('/pcategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
 
        Cat_Product::where('id',$id)->delete();
        
        session()->flash('message','Product Category deleted Successfully');
        return redirect('/pcategory');
    }
}
