<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hints', function (Blueprint $table) {
            $table->increments('id');
	        $table->text('hint');
	        $table->integer('task_id')->unsigned();
	        $table->dateTime('added');
	        $table->boolean('active')->default(false);
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
        Schema::drop('hints');
    }
}
