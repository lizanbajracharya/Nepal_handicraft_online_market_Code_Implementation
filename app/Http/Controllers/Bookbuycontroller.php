<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Product;
use App\User;
use App\Booking;
use App\Payment;
use Illuminate\Http\Request;

class Bookbuycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        $users = User::all();
        $booking=Booking::all();
        return view('user.booking')->with('product',$product)
                                        ->with('booking',$booking)
                                        ->with('user',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        $buy->save();
        return redirect()->route('transaction.index');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $booking= new Booking();       
        $booking->Userid = $request->user()->id;        
        $booking->Productid = $request->upload;
        $booking->Price=$request->price;
        $booking->Quantity=$request->quantity;
        $newOrders = $request->quantity;     
        $stock = Product::where('id', $booking->Productid)->first()->Quantity;
        if($stock >= $request->quantity){
         Product::where('id', $booking->Productid)->decrement('Quantity',$request->quantity);
        }
        $booking->save();
        return redirect()->route('book.index')->with('success','Item Successfully Booked');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user= User::all();
        $booking=Booking::findorFail($id);  
        $booking->delete();          
        return view('bookedbuy')->with('user',$user)->with('booking',$booking);
       
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
        return view('book',compact('user','product'));
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
             $product->Status= $request->status;
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
        $booking = Booking::findOrFail($id);       
        $newOrders = $booking->Quantity;     
        $stock = Product::where('id', $booking->Productid)->first()->Quantity;
        if($stock >= $newOrders){
         Product::where('id', $booking->Productid)->increment('Quantity',$newOrders);
        }
        $booking->delete();   
        Booking::where('created_at', '<', Carbon::now()->subMinutes(30))->delete();     
        return redirect()->back()->with('success','Booking Cancellation Succesful');
    }
}
