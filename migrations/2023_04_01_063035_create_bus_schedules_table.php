<?php

// Name: Cho Yee Sin

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
        Schema::create('bus_schedules', function (Blueprint $table) {
            $table->bigIncrements('id')->startFrom(6000);
            $table->time('departureTime');
            $table->time('arrivalTime');
            $table->string('pickUpPoint');
            $table->string('dropOffPoint');
            $table->string('stopPoint');
            $table->unsignedBigInteger('Bus_ID');
            $table->foreign('Bus_ID')->references('id')->on('buses')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('Driver_ID');
            $table->foreign('Driver_ID')->references('id')->on('drivers')->onDelete('cascade')->onUpdate('cascade');
            $table->double('price');
            $table->timestamps();
        });
        
        DB::statement('ALTER TABLE bus_schedules AUTO_INCREMENT = 6000;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus_schedules');
    }
};
