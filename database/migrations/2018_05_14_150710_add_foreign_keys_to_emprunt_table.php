<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEmpruntTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('emprunt', function(Blueprint $table)
		{
			$table->foreign('matricule', 'emprunt_ibfk_1')->references('matricule')->on('adherent')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('idFond', 'emprunt_ibfk_2')->references('idFond')->on('fonds')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('emprunt', function(Blueprint $table)
		{
			$table->dropForeign('emprunt_ibfk_1');
			$table->dropForeign('emprunt_ibfk_2');
		});
	}

}
