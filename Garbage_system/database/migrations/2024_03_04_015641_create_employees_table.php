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
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('Employee_id');
            $table->string('Category_id',200);
            $table->string('Employee_name',200);
            $table->string('Employee_mail',200);
            $table->string('Employee_phone',200);
            $table->string('Working_time',200);
            $table->string('Employee_payment',200);
            $table->string('Employee_image',200);
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
        Schema::dropIfExists('employees');
    }
};
