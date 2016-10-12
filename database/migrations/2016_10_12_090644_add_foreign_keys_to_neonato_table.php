<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToNeonatoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('neonato', function(Blueprint $table)
		{
			$table->foreign('atendio_parto', 'fk_Neonato_AtendioParto1')->references('ID')->on('atendio_parto')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('condicion_parto', 'fk_Neonato_CondicionParto1')->references('ID')->on('condicion_parto')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('sede', 'fk_Neonato_Sede1')->references('ID')->on('sede')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('tipo_parto', 'fk_Neonato_TipoParto1')->references('ID')->on('tipo_parto')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('neonato', function(Blueprint $table)
		{
			$table->dropForeign('fk_Neonato_AtendioParto1');
			$table->dropForeign('fk_Neonato_CondicionParto1');
			$table->dropForeign('fk_Neonato_Sede1');
			$table->dropForeign('fk_Neonato_TipoParto1');
		});
	}

}
