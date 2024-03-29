<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    
    public function up()
	{
		Schema::create('tags', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('tag', 50)->unique();
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tags');
	}

}
