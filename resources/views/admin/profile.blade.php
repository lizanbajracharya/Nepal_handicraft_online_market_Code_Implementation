@extends('admin.sidebar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">           
                <div class="card-header">{{ __('Edit Profile') }}</div>

                <div class="card-body">
                <form method="POST" action="{{route('profileadmin.update',Auth::user()->id)}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="name">First Name</label> 
                <input type="text" name="name" class="form-control" required value="{{Auth::user()->Firstname}}">
            </div>
        </div>       
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="price">Last Name</label> 
                <input class="form-control" required="required" name="lname" type="text" value="{{Auth::user()->Lastname}}">
            </div>
        </div>             
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="desc">Address</label> 
                <input type="text" name="address" class="form-control" value="{{Auth::user()->Address}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="name">Email</label> 
                <input type="text" name="email" class="form-control" required value="{{Auth::user()->email}}">
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

            </div>
        
    </div>
</div>
@endsection
