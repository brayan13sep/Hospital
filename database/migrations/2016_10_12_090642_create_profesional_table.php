<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfesionalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profesional', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->integer('no_colegiatura');
			$table->bigInteger('dpi');
			$table->string('nombre', 45);
			$table->string('primer_apellido', 45);
			$table->string('segundo_apellido', 45)->nullable();
			$table->string('genero', 45);
			$table->string('certifica_declara', 45);
			$table->integer('tipo_documento')->index('fk_Profecional_TipoDocumento1_idx');
			$table->integer('sede')->index('fk_Profecional_Sede1_idx');
			$table->integer('profesion')->index('fk_Profecional_Profesion1_idx');
			$table->integer('activo');
			$table->timestamp('timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->primary(['ID','no_colegiatura','dpi']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('profesional');
	}

}
