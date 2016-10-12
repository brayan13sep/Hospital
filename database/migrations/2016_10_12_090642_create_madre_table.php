<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMadreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('madre', function(Blueprint $table)
		{
			$table->integer('ID');
			$table->bigInteger('dpi');
			$table->integer('rfid');
			$table->string('nombre', 45);
			$table->string('primer_apellido', 45);
			$table->string('segundo_apellido', 45)->nullable();
			$table->date('fecha_de_nacimiento');
			$table->integer('edad')->nullable();
			$table->string('direccion', 45);
			$table->string('tipo_de_ocupacion', 45)->nullable();
			$table->integer('total_de_embarazos')->nullable();
			$table->integer('hijos_actualmente_vivos')->nullable();
			$table->integer('hijos_nacidos_vivos_que_fallecieron')->nullable();
			$table->integer('abortos_o_nacidos_muertos')->nullable();
			$table->date('fecha_nacimiento_ultimo_hijo')->nullable();
			$table->integer('tipo_documento')->index('fk_Madre_TipoDocumento1_idx');
			$table->integer('estado_civil')->index('fk_Madre_EstadoCivil1_idx');
			$table->integer('nivel_educativo')->index('fk_Madre_NivelEducativo1_idx');
			$table->integer('activo');
			$table->timestamp('timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->primary(['ID','dpi','rfid']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('madre');
	}

}
