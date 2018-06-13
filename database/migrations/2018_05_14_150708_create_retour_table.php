<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRetourTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('retour', function(Blueprint $table)
		{
			$table->integer('idRetour')->unsigned()->primary();
			$table->dateTime('dateRetour');
			$table->decimal('montantRetour', 8, 0);
			$table->integer('idEmprunt')->unsigned()->index('idEmprunt');
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
		Schema::drop('retour');
	}

}
