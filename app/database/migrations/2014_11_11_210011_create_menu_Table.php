<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        //Schema::dropIfExists('menu');
        Schema::create('menu', function($table)
        {
            $table->increments('id');
            $table->integer('cont_id');
            $table->string('title');
            $table->enum('type', ['article', 'category']);

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
		Schema::drop('menu');
	}

}
