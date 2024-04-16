<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('Booking_id');
            $table->string('Employee_id',200);
            $table->string('Employee_Name',200);
            $table->string('Employee_Mail',200);
            $table->string('Working_time',200);
            $table->string('Employee_payment',200);
            $table->string('Customer_id',200);
            $table->string('Customer_name',200);
            $table->string('Customer_email',200);
            $table->string('Working_date',200);
            $table->string('Booking_status',200);
            $table->string('Payment_status',200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
