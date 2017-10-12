<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiesgoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('riesgo',function(Blueprint $table){
            $table->increments('idriesgo');
            $table->string('descripriesgo',300);
            $table->decimal('estimacion',5,2);
            $table->string('impacto',200);
            $table->integer('id_activo')->unsigned();
            $table->foreign('idd_activo')->references('idactivo')->on('activo');
            $table->integer('id_vulnerabilidad')->unsigned();
            $table->foreign('idd_vulnerabilidad')->references('idvulnerabilidad')->on('vulnerabilidad');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
