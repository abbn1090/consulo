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
			$table->increments('id')->unsigned();;
			$table->timestamps();
            $table->string('name', 255);
			$table->string('slug', 255)->unique();
			$table->text('content');
            $table->integer('ups_number')->unsigned();
            $table->integer('down_number')->unsigned();
            $table->integer('comment_number')->unsigned();
			$table->integer('user_id')->unsigned();
            $table->timestamp('published_at');
            
		});

		Schema::table('posts', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
       /*
            Schema::table('posts', function(Blueprint $table) {
			$table->foreign('tag_id')->references('id')->on('tags')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
        */
	}
    
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		
       
		Schema::drop('posts');
	}

}
