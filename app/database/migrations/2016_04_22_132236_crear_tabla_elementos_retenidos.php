<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaElementosRetenidos extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elementos_retenidos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod_dimension', 4);
            $table->string('cod_subdimension', 3);
            $table->string('cod_agrupacion', 3);
            $table->integer('cod_objeto');
            $table->integer('numero_orden');
            $table->decimal('cantidad_existente');
            $table->decimal('cantidad_solicitada');
            
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        drop_cascade('elementos_retenidos');
    }

}
