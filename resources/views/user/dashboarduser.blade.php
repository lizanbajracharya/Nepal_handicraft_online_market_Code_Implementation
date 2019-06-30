@extends('user.sidebaruser')

@section('content')
<div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Product Listed</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{App\Product::where(['Userid' => Auth::user()->id])->count()}}</div>
                    </div>
                    <div class="col-auto">
                    <i class="fa fa-product-hunt fa-3x text-gray-300"></i>
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
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Booked Items</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{App\Booking::where(['Userid' => Auth::user()->id])->count()}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-bookmark fa-3x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Company Listed</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{App\Company::where(['Userid' => Auth::user()->id])->count()}}</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-university fa-3x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Transaction done</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{App\Payment::where(['Userid' => Auth::user()->id])->count()}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-dollar-sign fa-3x text-gray-300"></i>
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