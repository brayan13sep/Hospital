<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMadreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('madre', function(Blueprint $table)
		{
			$table->foreign('estado_civil', 'fk_Madre_EstadoCivil1')->references('ID')->on('estado_civil')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('nivel_educativo', 'fk_Madre_NivelEducativo1')->references('ID')->on('nivel_educativo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('tipo_documento', 'fk_Madre_TipoDocumento1')->references('ID')->on('tipo_documento')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('madre', function(Blueprint $table)
		{
			$table->dropForeign('fk_Madre_EstadoCivil1');
			$table->dropForeign('fk_Madre_NivelEducativo1');
			$table->dropForeign('fk_Madre_TipoDocumento1');
		});
	}

}
