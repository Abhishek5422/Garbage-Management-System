@include('User/User_layout/user_header');



<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->
<!-- <style type="text/css">
  body { margin-top:100px; }
.panel-title {display: inline;font-weight: bold;}
.checkbox.pull-right { margin: 0; }
.pl-ziro { padding-left: 0px; }
</style> -->
<!-- <div class="container" style="padding-left: 380px;">
    <div class="row">
        <div class="col-xs-12 col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Payment Details
                    </h3>
                    
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="{{url('/payment_insert')}}">
                     <div class="form-group">
                            <input type="hidden" name="booking_id" value="{{$Booking_details_fetch->Booking_id}}" class="form-control"/>
                    </div> -->
                 <!--    <div class="form-group"> -->
                    <!--         <input type="hidden" name="Customer_id" value="{{$Booking_details_fetch->Customer_id}}" class="form-control"/>
                    </div>
                    <div class="form-group">
                            <input type="hidden" name="employee_id" value="{{$Booking_details_fetch->Employee_id}}" class="form-control"/>
                    </div>
                    <div class="form-group">
                            <input type="hidden" name="Customer_mail" value="{{$Booking_details_fetch->Customer_email}}" class="form-control"/>
                    </div>
                    <div class="form-group">
                            <input type="hidden" name="Employee_name" value="{{$Booking_details_fetch->Employee_Name}}" class="form-control"/>
                    </div>
                    <div class="form-group"> -->
                      <!--   <label for="cardNumber">
                            CARD NUMBER</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="cardNumber" placeholder="Valid Card Number"/>
                        </div>
                    </div>
                    <div class="row">
                       
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cvCode">
                                    Expiry date</label>
                                <input type="text" class="form-control" name="expiry_date"  placeholder="expiry date"/>
                            </div>
                        </div>
                    </div> -->
                   <!--  <div class="row">
                       
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cvCode">
                                    CV CODE</label>
                                <input type="password" class="form-control" name="cvCode"  placeholder="CV"/>
                            </div>
                        </div>
                    </div> -->
                  <!--    <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href=""><span class="badge pull-right"><span class="glyphicon glyphicon-usd"></span>{{$Booking_details_fetch->Employee_payment}}</span> Final Payment</a>
                  <center><button style="background-color: green;color: white;width: 120px;">Pay Now</button></center>

                </li>
            </ul>
                    </form>
                </div>
            </div>
           
            <br/>
            
        </div>
    </div>
</div>
 -->
<style type="text/css">
    body { margin-top:20px; }
.panel-title {display: inline;font-weight: bold;}
.checkbox.pull-right { margin: 0; }
.pl-ziro { padding-left: 0px; }
</style>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container" style="margin-top: 100px;margin-left: 500px">
    <div class="row">
        <div class="col-xs-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Payment Details
                    </h3>
                    
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="{{url('payment_insert')}}">


                       {{csrf_field()}}
                            <input type="hidden" name="booking_id" value="{{$Booking_details_fetch->Booking_id}}" class="form-control"/>
                    
                            <input type="hidden" name="Customer_id" value="{{$Booking_details_fetch->Customer_id}}" class="form-control"/>
                  
                            <input type="hidden" name="employee_id" value="{{$Booking_details_fetch->Employee_id}}" class="form-control"/>
                    
                            <input type="hidden" name="Customer_mail" value="{{$Booking_details_fetch->Customer_email}}" class="form-control"/>
                    
                            <input type="hidden" name="Employee_name" value="{{$Booking_details_fetch->Employee_Name}}" class="form-control"/>
                    
                     <input type="hidden" name="booking_amount" value="{{$Booking_details_fetch->Employee_payment}}" class="form-control"/>
                    <div class="form-group">
                        <label for="cardNumber">
                            CARD NUMBER</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cardNumber" placeholder="Valid Card Number"
                                required autofocus / name="cardNumber">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div class="form-group">
                                <label for="expityMonth">
                                    EXPIRY DATE</label>
                                <div class="col-xs-6 col-lg-8 pl-ziro">
                                   <input type="text" class="form-control" id="cvCode" placeholder="MM/YY" required / name="expiry_date" >
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cvCode">
                                    CV CODE</label>
                                <input type="text" class="form-control" id="cvCode" placeholder="CV" required / name="cvCode">
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><span class="badge pull-right">{{$Booking_details_fetch->Employee_payment}}</span> Final Payment</a>
                </li>
            </ul>
            <br/>
            <input type="Submit" name="" value="Pay" class="btn btn-success btn-lg btn-block">
           
        </div>
    </div>
</div>
</form>

























@include('User/User_layout/user_footer');