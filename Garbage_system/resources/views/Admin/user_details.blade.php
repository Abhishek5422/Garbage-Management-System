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
<center><h2>Customer Details</h2>
</center><br><br>
<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Sl No</th>
      <th>Customer Name</th>
      <th>Customer Mail</th>
      <th>Customer Password</th>
      <th>Customer Phone</th>
      <th>Customer Address</th>
    </tr>
    @php
   $i=1;
   @endphp
    @foreach($customer_fetch as $fetch)
    <tr>
      <td>{{$i}}</td>
      <td>{{$fetch->customer_name}}</td>
      <td>{{$fetch->customer_email}}</td>
      <td>{{$fetch->customer_password}}</td>
      <td>{{$fetch->customer_phone}}</td>
      <td>{{$fetch->customer_address}}</td>
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