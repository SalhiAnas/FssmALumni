<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('gender');
            $table->string('status');
            $table->string('cin');
            $table->string('photo')->nullable();
            $table->string('more')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('date');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
    public function setBirthDateAttribute($value)
    {
        $this->attributes['date'] = $this->parseDate($value);
    } 

    public function parseDate($date=null)
    {
        if(isset($date))
        {
            return Carbon::parse($date)->format('dd, mm, YY');
        }
        return null;
    }
}
