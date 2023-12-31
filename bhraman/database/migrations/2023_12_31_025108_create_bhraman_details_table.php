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
        Schema::create('bhraman_details', function (Blueprint $table) {
            $table->id();
            $table->string('fiscal_year');
            $table->string('aadesh_no');
            $table->string('aadesh_no_np');
            $table->string('approval_date')->nullable();
            $table->string('approval_date_np')->nullable();
            $table->integer('employee_id'); // fk key
            $table->string('visit_address');
            $table->string('visit_address_np');
            $table->string('visit_purpose');
            $table->string('visit_purpose_np');
            $table->string('visit_date_from'); // nepali
            $table->string('visit_date_from_en');
            $table->string('visit_date_to'); // nepali
            $table->string('visit_date_to_en');
            $table->string('peski')->nullable();
            $table->string('peski_np')->nullable();
            $table->integer('visit_vehicle'); // 1 office, 2 public, 3 rental
            $table->text('more_info')->nullable();
            $table->text('more_info_np')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bhraman_details');
    }
};
