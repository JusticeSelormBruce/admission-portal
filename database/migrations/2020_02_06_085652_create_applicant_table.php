<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql2')->create('applicant', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('application_id');
            $table->string('suffix');
            $table->string('title');
            $table->string('lname');
            $table->string('fname');
            $table->string('mname')->nullable();
            $table->string('sex');
            $table->string('dob');
            $table->string('email')->nullable();
            $table->string('homephone')->nullable();
            $table->string('cellphone');
            $table->string('fax')->nullable();
            $table->string('homeadd')->nullable();
            $table->string('post_address')->nullable();
            $table->string('region')->nullable();
            $table->string('city')->nullable();
            $table->string('ssnit')->nullable();
            $table->string('place_of_birth');
            $table->string('hometown');
            $table->string('disability');
            $table->string('religion');
            $table->string('denomination')->nullable();
            $table->string('marital_status');
            $table->string('no_children');
            $table->string('zipcode')->nullable();
            $table->string('country')->default('Ghana');
            $table->string('nationality')->default('Ghanaian');
            $table->string('status')->default('applicant');
            $table->string('langSpoken');
            $table->text('image')->nullable()->default(NULL);
            $table->text('imageType')->nullable()->default(NULL);
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
        Schema::dropIfExists('applicant');
    }
}
