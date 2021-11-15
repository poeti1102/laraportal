<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->string('location');
            $table->integer('vacancy_limit');
            $table->boolean('allow_overlimit_apply');
            $table->integer('salary_from');
            $table->integer('salary_to');
            $table->enum('salary_type', ['Monthly', 'Yearly']);
            $table->enum('job_type', ['Contract', 'Full-Time','Part-Time']);
            $table->date('closing_date');
            $table->boolean('is_active');
            $table->boolean('is_listable');
            $table->unsignedInteger('recruiter_id');
            $table->unsignedInteger('job_category_id');
            $table->unsignedInteger('job_city_id');
            $table->unsignedInteger('job_division_id');
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
        Schema::dropIfExists('job');
    }
}
