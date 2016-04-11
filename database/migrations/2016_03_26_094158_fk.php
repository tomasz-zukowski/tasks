<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::table('tasks', function (Blueprint $table) {
		    $table->foreign('level_id')->references('id')->on('levels');
		    $table->foreign('category_id')->references('id')->on('categories');
	    });

	    Schema::table('hints', function (Blueprint $table) {
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
	    Schema::table('tasks', function (Blueprint $table) {
		    $table->dropForeign('level_id');
		    $table->dropForeign('category_id');
	    });

	    Schema::table('hints', function (Blueprint $table) {
		    $table->dropForeign('task_id');
	    });
    }
}
