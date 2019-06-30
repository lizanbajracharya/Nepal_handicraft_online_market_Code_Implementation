@extends('user.sidebaruser')

@section('content')
<div class="container mb-3">
<h2 class="text-center py-2">Edit Product: <b>{{$product->Productname}}</b></h2>
    <form method="POST" action="{{route('addproduct.update',['id'=>$product->id],Auth::user()->id)}})}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="name">Product Name</label> 
                <input type="text" name="name" class="form-control" required value="{{$product->Productname}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="image">Product Image</label>
                <input type="file" name="image" class="form-control-file" accept="image/*">
            </div>
            <div class="col-md-6">
                <img src="{{asset($product->Productimage)}}" alt="{{$product->Productname}}" width="50%">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="price">Price</label> 
                <input class="form-control" required="required" name="price" type="number" value="{{$product->Price}}">
            </div>
        </div>       
        <div class="row">
            <div class="col-md-12 form-group">
               <label for="availability">Quantity</label><br>
               <input class="form-control" required="required" name="Quantity" type="number" value="{{$product->Quantity}}">
            </div>
        </div>                       
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="price">Product Category</label> 
                <select class="form-control" required="required" name="category">
                    <option value="">--Select a Product Category--</option>
                    @foreach ($category as $item)
                        <option value="{{$item->id}}">{{$item->Categoryname}}</option>
                    @endforeach
                </select>
            </div>
        </div>
       
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="desc">Description</label> 
                <textarea name="description" rows="5" class="form-control">{{$product->Productdetail}}</textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <button type="submit" name="upload" class="btn btn-primary" style="width:120px; font-size:20px">
                <i class="fa fa-sign-in" aria-hidden="true"></i> &nbsp; Update
                </button>
            </div>
        </div>
    </form>
</div>

@endsection