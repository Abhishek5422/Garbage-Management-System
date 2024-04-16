@include('User/User_layout/user_header');



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		.std{
			border-radius: 5px;
			width: 300px;
			padding-left: 10px;
			

		}

	</style>
</head> 
<body><br><br>
	<center>
		<div style="height: 700px;width: 700px; border-style: double;margin-top: 120px; padding-top: 40px;border-radius: 30px">
		<h1>Employee Booking Details</h1><br>
		<br>
		<form method="post" action="{{url('employee_booking_insert')}}">
			{{csrf_field()}}
			<input type="hidden" name="Employee_id" class="std" value="{{$employee_fetch->Employee_id}}">
			<input type="hidden" name="Employee_mail" class="std" value="{{$employee_fetch->Employee_mail}}">
			<label style="padding-left: -30px">Employee Name</label><br>
			<input type="text" name="Employee_name" class="std" value="{{$employee_fetch->Employee_name}}" readonly><br>
			<br>
			<label style="padding-left: -30px">Working Time</label><br>
			<input type="text" name="Working_time" class="std" value="{{$employee_fetch->Working_time}}" readonly><br>
			<br>
			<label style="padding-left: -30px">Employee Payment</label><br>
			<input type="text" name="Employee_payment" class="std" value="₹{{$employee_fetch->Employee_payment}}" readonly><br>
			<br>
			<label style="padding-left: -30px">Customer Name</label><br>
			<input type="text" name="Customer_name" class="std" value="{{$customer_fetch->customer_name}}" readonly><br>
			<br>
			<label style="padding-left: -30px">Customer Email</label><br>
			<input type="text" name="Customer_mail" class="std" value="{{$customer_fetch->customer_email}}" readonly><br>
			<br>
			<label style="padding-left: -30px">Working Date</label><br>
			<input type="Date" name="Working_date" class="std" value="" required=""><br>
			<br>
			<input type="hidden" name="Customer_id" class="std" value="{{$customer_fetch->customer_id}}">
			<input type="submit" name="submit"><br>
			<br>
		</form>
		</div>
	</center>
<br>
</body>
</html>





























@include('User/User_layout/user_footer');