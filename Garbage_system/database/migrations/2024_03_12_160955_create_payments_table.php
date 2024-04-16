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
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('Payment_id');
            $table->string('Booking_id',200);
            $table->string('Customer_id',200);
            $table->string('Employee_id',200);
            $table->string('Customer_email',200);
            $table->string('Employee_Name',200);
            $table->string('CardNumber',200);
            $table->string('Expiry_date',200);
            $table->string('CVC_Code',200);
            $table->string('Booking_Amount',200);
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
        Schema::dropIfExists('payments');
    }
};
