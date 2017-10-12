<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmenazaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('amenaza',function(Blueprint $table){
            $table->increments('idamenaza');
            $table->string('nombreamenza',25);
            $table->string('descripamenaza',50);
            $table->integer('id_tipo_amenaza')->unsigned();
            $table->foreign('id_tipo_amenaza')->references('idtipoamenaza')->on('tipoamenaza');
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
