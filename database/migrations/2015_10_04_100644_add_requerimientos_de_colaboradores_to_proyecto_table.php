<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRequerimientosDeColaboradoresToProyectoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('proyectos', function ($table) {
        $table->string('req_de_colab');
        $table->integer('cant_inversionistas');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('proyectos', function ($table) {
        $table->dropColumn('req_de_colab');
        $table->dropColumn('cant_inversionistas');
      });
    }
}
