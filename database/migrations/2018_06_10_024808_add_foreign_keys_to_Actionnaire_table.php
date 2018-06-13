<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToActionnaireTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Actionnaire', function(Blueprint $table)
		{
			$table->foreign('matricule', 'actionnaire_ibfk_1')->references('matricule')->on('adherent')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Actionnaire', function(Blueprint $table)
		{
			$table->dropForeign('actionnaire_ibfk_1');
		});
	}

}
