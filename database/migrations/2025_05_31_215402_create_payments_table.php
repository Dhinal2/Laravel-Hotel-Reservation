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
        Schema::create('payments', function (Blueprint $table) {
            $table->id('payment_id');

            // Reservation foreign key (assumes reservations.id is primary)
            $table->foreignId('reservation_id')->constrained('reservations')->onDelete('cascade');
            // Guest foreign key (assumes guests.id is primary)
            $table->foreignId('guest_id')->constrained('guests')->onDelete('cascade');
            $table->string('room_no');
            $table->enum('type', ['cash', 'card', 'online'])->default('cash');
            $table->enum('payment_status', ['pending', 'completed', 'failed'])->default('pending');
            $table->string('guest_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
