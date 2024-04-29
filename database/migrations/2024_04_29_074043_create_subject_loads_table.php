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
        Schema::create('subject_loads', function (Blueprint $table) {
            $table->id();
            $table->string('subject_id');
            $table->string('instructor_id');
            $table->string('section');
            $table->date('day');
            $table->double('room_place');
            $table->date('date_start');
            $table->date('date_end');
            $table->double('time_starts');
            $table->double('time_end'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subject_loads');
    }
};
