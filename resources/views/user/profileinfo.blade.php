@extends('user.sidebaruser')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-8 offset-3">
    <h1 text-align="center">Profile Info</h1>
        <div class="row">
            <div class="col-md-6">
                <label>First Name</label>
            </div>
            <div class="col-md-6">
                <p>{{Auth::user()->Firstname}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Last Name</label>
            </div>
            <div class="col-md-6">
                <p>{{Auth::user()->Lastname}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Address</label>
            </div>
            <div class="col-md-6">
                <p>{{Auth::user()->Address}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Email</label>
            </div>
            <div class="col-md-6">
                <p>{{Auth::user()->email}}</p>
            </div>
        </div>
            <div class="row">
                <div class="col-md-6">
                    <label>UserName</label>
                </div>
                <div class="col-md-6">
                    <p>{{Auth::user()->Username}}</p>
                </div>
            </div>                
    </div>
</div>
</div>
    <div class="row">
        <div class="col-md-3">
            <a class="btn btn-primary btn-rounded px-3 mx-3 my-3" href="{{route('profile.index',Auth::user()->id)}}"> Edit Profile</a>
        </div>
    </div>
@endsection