<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
	        $table->string('title');
	        $table->text('description');
	        $table->text('target');
	        $table->boolean('active')->default(false);
	        $table->integer('level_id')->unsigned();
	        $table->integer('category_id')->unsigned();
	        $table->integer('points')->unsigned();
	        $table->integer('time')->unsigned();
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
        Schema::drop('tasks');
    }
}
