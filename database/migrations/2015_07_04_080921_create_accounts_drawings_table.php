<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccountsDrawingsTable extends Migration {

	public function up()
	{
		Schema::create('accounts_drawings', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('CharID')->unsigned();
			$table->integer('DrawingID')->unsigned();
			$table->integer('RoamID')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('accounts_drawings');
	}
}