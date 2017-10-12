<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcedimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('procedimiento',function(Blueprint $table){
            $table->increments('idprocedimiento');
            $table->string('nombreproced',30);
            $table->string('descripproced',50);
            $table->integer('id_control')->unsigned();
            $table->foreign('idd_control')->references('idcontrol')->on('control');
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
