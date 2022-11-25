<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('user/assets/images/favicon-32x32.png')}}" type="image/png" />
	<!--plugins-->
	<link href="{{asset('user/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
	<link href="{{asset('user/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{asset('user/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{asset('user/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('user/assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('user/assets/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('user/assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('user/assets/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('user/assets/css/icons.css')}}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{asset('user/assets/css/dark-theme.css')}}" />
	<link rel="stylesheet" href="{{asset('user/assets/css/semi-dark.css')}}" />
	<link rel="stylesheet" href="{{asset('user/assets/css/header-colors.css')}}" />
	<title>RIM - @yield('pagetitle')</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		@include('user.body.sidebar')
		<!--end sidebar wrapper -->
		<!--start header -->
			@include('user.body.header')
		<!--end header -->
		<!--start page wrapper -->
		@yield('content')
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
			@include('user.body.footer')
	</div>
	<!--end wrapper-->
	<!--start switcher-->
			@include('user.body.theme')
	<!--end switcher-->
	
	<!-- Bootstrap JS -->
	<script src="{{asset('user/assets/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{asset('user/assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('user/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{asset('user/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{asset('user/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<script src="{{asset('user/assets/plugins/chartjs/js/Chart.min.js')}}"></script>
	<script src="{{asset('user/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('user/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
	<script src="{{asset('user/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
	<script src="{{asset('user/assets/plugins/sparkline-charts/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset('user/assets/plugins/jquery-knob/excanvas.js')}}"></script>
	<script src="{{asset('user/assets/plugins/jquery-knob/jquery.knob.js')}}"></script>
	  <script>
		  $(function() {
			  $(".knob").knob();
		  });
	  </script>
	  <script src="{{asset('user/assets/js/index.js')}}"></script>
	<!--app JS-->
	<script src="{{asset('user/assets/js/app.js')}}"></script>
</body>

</html>