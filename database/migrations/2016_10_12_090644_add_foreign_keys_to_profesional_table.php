<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProfesionalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('profesional', function(Blueprint $table)
		{
			$table->foreign('profesion', 'fk_Profecional_Profesion1')->references('ID')->on('profesion')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('sede', 'fk_Profecional_Sede1')->references('ID')->on('sede')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('tipo_documento', 'fk_Profecional_TipoDocumento1')->references('ID')->on('tipo_documento')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('profesional', function(Blueprint $table)
		{
			$table->dropForeign('fk_Profecional_Profesion1');
			$table->dropForeign('fk_Profecional_Sede1');
			$table->dropForeign('fk_Profecional_TipoDocumento1');
		});
	}

}
