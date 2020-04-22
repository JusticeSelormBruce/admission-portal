<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtherResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_results', function (Blueprint $table) {
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
        Schema::dropIfExists('other_results');
    }
}
