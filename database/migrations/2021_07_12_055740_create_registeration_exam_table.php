<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterationExamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registeration_exam', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_info_id');
            $table->string('date');
            $table->string('invoice_image');
            $table->string('invoice_date');
            $table->string('private_school_name')->nullable();
            $table->string('grade')->nullable();
            $table->unsignedBigInteger('batch_id');
            $table->integer('is_past_module');
            $table->integer('is_full_module');
            $table->unsignedBigInteger('exam_type_id');
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
        Schema::dropIfExists('registeration_exam');
    }
}
