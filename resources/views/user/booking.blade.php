@extends('user.sidebaruser')

@section('content')
<h2 class="text-center py-2">Booking Details</h2>
<div class="container">
<div class="row">
<div class="col-md-12 table-responsive">
<table class="table table-bordered table-striped table-hover">
<thead>
    <tr>
        <th>Product Name</th> 
        <th>Booking Date</th>
        <th>Quantity</th>
        <th>Buy</th>
        <th>Delete</th>                                                                     
    </tr>
</thead>
<tbody>
@foreach ($booking as $transaction)
@if(Auth::user()->id == $transaction->Userid)
<tr>
<?php $product = App\Product::findorFail($transaction->Productid)?> 
        <td>{{$product->Productname}}</td>  
        <td>{{$product->created_at}}</td>
        <td>{{$transaction->Quantity}}</td>  
        <td>                 
        <a class="btn btn-primary" href="{{route('book.show',['id'=>$transaction->id],['pid'=>$product->id])}}">Buy</a>
        </td>           
        <td>
        <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete</button>
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deleting the data??</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">Are u sure?</div>
            <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <button class="btn btn-primary" href="{{ route('book.destroy',['id'=>$transaction->id])}}"
            onclick="event.preventDefault();
                document.getElementById('delete-form').submit();">Delete</button>

            <form id="delete-form" action="{{ route('book.destroy',['id'=>$transaction->id])}}" method="POST" style="display: none;">
        {{ csrf_field() }}
            {{method_field('DELETE')}}
    </form>
</div>
    </div>
</div>
</div>
        </td>
    </tr>
    @endif                      
    @endforeach   
</tbody>

</table>
</div>
</div>
</div>
@endsection