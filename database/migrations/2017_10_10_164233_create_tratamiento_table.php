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
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('idtipotratamiento')->on('tipotratamiento');
            $table->integer('idct')->unsigned();
            $table->foreign('idct')->references('idactivo')->on('activo');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tratamientoriesgo');
    }
}
