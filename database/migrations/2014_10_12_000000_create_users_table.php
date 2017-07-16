<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('birthday');
            $table->string('nationality');
            $table->string('gender');
            $table->string('custom-gender');
            $table->string('blood-type');
            $table->string('allergies');
            $table->string('nome-familiar1');
            $table->string('tel-familiar1');
            $table->string('nome-familiar2');
            $table->string('tel-familiar3');
            $table->string('nome-medico');
            $table->string('tel-medico');
            $table->string('nome-plano');
            $table->string('tel-plano');
            $table->string('blood-type');
            $table->string('blood-type');
            $table->string('blood-type');
            $table->string('blood-type');
            $table->string('blood-type');
            $table->string('email')->unique();
            $table->string('password');
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
}
