<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index','App\Http\Controllers\User_controller@index');
Route::get('/about','App\Http\Controllers\User_controller@about');
Route::get('/contact','App\Http\Controllers\User_controller@contact');
Route::get('/registration','App\Http\Controllers\User_controller@registration');
Route::post('/register_insert','App\Http\Controllers\User_controller@register_insert');
Route::get('/customer_login','App\Http\Controllers\User_controller@customer_login');
Route::post('/signin_check','App\Http\Controllers\User_controller@signin_check');
Route::get('/customer_home','App\Http\Controllers\User_controller@customer_home');
Route::get('/Admin_index','App\Http\Controllers\Admin_controller@Admin_index');
Route::get('/Admin_register','App\Http\Controllers\Admin_controller@Admin_register');
Route::post('/Admin_register_insert','App\Http\Controllers\Admin_controller@Admin_register_insert');
Route::get('/Admin_login','App\Http\Controllers\Admin_controller@Admin_login');
Route::post('/Admin_signin_check','App\Http\Controllers\Admin_controller@Admin_signin_check');
Route::get('/Admin_home','App\Http\Controllers\Admin_controller@Admin_home');
Route::get('/admin_profile','App\Http\Controllers\Admin_controller@admin_profile');
Route::post('/customer_profile_update','App\Http\Controllers\User_controller@customer_profile_update');
Route::get('/customer_profile','App\Http\Controllers\User_controller@customer_profile');
Route::get('/add_category','App\Http\Controllers\Admin_controller@add_category');

Route::get('/User_Logout','App\Http\Controllers\User_controller@User_Logout');
Route::post('/category_insert','App\Http\Controllers\Admin_controller@category_insert');
Route::get('/Manage_category','App\Http\Controllers\Admin_controller@Manage_category');
Route::post('/Admin_profile_update','App\Http\Controllers\Admin_controller@Admin_profile_update');
Route::get('/Category_delete/{Category_id}','App\Http\Controllers\Admin_controller@Category_delete');
Route::get('/Category_edit/{Category_id}','App\Http\Controllers\Admin_controller@Category_edit');
Route::get('/add_employee','App\Http\Controllers\Admin_controller@add_employee');
Route::post('/employee_insert','App\Http\Controllers\Admin_controller@employee_insert');
Route::get('/Manage_employee','App\Http\Controllers\Admin_controller@Manage_employee');
Route::get('/Employee_delete/{Employee_id}','App\Http\Controllers\Admin_controller@Employee_delete');
Route::get('/admin_Logout','App\Http\Controllers\Admin_controller@admin_Logout');
Route::get('/Employee_edit/{Employee_id}','App\Http\Controllers\Admin_controller@Employee_edit');
Route::get('/employee_details/{Category_id}','App\Http\Controllers\User_controller@employee_details');
Route::get('/employee_booking/{Employee_id}','App\Http\Controllers\User_controller@employee_booking');
Route::post('/employee_booking_insert','App\Http\Controllers\User_controller@employee_booking_insert');
Route::get('/My_bookings','App\Http\Controllers\User_controller@My_bookings');
Route::get('/Booking_details','App\Http\Controllers\Admin_controller@Booking_details');
Route::get('/Approve/{Booking_id}','App\Http\Controllers\Admin_controller@Approve');
Route::get('/Reject/{Booking_id}','App\Http\Controllers\Admin_controller@Reject');
Route::get('/Cancel/{Booking_id}','App\Http\Controllers\User_controller@Cancel');
Route::get('/payment/{Booking_id}','App\Http\Controllers\User_controller@payment');
Route::get('/user_details','App\Http\Controllers\Admin_controller@user_details');
Route::post('/payment_insert','App\Http\Controllers\User_controller@payment_insert');
Route::get('/Reciept','App\Http\Controllers\User_controller@Reciept');
