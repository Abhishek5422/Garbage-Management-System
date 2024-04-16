<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $table='customers';
    protected $fillable=['customer_name','customer_email','customer_password','customer_phone','customer_address'];
    protected $primaryKey='customer_id';
}
