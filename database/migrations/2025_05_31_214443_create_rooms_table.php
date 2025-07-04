<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_name');
            $table->string('room_no')->unique();
            $table->string('room_type');
            $table->decimal('room_rate', 10, 2);
            $table->enum('room_status', ['available', 'occupied', 'maintenance'])->default('available');
            $table->timestamps();
        });
    }    
    

    /**
     * Reverse the migrations.
     */
    // public function down(): void
    // {
    //     Schema::dropIfExists('rooms');
    // }
};
