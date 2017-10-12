<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('paso',function(Blueprint $table){
            $table->increments('idpaso');
            $table->decimal('correlativo',5,2);
            $table->string('descripaso',100);
            $table->boolean('realizado',true);
            $table->integer('idproc')->unsigned();
            $table->foreign('idproc')->references('idprocedimiento')->on('procedimiento');
            
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
