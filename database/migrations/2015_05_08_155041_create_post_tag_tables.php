<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTagTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    
    	public function up()
	{
		Schema::create('post_tag', function(Blueprint $table) {
			$table->increments('id');
			
			
            
            
            
            $table->integer('post_id')->unsigned()->index();
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade')
                ->onUpdate('cascade');;
            
            

			
            
            $table->integer('tag_id')->unsigned()->index();
            $table->foreign('tag_id')->references('id')->on('tags');

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
		

		Schema::drop('post_tag');
	}

}
