<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrativeTable extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('administrative', function (Blueprint $table) {
            $table->integer('id')->unique()->autoIncrement()->startingValue(3000);
            $table->string('Name');
            $table->char('Gender');
            $table->string('Contact_No');
            $table->string('Email_Address');
            $table->string('Password');
            $table->string('Designation');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('administrative');
    }

}

;
