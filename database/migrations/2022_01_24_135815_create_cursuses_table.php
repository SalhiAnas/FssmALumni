<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursuses', function (Blueprint $table) {
            $table->id();
            $table->enum('type_cursus',['académique','professionnel']);
            $table->date('année');
            $table->text('titre_cursus');
            $table->longText('description');
            $table->unsignedBigInteger('user_id');
            $table->index('user_id');
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
        Schema::dropIfExists('cursuses');
    }
}
