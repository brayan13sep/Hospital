<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNeonatoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('neonato', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->integer('rfid');
			$table->string('genero', 45);
			$table->float('peso', 10, 0);
			$table->float('talla', 10, 0);
			$table->float('perimetro_cefalico', 10, 0);
			$table->float('perimetro_toracico', 10, 0);
			$table->string('hora_de_nacimiento', 45);
			$table->date('fecha_nacimiento');
			$table->string('duracion_del_embarazo', 45);
			$table->string('malformacion_congenita', 45)->nullable();
			$table->string('lactancia_precoz', 45);
			$table->string('tipo_de_ligadura_y_corte_del_cordon', 45);
			$table->integer('sede')->index('fk_Neonato_Sede1_idx');
			$table->integer('atendio_parto')->index('fk_Neonato_AtendioParto1_idx');
			$table->integer('condicion_parto')->index('fk_Neonato_CondicionParto1_idx');
			$table->integer('tipo_parto')->index('fk_Neonato_TipoParto1_idx');
			$table->integer('activo');
			$table->timestamp('timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->primary(['ID','rfid']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('neonato');
	}

}
