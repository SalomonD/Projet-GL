<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRetourTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('retour', function(Blueprint $table)
		{
			$table->foreign('idEmprunt', 'retour_ibfk_1')->references('idEmprunt')->on('emprunt')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('retour', function(Blueprint $table)
		{
			$table->dropForeign('retour_ibfk_1');
		});
	}

}
