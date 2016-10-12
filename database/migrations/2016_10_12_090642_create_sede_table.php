<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSedeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sede', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->string('nombre', 45);
			$table->string('direccion', 45);
			$table->string('departamento', 45);
			$table->string('municipio', 45);
			$table->string('zona', 45)->nullable();
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
		Schema::drop('sede');
	}

}
