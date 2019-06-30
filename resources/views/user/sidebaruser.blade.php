<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>User Panel</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/5b14d241b3.js%22%3E"></script>
  <!-- Custom styles for this template-->
  <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.css')}}">
  <script type="text/javascript" src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/jquery.printPage.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/jquery-2.2.4.min.js')}}"></script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('userdashboard')}}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fa fa-user-secret"></i>
        </div>
        <div class="sidebar-brand-text mx-3">User Dashboard</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{route('userdashboard')}}">
        <i class="fa fa-tachometer"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        User Work
      </div>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('profile.create')}}">
        <i class="fa fa-product-hunt"></i>
          <span>Profile</span>
        </a>              
      </li>
     
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('addproduct.create')}}">
        <i class="fa fa-cog"></i>
          <span>Add Product</span>
        </a>              
      </li>

      <!-- Nav Item - Product -->
      <li class="nav-item">
        <a class="nav-link" href="{{route('addproduct.index')}}">
        <i class="fa fa-cog"></i>
          <span>View Product</span></a>
      </li>

      <!-- Nav Item - User -->
      <li class="nav-item">
        <a class="nav-link" href="{{route('transaction.index')}}">
        <i class="fa fa-user"></i>
          <span>Transaction Details</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('book.index')}}">
        <i class="fa fa-user"></i>
          <span>Booking Details</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('company.index')}}">
        <i class="fa fa-plus"></i>
          <span>Add Company</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('company.create')}}">
        <i class="fa fa-university"></i>
          <span>Company Info</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('welcome')}}">
        <i class="fa fa-home"></i>
          <span>Back To Home</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
        <i class="fa fa-power-off"></i>
          <span>Log Out</span></a>
      </li>
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">Logout</button>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </div>
      </div>
    </div>
  </div>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"><i class="fa fa-arrow-left text-white"></i></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
          <i class="fa fa-arrow-left"></i>
          </button>

        </nav>
        <!-- End of Topbar -->
        @include('flashmessage')
@yield('content')
</div></div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="{{asset('js/app.js')}}"></script>

</body>

</html>
