@include('Admin/Admin_layout/admin_header');



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
					<h2>ADD Employee</h2>
				</div>
				<form method="post" action="{{url('employee_insert')}}" enctype="multipart/form-data">
			{{csrf_field()}}
			<br>
			<label>Choose Category</label>
			<select name="Category_id">
				@foreach ($category as $fetch)
				{
					<option value="{{$fetch->Category_id}}">{{$fetch->Category_Name}}</option>
				}
				@endforeach
			</select>
			<br><br>
				<label>Employee Name</label><br>
				<input type="text" name="Employee_name" style="border-radius: 30px;padding-left: 60px;" value=""><br>
				<br>
				<label>Employee Email</label><br>
				<input type="email" name="Employee_mail" style="border-radius: 30px;padding-left: 60px;" value=""><br>
				<br>
				<label>Employee Phone</label><br>
				<input type="text" name="Employee_phone" style="border-radius: 30px;padding-left: 60px;" value=""><br>
				<br>
				<label>Working Time</label><br>
				<input type="text" name="Working_time" style="border-radius: 30px;padding-left: 60px;" value=""><br>
				<br>
				<label>Employee Payment</label><br>
				<input type="text" name="Employee_payment" style="border-radius: 30px;padding-left: 60px;" value=""><br>
				<br>
				<label>Employee Image</label><br>
				<input type="file" name="Employee_Image"><br>
				<input type="submit" value="Submit">
			</form>
				
			</div>
			
			<!-- footer -->
			
			<!-- //footer -->
			
		</div>
	<script src="{{url('Admin/js/proton.js')}}"></script>
</body>
</html>





@include('Admin/Admin_layout/admin_footer');