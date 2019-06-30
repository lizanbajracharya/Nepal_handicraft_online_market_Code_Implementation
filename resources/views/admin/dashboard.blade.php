@extends('admin.sidebar')

@section('content')
<div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Category</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{App\Category::count()}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-calendar fa-3x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">User</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{App\User::where('UserType','=','User')->count()}}</div>
                    </div>
                    <div class="col-auto">
                    <i class="fa fa-user-circle fa-3x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

           </div>

<div class="alert alert-success text-center">
    <h4>Welcome {{ Auth::user()->Firstname }} to the dashboard</h4>
</div>
<div class="main-wrapper">
    <h1 class="text-center dashboard-welcome">{{ Auth::user()->Firstname }}</h1>
</div>
  </div>
    </div>
</div>    

@endsection