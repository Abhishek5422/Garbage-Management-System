@include('Admin/Admin_layout/admin_header');
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body style="color: black;">
		<center>
			<div style="height: 360px;width: 450px;border-style: double; margin-top: 120px;background-color: green;border-radius: 50px;">
			<h1 style="padding-top: 25px;">Edit Category</h1>
			<form method="post" action="{{url('category_update')}}" enctype="multipart/form-data">
				<label>Category Name</label><br><br>
				<input type="text" name="Category_Name" style="border-radius: 30px;padding-left: 60px;" value="{{$category_fetch->Category_Name}}"><br>
				<br>
				<label>Category Image</label><br>
				<img src="{{url('Admin/Category/'.$category_fetch->Category_Image)}}" style="height: 100px;width: 100px;">
				<br>
				<label>New Category Image</label><br><br>
				<input type="file" name="New_Category_Image"><br>
				<input type="submit" value="Update">
			</form>
			</div>
		</center>
</body>
</html>

<br><br><br><br><br><br>
@include('Admin/Admin_layout/admin_footer');