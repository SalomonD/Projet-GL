<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPartTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('part', function(Blueprint $table)
		{
			$table->foreign('matricule', 'part_ibfk_1')->references('matricule')->on('adherent')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('idFond', 'part_ibfk_2')->references('idFond')->on('fonds')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('part', function(Blueprint $table)
		{
			$table->dropForeign('part_ibfk_1');
			$table->dropForeign('part_ibfk_2');
		});
	}

}
