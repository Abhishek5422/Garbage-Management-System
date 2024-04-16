


<!DOCTYPE html>
<head>
<title>Colored  an Admin Panel Category Flat Bootstrap Responsive Website Template | Signup :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{url('Admin/css/bootstrap.css')}}">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{url('Admin/css/style.css')}}" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='{{url('Admin///fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic')}}' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{url('Admin/css/font.css')}}" type="text/css"/>
<link href="{{url('Admin/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons -->
</head>
<body >
      <div class="agile-signup"> 
      
         <div class="content2">
            <div class="grids-heading gallery-heading signup-heading">
               <h2>LOGIN FORM</h2>
            </div>
            <form action="{{url('Admin_signin_check')}}" method="post">
                  {{csrf_field()}}
                  <div class="form-group">
                     <input type="email" name="email"  placeholder="Admin Email">
                  </div>
                  <div class="form-group">
                     <input type="password"  name="Password"  placeholder="Admin password">
                  </div>
                  <div class="text-center ">
                     <button type="submit">Submit</button>
                  </div> 

               </form>
 <a href="{{url('index')}}"><img src="{{url('Admin/images/home.jpg')}}" style="height: 65px;width: 65px;"></a>
            </div>
<center>
           
            
         </div>
         
         <!-- footer -->
         
         <!-- //footer -->
         
      </div>
   <script src="{{url('Admin/js/proton.js')}}"></script>
</body>
</html>