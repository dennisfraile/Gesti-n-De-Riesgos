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
        Schema::create('tratamiento',function(Blueprint $table){
            $table->increments('idtratamiento');
            $table->string('nombretratamiento',30);
            $table->string('descriptratamiento',30);
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('idtipotratamiento')->on('tipotratamiento');
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
