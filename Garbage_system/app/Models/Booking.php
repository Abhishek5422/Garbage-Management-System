<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table='bookings';
    protected $fillable=['Booking_id','Employee_id','Employee_Name','Employee_Mail','Working_time','Employee_payment','Customer_id','Customer_name','Customer_email','Working_date','Booking_status','Payment_status'];
    protected $primaryKey='Booking_id';
}
