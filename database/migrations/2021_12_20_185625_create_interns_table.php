<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interns', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('company');
            $table->string('duration');
            $table->string('location');
            $table->date('start_time');
            $table->enum('job_type',['part_time','full_time','remotely']);
            $table->longText('description');
            $table->string('experience_skills')->nullable();
            $table->string('education_certificates')->nullable();
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
        Schema::dropIfExists('interns');
    }
}
