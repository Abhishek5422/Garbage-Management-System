@include('Admin/Admin_layout/admin_header');
















<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Colored  an Admin Panel Category Flat Bootstrap Responsive Website Template | Signup :: w3layouts</title>
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
</head>
<body class="signup-body">
		<div class="agile-signup">	
		
			<div class="content2">
				<div class="grids-heading gallery-heading signup-heading">
					<h2>ADMIN PROFILE</h2>
				</div>
				<form method="post" action="{{url('Admin_profile_update')}}">
					{{csrf_field()}}
					<input type="text" name="Admin_name" placeholder="Admin Name" value="{{$Admin_profile->Admin_name}}">
					<input type="email" name="Admin_email" placeholder="Admin email" value="{{$Admin_profile->Admin_email}}" readonly>
					<input type="text" name="Admin_password" placeholder="Admin password" value="{{$Admin_profile->Admin_password}}"><br><br>
					<input type="submit" class="" value="Update">
				</form>
				
			</div>
			
			<!-- footer -->
			
			<!-- //footer -->
			
		</div>
	<script src="{{url('Admin/js/proton.js')}}"></script>
</body>
</html>















@include('Admin/Admin_layout/admin_footer');