@extends('user.sidebaruser')

@section('content')

<div class="container">
<div class="row">
    <div class="col-md-8 offset-3">
    <h1 class="text-center">Nepal Handicraft Online Market</h1>
    <h1 class="text-center">Bill</h1>
        <div class="row text-center">
            <div class="col-md-6">
            
                <label>Payment Way</label>
            </div>
            <div class="col-md-6">
                <p>{{$transaction->Paymentway}}</p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-6">
            <?php $product = App\Product::findorFail($transaction->Productid)?> 
                <label>Product Name</label>
            </div>
            <div class="col-md-6">
                <p>{{$product->Productname}}</p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-6">
                <label>Price</label>
            </div>
            <div class="col-md-6">
                <p>{{$product->Price}}</p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-6">
                <label>Quantity</label>
            </div>
            <div class="col-md-6">
                <p>{{$transaction->Quantity}}</p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-6">
                <label>Total</label>
            </div>
            <div class="col-md-6">
                <p>{{$transaction->Price}}</p>
            </div>
        </div>
                         
    </div>
</div>

</div>
    </div>
@endsection