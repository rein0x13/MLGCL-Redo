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
        Schema::create('eclearance', function (Blueprint $table) {
            $table->id();
            $table->double('subject_id');
            $table->double('course_id');
            $table->double('time_location_id');
            $table->double('semester_id');
            $table->double('academic_year_id');
            $table->double('instructor_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eclearance');
    }
};
