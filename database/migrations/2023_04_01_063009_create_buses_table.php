<?php

// Name: Cho Yee Sin

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
        Schema::create('buses', function (Blueprint $table) {
            $table->bigIncrements('id')->startFrom(7000);
            $table->string('plateNumber')->unique();
            $table->string('model');
            $table->date('purchaseDate');
            $table->date('roadTaxExpirationDate');
            $table->string('busType');
            $table->integer('seat');
            $table->timestamps();
        });
        
        DB::statement('ALTER TABLE buses AUTO_INCREMENT = 7000;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buses');
    }
};
