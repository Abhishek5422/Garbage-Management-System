<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table='payments';
    protected $fillable=['Booking_id','Customer_id','Employee_id','Customer_email','Employee_Name','CardNumber','Expiry_date','CVC_Code','Booking_Amount'];
    protected $primaryKey='Payment_id';
}
