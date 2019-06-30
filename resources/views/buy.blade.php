<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />

<!-- Facebook and Twitter integration -->
<meta property="og:title" content=""/>
<meta property="og:image" content=""/>
<meta property="og:url" content=""/>
<meta property="og:site_name" content=""/>
<meta property="og:description" content=""/>
<meta name="twitter:title" content="" />
<meta name="twitter:image" content="" />
<meta name="twitter:url" content="" />
<meta name="twitter:card" content="" />

<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

<!-- Animate.css -->
<link rel="stylesheet" href="{{asset('assets/custom2/css/animate.css')}}">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="{{asset('assets/custom2/css/icomoon.css')}}">
<!-- Bootstrap  -->
<link rel="stylesheet" href="{{asset('assets/custom2/css/bootstrap.css')}}">

<!-- Magnific Popup -->
<link rel="stylesheet" href="{{asset('assets/custom2/css/magnific-popup.css')}}">

<!-- Flexslider  -->
<link rel="stylesheet" href="{{asset('assets/custom2/css/flexslider.css')}}">

<!-- Owl Carousel -->
<link rel="stylesheet" href="{{asset('assets/custom2/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/custom2/css/owl.theme.default.min.css')}}">

<!-- Date Picker -->
<link rel="stylesheet" href="{{asset('assets/custom2/css/bootstrap-datepicker.css')}}">
<!-- Flaticons  -->
<link rel="stylesheet" href="{{asset('assets/custom2/fonts/flaticon/font/flaticon.css')}}">

<!-- Theme style  -->
<link rel="stylesheet" href="{{asset('assets/custom2/css/style.css')}}">

<!-- Modernizr JS -->
<script src="{{asset('assets/custom2/js/modernizr-2.6.2.min.js')}}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

<!-- FOR IE9 below -->
<!-- [if lt IE 9]>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>
<div class="colorlib-loader"></div>

<div id="page">
<nav class="colorlib-nav" role="navigation">
<div class="top-menu">
<div class="container">
	<div class="row">
		<div class="col-xs-5">
			<div id="colorlib-logo"><a href="{{ route('welcome')}}">
<img src="{{ asset('assets/photos/download.jpg')}}" width="45" height="60" alt="logo">
Nepal Handicraft Online Market</a></div>
		</div>
		<div class="col-xs-15 text-right menu-1">
			<ul>
				<li class="active"><a href="{{route('welcome')}}">Home</a></li>
				<li>
					<a href="{{route('category')}}">Product</a>									
				</li>
				<li><a href="{{route('companyinfo')}}"">Company Info</a></li>
				<li ><a href="{{route('help')}}"">Help</a></li>
	@if (Auth::guest())
				<li><a href="{{route('Logincustom')}}">Login</a></li>
				<li><a href="{{route('register')}}">Register</a></li>	
@else
<li>
<a class="nav-link" href="{{ route('userdashboard',Auth::user()->id)}}">Dashboard</a>
</li>
<li>
<a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">

<span>Log Out</span></a>
</li>
@endif							
			</ul>
		</div>
	</div>
</div>
</div>
</nav>
<div class="row" style="margin-left:35%;">
		<div class="col-md-7">
		<h2>Billing Details</h2>
			<form method="POST" class="colorlib-form" action="{{route('buy.store',Auth::user()->id)}}" enctype="multipart/form-data">
				@csrf
				
			<div class="row">
				
					<div class="col-md-12">
						<div class="form-group">
						<label>Product Name</label>
						<input type="text" name="id" class="form-control" disabled value="{{$product->Productname}}">
					</div>
				</div>
				<div class="col-md-12">
						<div class="form-group">
						<label for="pnname">User Email</label>
						<input type="text" name="id" class="form-control" disabled value="{{Auth::user()->email}}">
					</div>
					
				</div>
				<div class="col-md-12">
						<div class="form-group">
						<label for="price">Price</label>
						<input class="form-control" required="required" type="number" name="price" id="PPRICE" value="{{$product->Price}}" readonly/>
					</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
						<label for="pnname">Available Quantity</label>
						<input type="text" name="id" class="form-control" disabled value="{{$product->Quantity}}" readonly>
					</div>
					
				</div>
					<div class="col-md-12">
						<div class="form-group">
						<label for="price">Quantity</label>
						<input class="form-control" required="required" type="number" min="1" max="{{$product->Quantity}}" name="quantity" id="QTY" onKeyUp="multiply()" onMouseUp="multiply()" onKeyDown="return false"/>
					</div>
				</div>
				<div class="col-md-12">
						<div class="form-group">
						<label for="price">Total</label>
						<input class="form-control" required="required" type="number" name="TOTAL" id="TOTAL" readonly/>
					</div>
					</div>     
				<div class="col-md-12">
						<div class="form-group">
						<label for="price">Delivery Location</label>
						<input class="form-control" required="required" name="location" type="text">
					</div>	                 
				</div>
				<div class="col-md-12">
						<div class="form-group">
						<label for="price">Contact Information</label>
						<input class="form-control" required="required" name="contact" type="text">
					</div>	                 
				</div>
				<div class="col-md-12">
						<div class="form-group">
							<label for="companyname">Payment way</label>
							<div class="form-field">
						<i class="icon icon-arrow-down3"></i>
						<select name="payment" id="people" class="form-control" required="required">
							<option value="" >Select Payment way</option>
							<option value="Esewa">Esewa</option>
							<option value="Paypal">Paypal</option>
						</select>
						</div>
					</div>
				</div>                          
			</div>
										
			<div class="row">
				<div class="col-md-12">
					<p><button type="submit" name="upload" value="{{$product->id}}" class="btn btn-primary">Buy</button></p>
				</div>
			</div>
			</form>						
			
		</div>
	</div>
</div>
</div>


<hr style="height:1px; border:none; color:#000; background-color:#000; width:60%; text-align:center; margin: 0 auto;">		
<footer id="colorlib-footer" role="contentinfo">
<div class="container">
	<div class="row row-pb-md">
		<div class="col-md-6 colorlib-widget">
			<h4>About Nepal Handicraft Online Market</h4>
			<p>This enable a stable market for the buying and selling of handicraft goods present in Nepal. This boost the statble market for handicraft products.</p>
			<p>
				<ul class="colorlib-social-icons">
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-linkedin"></i></a></li>
					<li><a href="#"><i class="icon-dribbble"></i></a></li>
				</ul>
			</p>
		</div>
		<div class="col-md-3 colorlib-widget">
			<h4>Quick Link</h4>
			<p>
				<ul class="colorlib-footer-links">
					<li><a href="{{route('welcome')}}">Home</a></li>
					<li><a href="{{route('category')}}">Product</a></li>
					<li><a href="{{route('companyinfo')}}">Company Info</a></li>
					<li ><a href="{{route('help')}}"">Help</a></li>
	@if (Auth::guest())
					<li><a href="{{route('Logincustom')}}">Login</a></li>
					<li><a href="{{route('register')}}">Register</a></li>	
	@else
<li>
<a class="nav-link" href="{{ route('userdashboard',Auth::user()->id)}}">Dashboard</a>
</li>
<li>
<a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">

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
<div class="modal-body">Are You Sure? If so select the logout button.</div>
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

@endif											
</ul>
</p>
</div>
	<div class="col-md-3">
			<h4>Contact Information</h4>
			<ul class="colorlib-footer-links">
				<li><i class="fa fa-user"></i>Lizan Bajracharya</li>
				<li><i class="fa fa-phone"></i>+977 9860170437</a></li>
				<li><i class="fa fa-home"></i>lizan.bajra97@gmail.com</li>
				</ul>
		</div>
	</div>
</div>
<div class="copy">
	<div class="row">
		<div class="col-md-12 text-center">
			<p>
				
				<span class="block">
	Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
</span> 
			</p>
		</div>
	</div>
</div>
</footer>
</div>	
<!-- jQuery -->
<script src="{{asset('assets/custom2/js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{asset('assets/custom2/js/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('assets/custom2/js/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('assets/custom2/js/jquery.waypoints.min.js')}}"></script>
<!-- Flexslider -->
<script src="{{asset('assets/custom2/js/jquery.flexslider-min.js')}}"></script>
<!-- Owl carousel -->
<script src="{{asset('assets/custom2/js/owl.carousel.min.js')}}"></script>
<!-- Magnific Popup -->
<script src="{{asset('assets/custom2/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/custom2/js/magnific-popup-options.js')}}"></script>
<!-- Date Picker -->
<script src="{{asset('assets/custom2/js/bootstrap-datepicker.js')}}"></script>
<!-- Stellar Parallax -->
<script src="{{asset('assets/custom2/js/jquery.stellar.min.js')}}"></script>
<!-- Main -->
<script src="{{asset('assets/custom2/js/main.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d0fc5f936eab9721118d3a8/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<script>
function multiply()
{
a = document.getElementById('QTY').value;
b = document.getElementById('PPRICE').value;
c = a * b;

document.getElementById('TOTAL').value = c;
}
</script>
</body>
</html>

