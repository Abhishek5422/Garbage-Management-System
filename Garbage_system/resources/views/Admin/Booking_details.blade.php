@include('Admin/Admin_layout/admin_header');


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>
<center>
	<h2>Verify Booking</h2>
</center>
<br>
<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>SL NO</th>
      <th>Employee name</th>
      <th>Employee_mail</th>
      <th>Customer Name</th>
      <th>Customer Mail</th>
      <th>Working Time</th>
      <th>Working Date</th>
      <th>Employee Fee</th>
      <th>Booking Status</th>
       <th>Approve</th>
       <th>Reject</th>
    </tr>
     @php
   $i=1;
   @endphp
    @foreach ($Booking_details as $fetch)
    <tr>
      <td>{{$i}}</td>
      <td>{{$fetch->Employee_Name}}</td>
      <td>{{$fetch->Employee_Mail}}</td>
      <td>{{$fetch->Customer_name}}</td>
      <td>{{$fetch->Customer_email}}</td>
      <td>{{$fetch->Working_time}}</td>
      <td>{{$fetch->Working_date}}</td>
      <td>{{$fetch->Employee_payment}}</td>
      <td>{{$fetch->Booking_status}}</td>
      <td><a href="{{url('/Approve/'.$fetch->Booking_id)}}"><img src="{{url('images/Approve.png')}}" style="height: 55px;width: 55px;"></a></td>
      <td><a href="{{url('/Reject/'.$fetch->Booking_id)}}"><img src="{{url('images/reject.png')}}" style="height: 55px;width: 55px;"></a></td>
    </tr>
    @php
   $i++;
   @endphp
    @endforeach
   
  </table>
</div>

</body>
</html>





























@include('Admin/Admin_layout/admin_footer');