<?php

namespace App\Http\Controllers;

use App\User;
use App\Product;
use Illuminate\Http\Request;
use App\Category;
use App\Review;
class Productcontroller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $product = Product::all();
        $category = Category::get();
        $users = User::all();
        
        return view('user.product')->with('product',$product)
                                    ->with('user',$users)
                                    ->with('category',$category);
                                    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        return view('user.addproduct',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->Productname = $request->name; 
        $product->Price = $request->price; 
        $product->Productdetail = $request->description; 
        $product->Quantity = $request->Quantity;  
        $product->Categoryid = $request->category;   
        $product->Userid = $request->user()->id;        
        $image = $request->image;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('Uploads/product',$image_new_name); 
        $img = 'Uploads/product/'.$image_new_name;

        $product->Productimage = $img;
        $product->save();
        return redirect()->back()->with('success','Product Added Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $review = Review::all();
        return view('showproduct')->with('product',$product)
                                    ->with('review',$review);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);   
        $category = Category::all();     
       
        return view('user.editproduct')->with('product',$product)
                                        ->with('category',$category);
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
        $product = Product::findOrFail($id);
        $product->Productname = $request->name; 
        $product->Price = $request->price; 
        $product->Productdetail = $request->description; 
        $product->Quantity = $request->Quantity; 
        $product->Categoryid = $request->category; 
        $current = $product->Productimage;
        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('Uploads/product',$image_new_name); 
            $img = 'Uploads/product/'.$image_new_name;
            $product->Productimage = $img;

            if($current != $img){
                unlink($current);
            }
        }
        
        $product->save();
        return redirect()->route('addproduct.index')->with('success','Product update Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        unlink($product->Productimage);
        return redirect()->back()->with('success','Successfully Deleted');
    }
}
