<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipotratamientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tipotratamiento',function(Blueprint $table){
            $table->increments('idtipotratamiento');
            $table->string('nombretipotrata',25);
            $table->string('descriptipotrata',100);
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
