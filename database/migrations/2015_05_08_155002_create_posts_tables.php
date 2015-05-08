<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    
    	public function up()
	{
		Schema::create('posts', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('slug', 255)->unique();
			$table->text('content');
            $table->integer('ups_number')->unsigned();
            $table->integer('down_number')->unsigned();
            $table->integer('comment_number')->unsigned();
			$table->integer('user_id')->unsigned();
		});

		Schema::table('posts', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}
    
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('posts', function(Blueprint $table) {
			$table->dropForeign('posts_user_id_foreign');
		});		

		Schema::drop('posts');
	}

}
