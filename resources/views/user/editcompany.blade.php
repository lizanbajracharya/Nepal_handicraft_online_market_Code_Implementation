@extends('user.sidebaruser')

@section('content')
<div class="container mb-3">
<h2 class="text-center py-2">Edit Company: <b>{{$company->Companyname}}</b></h2>
    <form method="POST" action="{{route('company.update',['id'=>$company->id])}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="name">Company Name</label> 
                <input type="text" name="name" class="form-control" required value="{{$company->Companyname}}">
            </div>
        </div>       
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="price">Company Info</label> 
                <input class="form-control" required="required" name="info" type="text" value="{{$company->Companyinfo}}">
            </div>
        </div>             
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="desc">Owner Information</label> 
                <input type="text" name="ownername" rows="5" class="form-control" value="{{$company->Ownername}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="name">Address</label> 
                <input type="text" name="address" class="form-control" required value="{{$company->Address}}">
            </div>
        </div>  
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="name">Phone No</label> 
                <input type="text" name="phone" class="form-control" required value="{{$company->Phoneno}}">
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