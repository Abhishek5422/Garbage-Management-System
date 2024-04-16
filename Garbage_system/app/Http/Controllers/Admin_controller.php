<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use App\Models\category;
use App\Models\employee;
use App\Models\Booking;
use App\Models\customer;
class Admin_controller extends Controller
{
    public function Admin_index()
    {
        return view('Admin/Admin_index');
    }
    public function Admin_register()
    {
        return view('Admin/Admin_register');
    }
    public function Admin_register_insert(Request $req)
    {
        $Admin=new Admin;
        $Admin->Admin_name=$req->input('Admin_name');
        $Admin->Admin_email=$req->input('Admin_email');
        $Admin->Admin_password=$req->input('Admin_password');
        $Admin->save();
        return redirect('/Admin_login');
    }
    public function Admin_login()
    {
        return view('Admin/Admin_login');
    }
    public function Admin_signin_check(Request $req)
    {
        $req->session()->put('email',$req->input('email'));
        $count=Admin::where([['Admin_email',$req->input('email')],['Admin_password',$req->input('Password')]])->count();
        if($count>0)
        {
            return redirect('/admin_profile');
        }
        else
        {
            return redirect('/Admin_login');
        }
    }
    public function Admin_home()
    {
        if(session()->has('email'))
        {
            return view('Admin/Admin_home');
        }
        else
        {
            return redirect('/index');
        }
        
    }
    public function admin_profile()
    {   
        
        if(session()->has('email'))
        {
            $Admin_profile=Admin::where([['Admin_email',session('email')]])->first();
            return view('Admin/my_profile',compact('Admin_profile'));
        }
        else
        {
            return redirect('/index');
        }
        
    
    }
     public function admin_Logout(Request $req)
    {
        $req->session()->forget('email');
        return redirect('/index');
    }
    public function add_category()
    {
        if(session()->has('email'))
        {
             return view('Admin/add_category');
        }
        else
        {
            return redirect('/index');
        }

       
    }
    public function category_insert(Request $req)
    {
        $category_insert=new Category;
        $category_insert->Category_Name=$req->input('Category_Name');
        if ($req->hasfile('Category_Image'))
        {
            $file=$req->file('Category_Image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('Admin/Category',$filename);
            $category_insert->Category_Image=$filename;
            $category_insert->save();
            return redirect('/add_category');
        }
    }
    public function Manage_category()
    {
        $Category=Category::all();
        return view('Admin/Manage_category',compact('Category'));
    }
    // public function Admin_profile_update(Request $req)
    // {
    //     $Admin_profile_update=Admin::where([['Admin_email',session('email')]])->first();
    //      $Admin_profile_update->Admin_name=$req->input('Admin_name');
    //      $Admin_profile_update->Admin_password=$req->input('Admin_password');
    //     $Admin_profile_update->update();
    //     return redirect('/admin_profile');

    // }

    public function Category_delete($Category_id)
    {
        $Category_delete=Category::where([['Category_id',$Category_id]])->first();
        $Category_delete->delete();
        return redirect('/Manage_category');
    }
    public function Category_edit($Category_id)
    {
        $category_fetch=category::where([['Category_id',$Category_id]])->first();
        return view('Admin/Category_edit',compact('category_fetch'));

    }
    public function add_employee()
    {
        $category=category::all();
        return view('Admin/add_employee',compact('category'));
    }
    public function employee_insert(Request $req)
    {
        $employee=new employee;
        $employee->Category_id=$req->input('Category_id');
        $employee->Employee_name=$req->input('Employee_name');
        $employee->Employee_mail=$req->input('Employee_mail');
        $employee->Employee_phone=$req->input('Employee_phone');
        $employee->Working_time=$req->input('Working_time');
        $employee->Employee_payment=$req->input('Employee_payment');
        if ($req->hasfile('Employee_Image'))
        {
            $file=$req->file('Employee_Image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('Admin/Employee',$filename);
            $employee->Employee_image=$filename;
            $employee->save();
            return redirect('/add_employee');
        }

    }
    public function Manage_employee()
    {
        if(session()->has('email'))
        {
             $employee_fetch=DB::table('employees')->join('categories','employees.Category_id','=','categories.Category_id')->get();
             return view('Admin/manage_employee',compact('employee_fetch'));
        }
        else
        {
            return redirect('/index');
        }
        
    }
    public function Employee_delete($Employee_delete)
    {
        $employee_delete=employee::where([['Employee_id',$Employee_delete]])->first();
        $employee_delete->delete();
        return redirect('/Manage_employee');
    }
    public function Employee_edit($Employee_id)
    {
        $category_fetch=category::all();
        $employee_fetch=employee::where([['Employee_id',$Employee_id]])->first();
        return view('/Admin/employee_edit',compact('employee_fetch','category_fetch'));
    }
    public function Booking_details()
    {
        if(session()->has('email'))
        {
            $Booking_details=Booking::where([['Booking_status','Pending']])->get();
            return view('Admin/Booking_details',compact('Booking_details'));
        }
        else
        {
            return redirect('/index');
        }
    }
    public function Approve($Booking_id)
    {
        $Approve=Booking::where([['Booking_id',$Booking_id]])->first();
        $Approve->Booking_status="APPROVED";
        $Approve->update();
        return redirect('/Booking_details');
    }
     public function Reject($Booking_id)
    {
        $Approve=Booking::where([['Booking_id',$Booking_id]])->first();
        $Approve->Booking_status="REJECTED";
        $Approve->update();
        return redirect('/Booking_details');
    }
    public function user_details()
    {
        if(session()->has('email'))     
        {
            $customer_fetch=customer::all();
            return view('Admin/user_details',compact('customer_fetch'));
        }
        else
        {
            return redirect('/index');
        }
        
    }


}

