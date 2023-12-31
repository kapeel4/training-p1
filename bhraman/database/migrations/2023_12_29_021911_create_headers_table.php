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
        Schema::create('headers', function (Blueprint $table) {
            $table->id();
            $table->string('govt_level');
            $table->string('ministry_name')->nullable();
            $table->string('office_name');
            $table->string('province_name');
            $table->bigInteger('office_code');
            $table->string('govt_level_np');
            $table->string('ministry_name_np')->nullable();
            $table->string('office_name_np');
            $table->string('province_name_np');
            $table->bigInteger('office_code_np');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('headers');
    }
};
