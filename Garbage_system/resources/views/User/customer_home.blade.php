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
<h2>OUR CATEGORY</h2>
</center><br><br>
<div class="row">
	@foreach ($category_fetch as $fetch)

  <div class="column">
    <div class="card">
    	
      <h3></h3>
      <p><a href="{{url('employee_details/'.$fetch->Category_id)}}"><img src="{{'Admin/Category/'.$fetch->Category_Image}}" style="height: 230px;width: 230px;"></a></p>
      <p>{{$fetch->Category_Name}}</p>
      
     
    </div>
  </div>
  @endforeach

</div>
 

</body>
</html>

















@include('User/User_layout/user_footer');