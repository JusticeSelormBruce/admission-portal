<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyGaurdiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_gaurdians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('applicant_id');
            $table->string('relationship');
            $table->string('fullname');
            $table->text('homeadd')->nullable();
            $table->text('post_box')->nullable();
            $table->string('city');
            $table->string('zipcode')->nullable();
            $table->string('region');
            $table->string('country');
            $table->string('phone1');
            $table->string('phone2')->nullable();
            $table->string('company')->nullable();
            $table->string('occupation')->nullable();
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
        Schema::dropIfExists('family_gaurdians');
    }
}
