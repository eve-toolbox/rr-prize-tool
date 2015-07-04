<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('prizes', function(Blueprint $table) {
			$table->foreign('ItemID')->references('ItemID')->on('items')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('prizes', function(Blueprint $table) {
			$table->foreign('DrawingID')->references('id')->on('drawings')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('prizes', function(Blueprint $table) {
			$table->foreign('CharID')->references('CharID')->on('accounts')
						->onDelete('set null')
						->onUpdate('no action');
		});
		Schema::table('drawings', function(Blueprint $table) {
			$table->foreign('RoamID')->references('id')->on('roams')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('accounts_drawings', function(Blueprint $table) {
			$table->foreign('CharID')->references('CharID')->on('accounts')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('accounts_drawings', function(Blueprint $table) {
			$table->foreign('DrawingID')->references('id')->on('drawings')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('accounts_drawings', function(Blueprint $table) {
			$table->foreign('RoamID')->references('id')->on('roams')
						->onDelete('no action')
						->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::table('prizes', function(Blueprint $table) {
			$table->dropForeign('prizes_ItemID_foreign');
		});
		Schema::table('prizes', function(Blueprint $table) {
			$table->dropForeign('prizes_DrawingID_foreign');
		});
		Schema::table('prizes', function(Blueprint $table) {
			$table->dropForeign('prizes_CharID_foreign');
		});
		Schema::table('drawings', function(Blueprint $table) {
			$table->dropForeign('drawings_RoamID_foreign');
		});
		Schema::table('accounts_drawings', function(Blueprint $table) {
			$table->dropForeign('accounts_drawings_CharID_foreign');
		});
		Schema::table('accounts_drawings', function(Blueprint $table) {
			$table->dropForeign('accounts_drawings_DrawingID_foreign');
		});
		Schema::table('accounts_drawings', function(Blueprint $table) {
			$table->dropForeign('accounts_drawings_RoamID_foreign');
		});
	}
}