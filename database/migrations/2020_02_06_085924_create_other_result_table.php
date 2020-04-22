<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtherResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql2')->create('other_result', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('applicant_id');
            $table->string('exam_type');
            $table->string('monthyear');
            $table->string('qualification');
            $table->string('examindex');
            $table->string('subject');
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
        Schema::dropIfExists('other_result');
    }
}
