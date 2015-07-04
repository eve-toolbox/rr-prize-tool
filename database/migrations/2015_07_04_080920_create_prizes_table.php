<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrizesTable extends Migration {

	public function up()
	{
		Schema::create('prizes', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('ItemID')->unsigned();
			$table->integer('DrawingID')->unsigned();
			$table->integer('CharID')->unsigned()->nullable();
			$table->boolean('ContractStatus')->nullable();
			$table->datetime('ContractDate')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('prizes');
	}
}