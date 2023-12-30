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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('sanket_no');
            $table->string('name');
            $table->string('office_name');
            $table->string('contact_no');
            $table->string('emp_post');
            $table->string('type'); // 1 employee 2 recomend 3 approve
            $table->string('sanket_no_np');
            $table->string('name_np');
            $table->string('office_name_np');
            $table->string('contact_no_np');
            $table->string('emp_post_np');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
