<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Garbage Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{url('Admin/css/bootstrap.css')}}">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{url('Admin/css/style.css')}}" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='{{url('Admin///fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic')}}' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{url('Admin/css/font.css')}}" type="text/css"/>
<link href="{{url('Admin/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="{{url('Admin/js/jquery2.0.3.min.js')}}"></script>
<script src="{{url('Admin/js/modernizr.js')}}"></script>
<script src="{{url('Admin/js/jquery.cookie.js')}}"></script>
<script src="{{url('Admin/js/screenfull.js')}}"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<!-- charts -->
<script src="{{url('Admin/js/raphael-min.js')}}"></script>
<script src="{{url('Admin/js/morris.js')}}"></script>
<link rel="stylesheet" href="{{url('Admin/css/morris.css')}}">
<!-- //charts -->
<!--skycons-icons-->
<script src="{{url('Admin/js/skycons.js')}}"></script>
<!--//skycons-icons-->
</head>
<body class="dashboard-page">
	<script>
	        var theme = $.cookie('protonTheme') || 'default';
	        $('body').removeClass (function (index, css) {
	            return (css.match (/\btheme-\S+/g) || []).join(' ');
	        });
	        if (theme !== 'default') $('body').addClass(theme);
        </script>
	<nav class="main-menu">
		<ul>
			<li class="has-subnav">
				<a href="javascript:;">
				<i class="fa fa-cogs" aria-hidden="true"></i>
				<span class="nav-text">
					Category
				</span>
				<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
					<a class="subnav-text" href="{{url('add_category')}}">
					Add Category
					</a>
					</li>
					<li>
					<a class="subnav-text" href="{{url('Manage_category')}}">
					Manage Category
					</a>
					</li>
				</ul>
			</li>

			<li class="has-subnav">
				<a href="javascript:;">
				<i class="fa fa-cogs" aria-hidden="true"></i>
				<span class="nav-text">
					Employee
				</span>
				<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
					<a class="subnav-text" href="{{url('add_employee')}}">
					Add Employee
					</a>
					</li>
					<li>
					<a class="subnav-text" href="{{url('Manage_employee')}}">
					Manage Employee
					</a>
					</li>
				</ul>
			</li>
			
			<li>
				<a href="{{url('Booking_details')}}">
					<i class="fa fa-file-text-o nav_icon"></i>
					<span class="nav-text">
						Verify Booking
					</span>
				</a>
			</li>
			<li>
				<a href="{{url('user_details')}}">
					<i class="fa fa-map-marker"></i>
					<span class="nav-text">
						User Details
					</span>
				</a>
			</li>
			<li>
				<a href="{{url('admin_profile')}}">
					<i class="fa fa-list-ul"></i>
					<span class="nav-text">
						My Profile
					</span>
				</a>
			</li>
	
			</li>
		</ul>
		<ul class="logout">
			<li>
			<a href="{{url('admin_Logout')}}">
			<i class="icon-off nav-icon"></i>
			<span class="nav-text">
			Logout
			</span>
			</a>
			</li>
		</ul>
	</nav>
	<section class="wrapper scrollable">
		
		<section class="title-bar">
			
			
			<div class="w3l_search">
				
			</div>

		