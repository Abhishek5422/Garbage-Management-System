
      
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
.send-button{
background: #54C7C3;
width:100%;
font-weight: 600;
color:#fff;
padding: 8px 25px;
}
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
.g-button{
color: #fff !important;
border: 1px solid #EA4335;
background: #ea4335 !important;
width:100%;
font-weight: 600;
color:#fff;
padding: 8px 25px;
}
.my-input{
box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
cursor: text;
padding: 8px 10px;
transition: border .1s linear;
}
.header-title{
margin: 5rem 0;
}
h1{
font-size: 31px;
line-height: 40px;
font-weight: 600;
color:#4c5357;
}
h2{
color: #5e8396;
font-size: 21px;
line-height: 32px;
font-weight: 400;
}
.login-or {
position: relative;
color: #aaa;
margin-top: 10px;
margin-bottom: 10px;
padding-top: 10px;
padding-bottom: 10px;
}
.span-or {
display: block;
position: absolute;
left: 50%;
top: -2px;
margin-left: -25px;
background-color: #fff;
width: 50px;
text-align: center;
}
.hr-or {
height: 1px;
margin-top: 0px !important;
margin-bottom: 0px !important;
}
@media screen and (max-width:480px){
h1{
font-size: 26px;
}
h2{
font-size: 20px;
}
}
</style>

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<body>

   <div class="container">
      <div class="col-md-6 mx-auto text-center">
         <div class="header-title">
            <h1 class="wv-heading--title">
               REGISTRATION FORM
            </h1>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 mx-auto">
            <div class="myform form ">
            	<center>
              <form method="post" action="{{url('Admin_register_insert')}}">
					{{csrf_field()}}
					<input type="text" name="Admin_name" class="form-control my-input" placeholder="Admin Name"><br>
					<input type="email" name="Admin_email" class="form-control my-input" placeholder="Admin email"><br>
					<input type="password" name="Admin_password" class="form-control my-input" placeholder="Admin password"><br>
					<div class="text-center ">
                     <button type="submit" class=" btn btn-block send-button tx-tfm">Submit</button>
                  </div> 
				</form>
				</center>
				<center>
            <h6>Already Registred ...!<br><a href="{{url('Admin_login')}}">Login Here</a></h6>
            <a href="{{url('index')}}"><img src="{{url('Admin/images/home.jpg')}}" style="height: 75px;width: 75px;"></a>
            </center>
         </div>
      </div>
   </div>
</body>





