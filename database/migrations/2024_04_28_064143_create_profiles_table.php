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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->double('school_id');
            $table->string('profile_img');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('civil_status');
            $table->double('contact_number');
            $table->string('religion');
            $table->string('birthdate');
            $table->string('email')->unique();
            $table->string('facebook_url');
            $table->string('purok');
            $table->string('sitio_street');
            $table->string('barangay');
            $table->string('municipality');
            $table->string('province');
            $table->double('zip_code');
            $table->string('parent_guardian_name');
            $table->double('LRN');
            $table->string('school_graduated');
            $table->string('course');
            $table->string('year_level');
            $table->string('report_card_frontview');
            $table->string('report_card_frontrear');
            $table->string('good_moral');
            $table->string('birth_certificate');
            $table->string('medical_certificate');
            $table->string('honorable_dismissal');
            $table->double('status');
            $table->string('qr_code');
            $table->string('password');
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
