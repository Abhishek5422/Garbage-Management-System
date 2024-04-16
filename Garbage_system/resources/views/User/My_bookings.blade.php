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
<h2 style="margin-top: 100px"><b>MY BOOKINGS</b></h2>
</center><br><br>
<div class="row">	
@foreach ($Booking_fetch as $fetch)
  <div class="column">
    <div class="card">
      <h6 style="text-align: left;padding-left: 19px">Employee Name:{{$fetch->Employee_Name}}<h6><br>
      	<h6 style="text-align: left;padding-left: 19px">Customer Name:{{$fetch->Customer_name}}<h6><br>
       <h6 style="text-align: left;padding-left: 19px">Time:{{$fetch->Working_time}}</h6><br>
       <h6 style="text-align: left;padding-left: 19px">Employee Fee:{{$fetch->Employee_payment}}</h6><br>
       <h6 style="text-align: left;padding-left: 19px">booking Status:{{$fetch->Booking_status}}</h6><br>
       @if($fetch->Booking_status=="APPROVED")
        <h6 style="text-align: left;padding-left: 19px">Payment Status:{{$fetch->Payment_status}}</h6><br>
         @endif
         @if($fetch->Payment_status=="Pending")
       <button style="border-radius:6px;background-color: red;border-style: none"><a href="{{url('/Cancel/'.$fetch->Booking_id)}}">Cancel</a></button><br>
         @endif
       @if($fetch->Booking_status=="APPROVED" && $fetch->Payment_status=="Pending")
       <button style="color: white;background-color: green;border-radius: 6px;border-style: none"><a href="{{url('/payment/'.$fetch->Booking_id)}}">Payment</a></button>
       @endif
      
     
    </div>
  </div>
@endforeach
</div>
 

</body>
</html>





























@include('User/User_layout/user_footer');