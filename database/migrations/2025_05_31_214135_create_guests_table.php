<?php

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
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->string('guest_name');
            $table->string('guest_contact_number');
            $table->string('guest_address');
            $table->enum('guest_type', ['individual', 'travel_agent']);
        });
    }

};
