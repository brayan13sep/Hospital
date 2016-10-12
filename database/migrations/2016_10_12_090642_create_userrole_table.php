<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserroleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('userrole', function(Blueprint $table)
		{
			$table->integer('Usuario_ID')->index('fk_Usuario_has_Role_Usuario_idx');
			$table->integer('Role_ID')->index('fk_Usuario_has_Role_Role1_idx');
			$table->primary(['Usuario_ID','Role_ID']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('userrole');
	}

}
