<?php

// Name: Wong Yu Sheng

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->bigIncrements('id')->startFrom(9000);
            $table->string('Name', 30);
            $table->string('Contact_No')->unique();
            $table->char('Gender');
            $table->date('licenseExpirationDate');
            $table->timestamps();
        });
        
        DB::statement('ALTER TABLE drivers AUTO_INCREMENT = 9000;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
