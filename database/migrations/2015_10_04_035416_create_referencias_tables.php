<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferenciasTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('parentesco');
            $table->integer('anios_conocimientos');
            $table->date('fecha_nacimiento');
            $table->string('ife_link');
            $table->integer('telefono');
            $table->string('email')->unique();
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
        Schema::drop('referencias');
    }
}
