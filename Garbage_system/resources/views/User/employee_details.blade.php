@include('User/User_layout/user_header');



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */ 
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
</head>
<body>
<center>
<h2 style="padding-top: 100px">Employee Details</h2>
</center><br><br>
<div class="row">	
@foreach ($employee_fetch as $employee)
  <div class="column">
    <div class="card">
      <p><img src="{{url('Admin/Employee/'.$employee->Employee_image)}}" style="height: 200px;width: 250px;"></a></p><br>
      <h6 style="text-align: left;padding-left: 19px"><b>Name : </b>{{$employee->Employee_name}}<h6><br>
       <h6 style="text-align: left;padding-left: 19px"><b>Time : </b>{{$employee->Working_time}}</h6><br>
       <h6 style="text-align: left;padding-left: 19px"><b>Fee : </b>₹{{$employee ->Employee_payment}}</h6><br>
       <a href="{{url('employee_booking/'.$employee->Employee_id)}}"><button style="background-color: green;color: white;width: 120px;">Book Now</button>
      
     
    </div>
  </div>
@endforeach
</div>
 

</body>
</html>






























@include('User/User_layout/user_footer');