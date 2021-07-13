<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationHistroysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_histroys', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_info_id');
            $table->string('university_name');
            $table->string('degree_name')->nullable();
            $table->string('document')->nullable();
            $table->string('qualified_date')->nullable();
            $table->string('roll_number',30)->nullable();

            $table->foreign('student_info_id')->references('id')->on('student_infos')->onDelete('cascade');
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
        Schema::dropIfExists('education_histroys');
    }
}
