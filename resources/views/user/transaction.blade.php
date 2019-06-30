@extends('user.sidebaruser')

@section('content')

<h2 class="text-center py-2">Transaction Details</h2>
<div class="container">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Product Name</th>                        
                        <th>Total Price</th>
                        <th>Payment Way</th>
                        <th>Quantity</th>
                        <th>Print</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($transaction as $transaction)
                @if(Auth::user()->id == $transaction->Userid)
            <tr>
            <?php $product = App\Product::findorFail($transaction->Productid)?> 
                        <td>{{$product->Productname}}</td>
                <td>{{$transaction->Price}}</td>
                <td>{{$transaction->Paymentway}}</td>
                <td>{{$transaction->Quantity}}</td>
                <td><a href="{{ route('transaction.edit',['id'=>$transaction->id])}}" class="btn btn-primary">Print</a></td>
                   </tr>
                   @endif                      
                    @endforeach   
                </tbody>
                
            </table>
        </div>
    </div>
</div>
@endsection