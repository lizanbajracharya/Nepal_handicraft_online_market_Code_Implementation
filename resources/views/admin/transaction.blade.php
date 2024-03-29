@extends('admin.sidebar')

@section('content')
<h2 class="text-center py-2">Transaction Details</h2>
<div class="container">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Product Name</th>                        
                        <th>Price</th>
                        <th>Payment Way</th>
                        <th>Location</th>
                        <th>Contact</th>
                        <th>Quantity</th>
                        <th>User</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($transaction as $transaction)
                
            <tr>
            <?php $product = App\Product::findorFail($transaction->Productid)?> 
                        <td>{{$product->Productname}}</td>
                <td>{{$transaction->Price}}</td>
                <td>{{$transaction->Paymentway}}</td>
                <td>{{$transaction->Location}}</td>
                <td>{{$transaction->Contact}}</td>
                <td>{{$transaction->Quantity}}</td>
                <?php $user = App\User::findorFail($transaction->Userid)?> 
                        <td>{{$user->email}}</td>
                   </tr>
                                     
                    @endforeach   
                </tbody>
                <link rel="stylesheet" type="text/css" href="{{asset('css/datatable.min.css')}}"/>
                <script type="text/javascript" src="{{asset('js/datatable.min.js')}}"></script>
                <script>
                    $(".table").DataTable();
                </script>
            </table>
        </div>
    </div>
</div>
@endsection