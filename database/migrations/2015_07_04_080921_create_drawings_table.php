<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDrawingsTable extends Migration {

	public function up()
	{
		Schema::create('drawings', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('RoamID')->unsigned();
			$table->tinyInteger('DrawingNumber');
		});
	}

	public function down()
	{
		Schema::drop('drawings');
	}
}