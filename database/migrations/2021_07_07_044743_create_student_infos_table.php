<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name_mm');
            $table->string('name_eng');
            $table->string('nrc');
            $table->string('father_name_mm');
            $table->string('father_name_eng');
            $table->string('race');
            $table->string('religion');
            $table->string('date_of_birth');
            $table->text('address');
            $table->text('current_address');
            $table->string('phone',30);
            $table->boolean('gov_staff')->default(0);
            $table->string('image')->nullable();
            $table->string('registration_no');
            $table->string('date');
            $table->boolean('approve_reject_status')->default(0);
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_infos');
    }
}
