<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoombookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roombookings', function (Blueprint $table) {
            $table->id();
            $table->integer('room_id');
            $table->integer('student_id');
           
            $table->string('booking_date');
            $table->string('room_status');
            $table->string('room_fee');
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
        Schema::dropIfExists('roombookings');
    }
}
