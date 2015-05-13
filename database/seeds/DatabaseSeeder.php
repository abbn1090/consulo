<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use  App\User, App\Post, App\Tag, App\PostTag, App\Comment;
use App\Services\LoremIpsumGenerator;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$lipsum = new LoremIpsumGenerator;


		User::create([
			'name' => 'GreatAdmin',
			'email' => 'admin1@la.fr',
			'password' => Hash::make('admin'),
			
		]);

		User::create([
			'name' => 'GreatRedactor',
			'email' => 'redac1@la.fr',
			'password' => Hash::make('redac'),
			
			
			
		]);

		User::create([
			'name' => 'Walker',
			'email' => 'walker1@la.fr',
			'password' => Hash::make('walker'),
			
		]);

		User::create([
			'name' => 'Slacker',
			'email' => 'slacker1@la.fr',
			'password' => Hash::make('slacker'),
			
		]);





		Tag::create([
			'tag' => 'Tag1'
		]);

		Tag::create([
			'tag' => 'Tag2'
		]);



		Post::create([
           
			'slug' => 'post-1', 
            'name' => 'post 1',
			'content' => $lipsum->getContent(500), 
			'user_id' => 1,
            
            
		]);



		Post::create([
            
			'slug' => 'post-3', 
            'name' => 'post 3',
			'content' => $lipsum->getContent(500), 
			'user_id' => 1,
            
		]);


		PostTag::create([
			'post_id' => 1,
			'tag_id' => 1
		]);

		PostTag::create([
			'post_id' => 2,
			'tag_id' => 1
		]);


		

	


		Comment::create([
			'content' => $lipsum->getContent(200), 
			'user_id' => 1,
			'post_id' => 1
		]);

		Comment::create([
			'content' => $lipsum->getContent(200), 
			'user_id' => 1,
			'post_id' => 1
		]);

	

	}

}
