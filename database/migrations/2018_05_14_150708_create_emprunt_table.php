<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmpruntTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('emprunt', function(Blueprint $table)
		{
			$table->integer('idEmprunt')->unsigned()->primary();
			$table->dateTime('dateEmprunt');
			$table->decimal('montantEmprunt', 8, 0);
			$table->decimal('montantARembourse', 8, 0);
			$table->integer('matricule')->unsigned()->index('matricule');
			$table->integer('idFond')->unsigned()->index('idFond');
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
		Schema::drop('emprunt');
	}

}
