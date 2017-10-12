<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateControlTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('control',function(Blueprint $table){
            $table->increments('idcontro');
            $table->string('encargado',50);
            $table->string('estado',10);
            $table->string('descripcontrol',100);
            $table->string('fechainicio',10);
            $table->string('fechafin',10);
            $table->double('presupouesto',10);
            $table->integer('idtrat')->unsigned();
            $table->foreign('idtrat')->references('idtratatamiento')->on('tratamientoriesgo');
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
