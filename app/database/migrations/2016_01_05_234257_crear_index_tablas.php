<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearIndexTablas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//ELEMENTOS QUIMICOS
		Schema::table('elementos_quimicos', function($table){
    		$table->foreign('cod_estado')->references('cod_estado')
    			->on('estados_materia')
    			->onDelete('cascade');;
    		$table->foreign('cod_clasificacion')->references('cod_clasificacion')
    			->on('clasificacion_elementos')
    			 ->onDelete('cascade');
    		$table->foreign('cod_subclasificacion')->references('cod_subclasificacion')
    			->on('subclasificacion_elementos')
    			->onDelete('cascade');
		});

		//USUARIOS
		Schema::table('usuarios', function($table){
		
			$table->foreign('cod_tipo_usuario')->references('codigo')
				->on('tipos_usuario')
				->onDelete('cascade');
		});

		//PERSONAS
		Schema::table('personas', function($table){

			$table->foreign('usuario_id')->references('id')
				->on('usuarios')
				->onDelete('cascade');

			$table->foreign('sexo_id')->references('id')
				->on('sexos')
				->onDelete('cascade');
		});

		//ALMACENES
		Schema::table('almacenes', function($table){
			$table->foreign('responsable')->references('id')
				->on('usuarios')
				->onDelete('cascade');

			$table->foreign('primer_auxiliar')->references('id')
				->on('personas')
				->onDelete('cascade');

			$table->foreign('segundo_auxiliar')->references('id')
				->on('personas')
				->onDelete('cascade');
		});
	}	



	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{

	}

}
