<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TagsTasksFk extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tag_task', function (Blueprint $table) {
			$table->foreign('tag_id')->references('id')->on('tags');
			$table->foreign('task_id')->references('id')->on('tasks');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tag_task', function (Blueprint $table) {
			$table->dropForeign('tag_id');
			$table->dropForeign('task_id');
		});
	}
}