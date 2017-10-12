<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('empleado',function(Blueprint $table){
            $table->increments('idempleado');
            $table->string('nombreempleado',30);
            $table->string('apellido',30);
            $table->string('email',30);
            $table->string('foto',25);
            $table->integer('id_empresa')->unsigned();
            $table->foreign('idd_empresa')->references('idempresa')->on('empresa');
            $table->integer('id_rol')->unsigned();
            $table->foreign('idd_rol')->references('idrol')->on('rol');
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
