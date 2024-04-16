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
<h2>Manage Category</h2><br>
</center>
<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>SL NO</th>
      <th>Category Name</th>
      <th>Category Image</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
    @php
    $i=1;
    @endphp
    @foreach ($Category as $fetch)
    <tr>
      <td>{{$i}}</td>
      <td>{{$fetch->Category_Name}}</td>
      <td><img src="{{'Admin/Category/'.$fetch->Category_Image}}" style="height: 80px;width: 100px;"></td>
      <td><a href="{{'Category_edit/'.$fetch->Category_id}}"><img src="{{'images/edit.png'}}" style="height: 50px;width: 50px;"></a></td>
      <td><a href="{{'Category_delete/'.$fetch->Category_id}}"><img src="{{'images/delete.png'}}" style="height: 50px;width: 50px;"></td>
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