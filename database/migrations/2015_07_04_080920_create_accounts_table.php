<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccountsTable extends Migration {

	public function up()
	{
		Schema::create('accounts', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('CharID')->unique()->unsigned();
			$table->text('CharName');
			$table->tinyInteger('Roles')->default('0');
		});
	}

	public function down()
	{
		Schema::drop('accounts');
	}
}