<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserroleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('userrole', function(Blueprint $table)
		{
			$table->foreign('Role_ID', 'fk_Usuario_has_Role_Role1')->references('ID')->on('role')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('Usuario_ID', 'fk_Usuario_has_Role_Usuario')->references('ID')->on('usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('userrole', function(Blueprint $table)
		{
			$table->dropForeign('fk_Usuario_has_Role_Role1');
			$table->dropForeign('fk_Usuario_has_Role_Usuario');
		});
	}

}
