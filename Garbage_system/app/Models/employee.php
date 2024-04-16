<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $table='employees';
    protected $fillable=['Category_id','Employee_name','Employee_mail','Employee_phone','Working_time','Employee_payment','Employee_image'];
    protected $primaryKey='Employee_id';

}
