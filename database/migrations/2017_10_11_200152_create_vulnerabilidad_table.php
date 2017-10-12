<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVulnerabilidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('vulnerabilidad',function(Blueprint $table){
            $table->increments('vulnerabilidad');
            $table->string('nombrevulne',30);
            $table->string('descripvulne',50);
            $table->integer('id_amenaza')->unsigned();
            $table->foreign('idd_amenaza')->references('idamenaza')->on('amenaza');
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
