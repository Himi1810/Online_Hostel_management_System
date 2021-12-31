<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManageroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managerooms', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
            $table->string('room_name');
           
            $table->string('room_type');
            
            $table->string('room_fee');
            $table->string('allocative');
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
        Schema::dropIfExists('managerooms');
    }
}
