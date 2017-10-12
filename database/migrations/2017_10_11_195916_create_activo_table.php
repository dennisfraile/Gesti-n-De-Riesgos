<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('activo',function(Blueprint $table){
            $table->increments('idactivo');
            $table->string('nombreactivo',30);
            $table->string('descripactivo',200);
            $table->integer('id_ta')->unsigned();
            $table->foreign('id_ta')->references('idtipoactivo')->on('tipoactivo');
            $table->integer('id_em')->unsigned();
            $table->foreign('id_em')->references('idempresa')->on('empresa');
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
        Schema::drop('activo');
    }
}
