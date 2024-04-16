<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\customer;
use App\Models\category;
use App\Models\employee;
use App\Models\Booking;
use App\Models\Payment;
class User_controller extends Controller
{
   public function index()
   {
        return view('User/index');
   }
   public function about()
   {
        return view('User/about');
   }
   public function contact()
   {
        return view('User/contact');
   }
   public function registration()
   {
        return view('User/user_registration');
   }
   public function register_insert(Request $req)
   {
        $customer=new customer;
        $customer->customer_name=$req->input('Name');
        $customer->customer_email=$req->input('email');
        $customer->customer_password=$req->input('password');
        $customer->customer_phone=$req->input('Phone');
        $customer->customer_address=$req->input('Address');
        $customer->save();
        return redirect('/customer_login');
   }
        public function customer_login()
        {
            return view('User/user_login');
        }
    public function signin_check(Request $req)
    {
        $req->session()->put('mail',$req->input('email'));
        $count=customer::where([['customer_email',$req->input('email')],['customer_password',$req->input('password')]])->count();
        if($count>0)
        {
            return redirect('/customer_home');
        }
        else
        {
            return redirect('/customer_login');
        }
    }
    public function customer_home()
    {
        $category_fetch=category::all();
        if(session()->has('mail'))
        {
            return view('User/customer_home',compact('category_fetch'));
        }  
        else
        {
            return redirect('/index');
        }
        
    }
    public function customer_profile()
    {
        $customer_profile=customer::where([['customer_email',session('mail')]])->first();
        if(session()->has('mail'))
        {
            return view('User/Customer_profile',compact('customer_profile'));
        }
        else
        {
            return redirect('/index');
        }
        
    }
    public function customer_profile_update(Request $req)
    {
        $profile_update=customer::where([['customer_email',session('mail')]])->first();
        $profile_update->customer_name=$req->input('Name');
        $profile_update->customer_email=$req->input('email');
        $profile_update->customer_password=$req->input('password');
        $profile_update->customer_phone=$req->input('Phone');
        $profile_update->customer_address=$req->input('Address');
        $profile_update->update();
        return redirect('/customer_profile');

    }
    public function User_Logout(Request $req)
    {
        $req->session()->forget('mail');
        return redirect('/index');
    }
    public function employee_details($Category_id)
    {
        if(session()->has('mail'))
        {
            $employee_fetch=employee::where([['Category_id',$Category_id]])->get();
            return view('User/employee_details',compact('employee_fetch'));
        }
        else
        {
            return redirect('/index');
        }
    }
    public function employee_booking($Employee_id)
    {
        if(session()->has('mail'))
        {
            $customer_fetch=customer::where([['customer_email',session('mail')]])->first();
            $employee_fetch=employee::where([['Employee_id',$Employee_id]])->first();
            return view('User/employee_booking',compact('employee_fetch','customer_fetch'));
        }
        else
        {
            return redirect('/index');
        }
    }
    public function employee_booking_insert(Request $req)
    {
        $employee_booking_insert=new Booking;
        $employee_booking_insert->Employee_id=$req->input('Employee_id');
        $employee_booking_insert->Employee_Mail=$req->input('Employee_mail');
        $employee_booking_insert->Employee_Name=$req->input('Employee_name');
        $employee_booking_insert->Working_time=$req->input('Working_time');
        $employee_booking_insert->Employee_payment=$req->input('Employee_payment');
        $employee_booking_insert->Customer_name=$req->input('Customer_name');
        $employee_booking_insert->Customer_email=$req->input('Customer_mail');
        $employee_booking_insert->Working_date=$req->input('Working_date');
        $employee_booking_insert->Customer_id=$req->input('Customer_id');
        $employee_booking_insert->Booking_status="Pending";
        $employee_booking_insert->Payment_status="Pending";
        $employee_booking_insert->save();
        return redirect('/My_bookings');
    }
    public function My_bookings()
    {
        if(session()->has('mail'))
        {
            $Booking_fetch=Booking::all();
            return view('User/My_bookings',compact('Booking_fetch'));
        }
        else
        {
            return redirect('/index');
        }
    }
    public function Cancel($Booking_id)
    {
        $cancel=Booking::where([['Booking_id',$Booking_id]])->first();
        $cancel->delete();
        return redirect('/My_bookings');

    }
     
    public function payment($Booking_id)
    {
        $Booking_details_fetch=Booking::where([['Booking_id',$Booking_id]])->first();
        return view('User/payment',compact('Booking_details_fetch'));
    }
    public function payment_insert(Request $req)
    {
        $payment_insert=new Payment;
        $payment_insert->Booking_id=$req->input('booking_id');
        $payment_insert->Customer_id=$req->input('Customer_id');
        $payment_insert->Employee_id=$req->input('employee_id');
        $payment_insert->Customer_email=$req->input('Customer_mail');
        $payment_insert->Employee_Name=$req->input('Employee_name');
        $payment_insert->CardNumber=$req->input('cardNumber');
        $payment_insert->Expiry_date=$req->input('expiry_date');
        $payment_insert->CVC_Code=$req->input('cvCode');
        $payment_insert->Booking_Amount=$req->input('booking_amount');
        $payment_insert->save();
        $book=Booking::where([['Booking_id',$req->input('booking_id')]])->first();
        $book->Payment_status="Payed";
        $book->update();
        return redirect('/My_bookings');
    }
  
    

}

