<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstadoCivilTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estado_civil', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->string('descripcion', 45);
			$table->integer('activo');
			$table->timestamp('timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('estado_civil');
	}

}
