@include('Admin/Admin_layout/admin_header');



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		.std{
			border-radius: 10px;
			padding-left: 25px;
		}
		
	</style>
</head>
<body>

	<center>
		<div style="border-style: double;height: 920px;width: 500px;padding-top: 20px;padding-bottom: 20px; background-color: grey;"><br>
		<h2>Employee Edit</h2>
		<br><br>
		<form method="post" action="" enctype="multipart/form-data">
			{{csrf_field()}}	
			<label>Category Name</label><br>
			<input type="text" name="Category_Name" class="std" value=""><br>
			<br>
			<label>Employee Name</label><br>
			<input type="text" name="Employee_Name" class="std" value="{{$employee_fetch->Employee_name}}"><br>
			<br>
			<label>Employee Email</label><br>
			<input type="text" name="Doctor_email" class="std" value="{{$employee_fetch->Employee_mail}}"><br>
			<br>
			<label>Employee Phone</label><br>
			<input type="text" name="Doctor_Phone" class="std" value="{{$employee_fetch->Employee_phone}}"><br>
			<br>
			<label>Working Time</label><br>
			<input type="text" name="Consulting_time" class="std" value="{{$employee_fetch->Working_time}}"><br>
			<br>
			<label>Employee Fee</label><br>
			<input type="text" name="Doctor_fee" class="std" value="{{$employee_fetch->Employee_payment}}"><br>
			<br>
			<label>Employee Image</label><br>
			<img src="{{url('Admin/Employee/'.$employee_fetch->Employee_image)}}" style="height: 100px;width: 100px;">
			<br>
			<label>New Employee Image</label><br>
			<br>
			<input type="file" name="New_Employee_image" class="std"><br>
			<input type="submit" name="submit">
			
		</form>
		
		</div>
	</center>

</body>
</html>



@include('Admin/Admin_layout/admin_footer');