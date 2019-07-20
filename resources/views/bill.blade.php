@extends('user.sidebaruser')

<style type="text/css" media="print">
    body{
        visibility: hidden;
    }
    #bill{
        margin-top:10%;
        margin-right:5%;
        visibility: visible;
    }
</style>
@section('content')

<div class="container">

<a class="btn btn-outline-success offset-5" onclick="window.print();return false;" id="print"><i class="fa fa-print"></i>Print </a>
<div id="bill">


    <div class="container">
     
      <div class="row pad-top-botm ">
         <div class="col-lg-3 col-md-4 col-sm-3 ">
         <img src="{{ asset('assets/photos/download.jpg')}}" width="100" height="100" alt="logo" style="padding-bottom:20px;">
         </div>
          <div class="col-lg-3 col-md-3 col-sm-3">
            
               <strong>  Nepal Handicraft Online Market</strong>
         </div>
     </div>
     <div  class="row text-center contact-info">
         <div class="col-lg-12 col-md-12 col-sm-12">
             <hr />
             <span>
                 <strong>Email : </strong>  info@yourdomain.com 
             </span>
             <hr />
         </div>
     </div>
     <div  class="row pad-top-botm client-info">
         <div class="col-lg-6 col-md-6 col-sm-6">
         <h4>  <strong>Client Information</strong></h4>
           <strong> Client name: <?php $user = App\User::findorFail($transaction->Userid)?>{{$user->Username}} </strong>
             
         </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            
               <h4>  <strong>Payment Details </strong></h4>
            <b>Bill Amount :  {{$transaction->Price}} </b>
              <br />
               Bill Date :  {{$transaction->created_at}}
              <br />
               Delivery Location : {{$transaction->Location}}
              <br />
               Contact Information :  {{$transaction->Contact}}
               <br />
               Payment Way: {{$transaction->Paymentway}}
         </div>
     </div>
     <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
           <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Perticulars</th>
                                    <th>Quantity.</th>
                                    <th>Unit Price</th>
                                     <th>Sub Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <?php $product = App\Product::findorFail($transaction->Productid)?> 
                                    <td>{{$product->Productname}}</td>
                                    <td>{{$transaction->Quantity}}</td>
                                    <td>{{$product->Price}}</td>
                                    <td>{{$transaction->Price}}</td>
                                </tr>                               
                            </tbody>
                        </table>
               </div>
             <hr />
             <div class="ttl-amts">
               <h5>  Total Amount : {{$transaction->Price}}</h5>
             </div>
         </div>
     </div>
      <div class="row">
         </div>
 </div>
 </div>
@endsection