<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemsTable extends Migration {

	public function up()
	{
		Schema::create('items', function(Blueprint $table) {
			$table->integer('ItemID')->unique()->unsigned();
			$table->text('ItemName');
			$table->enum('ItemType', array('Ship', 'Module', 'Misc'));
		});
	}

	public function down()
	{
		Schema::drop('items');
	}
}