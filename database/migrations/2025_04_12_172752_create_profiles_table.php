<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->index();

            $table->string('owner_name')->nullable();
            $table->enum('gender', ['none', 'male', 'female'])->default('none');
            $table->date('birth_date')->nullable();
            $table->foreignUuid('profession_id')->nullable()->index();
            $table->foreignUuid('city_id')->nullable()->index();
            $table->string('description')->nullable();
            $table->string('instagram')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('tel')->nullable();
            $table->string('address')->nullable();
            $table->string('telegram')->nullable();
            $table->string('website')->nullable();
            $table->string('avatar')->nullable();
            $table->string('timezone')->default('Asia/Tehran');
            $table->boolean('nightly_sms')->default(true);
            $table->integer('sms_amount')->default(0);

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
