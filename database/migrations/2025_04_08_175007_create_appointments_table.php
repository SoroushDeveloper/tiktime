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
        Schema::create('appointments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->datetime('date_time');
            $table->text('self_description')->nullable();
            $table->text('customer_description')->nullable();
            $table->bool('reservation_sms');
            $table->bool('deposit');
            $table->bool('reminder_sms');
            $table->json('services');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
