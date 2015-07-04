<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoamsTable extends Migration {

	public function up()
	{
		Schema::create('roams', function(Blueprint $table) {
			$table->increments('id');
			$table->enum('RoamPrefix', array('Sunday_Sinners', 'Roam_Your_Boats', 'MATE', 'Spontaneous_Roams'));
			$table->text('RoamName');
			$table->text('FleetCommander');
			$table->date('RoamDate');
		});
	}

	public function down()
	{
		Schema::drop('roams');
	}
}