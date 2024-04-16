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
<center><h2>Manage Employee</h2></center><br><br>
<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>SL NO</th>
      <th>Category Name</th>
      <th>Employee Name</th>
      <th>Employee Email</th>
      <th>Employee Phone</th>
      <th>Working Time</th>
      <th>Employee Payment</th>
      <th>Employee Image</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
    @php
   $i=1;
   @endphp
    @foreach ($employee_fetch as $fetch)
    <tr>
      <td>{{$i}}</td>
      <td>{{$fetch->Category_Name}}</td>
      <td>{{$fetch->Employee_name}}</td>
      <td>{{$fetch->Employee_mail}}</td>
      <td>{{$fetch->Employee_phone}}</td>
      <td>{{$fetch->Working_time}}</td>
      <td>{{$fetch->Employee_payment}}</td>
      <td><img src="{{'Admin/Employee/'.$fetch->Employee_image}}" style="height: 100px;width: 100px;"></td>
       <td><a href="{{url('Employee_edit/'.$fetch->Employee_id)}}"><img src="{{'images/edit.png'}}" style="height: 50px;width: 50px;"></a></td>
      <td><a href="{{url('Employee_delete/'.$fetch->Employee_id)}}"><img src="{{'images/delete.png'}}" style="height: 50px;width: 50px;"></a></td>
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