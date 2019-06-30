<?php

namespace App\Http\Controllers;


use App\Payment;
use App\User;
use App\Product;
use Illuminate\Http\Request;

class Buycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user= User::all();
        $product=Product::all();
        return view('buy',compact('user','product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buy=new Payment();
        $buy->Paymentway=$request->payment;
        $ree=$request->price;
        $qty=$request->quantity;
        $total=$ree * $qty;
        $buy->Price = $total;
        $buy->Userid=$request->user()->id;
        $buy->Productid=$request->upload;
        $buy->Location=$request->location;
        $buy->Contact=$request->contact;
        $buy->Quantity=$request->quantity;
        $newOrders = $request->quantity;     
        $stock = Product::where('id', $buy->Productid)->first()->Quantity;
        if($stock >= $request->quantity){
         Product::where('id', $buy->Productid)->decrement('Quantity',$request->quantity);
        }
        $buy->save();
        return redirect()->route('transaction.index')->with('success','Item Bought successfully!');  
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
        $user= User::all();
        $product=Product::findorFail($id);
        return view('buy',compact('user','product'));
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
        $product= Product::findOrFail($id);
        $qty=$request->quantity;
        $qtyproduct=$product->Quantity;
        $diff=$qtyproduct - $qty;
        $product->Quantity = $diff;
        $product->save();
        return redirect()->route('welcome');      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
