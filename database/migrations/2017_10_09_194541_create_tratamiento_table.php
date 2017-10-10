<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTratamientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tratamientoriesgo',function(Blueprint $table){
            $table->increments('idtratamiento');
            $table->string('nombretratamiento',30);
            $table->string('descriptratamiento',200);
            $table->integer('idtipotratamiento_fk')->unsigned();
            $table->foreign('idtipotratamiento_fk')->references('idtipotratamiento')->on('tipotratamiento');
            $table->integer('idactivo_fk')->unsigned();
            $table->foreign('idactivo_fk')->references('idactivo')->on('activo');
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
