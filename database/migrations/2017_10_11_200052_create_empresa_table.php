<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('empresa',function(Blueprint $table){
            $table->increments('idempresa');
            $table->string('nombreempresa',50);
            $table->string('descripempresa',300);
            $table->string('politica',350);
            $table->string('objetivo',350);
            $table->string('alcance',350);
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
