<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePartTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('part', function(Blueprint $table)
		{
			$table->increments('idPart');
			$table->dateTime('dateSouscription');
			$table->decimal('montantSouscription', 8, 0);
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
		Schema::drop('part');
	}

}
