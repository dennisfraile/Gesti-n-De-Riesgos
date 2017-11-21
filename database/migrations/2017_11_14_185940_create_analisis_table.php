<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnalisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('analisis', function (Blueprint $table) {
            $table->increments('idanalisis');
            $table->integer('idactivo')->unsigned();
            $table->foreign('idactivo')->references('idactivo')->on('activo');
            $table->decimal('confidencialidad',5,2);
            $table->decimal('disponibilidad',5,2);          
            $table->decimal('integridad',5,2);
            $table->decimal('degradacion',5,2);
            $table->decimal('valoractivo',5,2);
            $table->decimal('impacto',5,2);
            $table->decimal('probocurrencia',5,2);
            $table->decimal('riesgo',5,2);
            
            //
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
        
        Schema::drop('analisis');
        
    }
}
