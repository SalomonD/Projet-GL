<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdherentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Adherent', function(Blueprint $table)
		{
			$table->increments('matricule');
			$table->string('nom', 20);
			$table->string('prenom', 20);
			$table->integer('numCni')->unique('numCni');
			$table->integer('telephone')->unsigned();
			$table->string('passwd', 60);
			$table->dateTime('dateAdhesion');
			$table->boolean('etat');
			$table->rememberToken();
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
		Schema::drop('Adherent');
	}

}
