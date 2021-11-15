<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruiterGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruiter_group', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slogan');
            $table->string('location');
            $table->text('logo');
            $table->integer('number_of_employees');
            $table->boolean('is_active');
            $table->string('website');
            $table->string('email1');
            $table->string('email2');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('address');
            $table->string('company_information');
            $table->integer('available_point');
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
        Schema::dropIfExists('recruiter_group');
    }
}
