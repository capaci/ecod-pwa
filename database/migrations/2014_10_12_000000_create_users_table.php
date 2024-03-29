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
            $table->string('birthday')->nullable();
            $table->string('nationality')->nullable();
            $table->string('gender')->nullable();
            $table->string('custom_gender')->nullable();
            $table->string('blood_type')->nullable();
            $table->string('allergies')->nullable();
            $table->string('nome_familiar1')->nullable();
            $table->string('tel_familiar1')->nullable();
            $table->string('nome_familiar2')->nullable();
            $table->string('tel_familiar2')->nullable();
            $table->string('nome_medico')->nullable();
            $table->string('tel_medico')->nullable();
            $table->string('nome_plano')->nullable();
            $table->string('tel_plano')->nullable();
            $table->string('tabagismo')->nullable();
            $table->string('sedentarismo')->nullable();
            $table->string('etilismo')->nullable();
            $table->string('atividade_fisica')->nullable();
            $table->string('musculoesqueletica')->nullable();
            $table->string('cardiovascular')->nullable();
            $table->string('uroginecologia')->nullable();
            $table->string('neurologia')->nullable();
            $table->string('cardio')->nullable();
            $table->string('outras')->nullable();
            $table->string('hipertensao')->nullable();
            $table->string('diabetes')->nullable();
            $table->string('CA')->nullable();
            $table->string('degenerativas')->nullable();
            $table->string('vasculares')->nullable();
            $table->string('neurologicas')->nullable();
            $table->string('cirurgias')->nullable();
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
