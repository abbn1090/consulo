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
			'name' => 'ab1',
			'email' => 'ab1@gmail.com',
			'password' => Hash::make('azerazer'),

		]);


		Tag::create([
			'tag' => 'Générale'
		]);

		Tag::create([
			'tag' => 'Préparation des concours'
		]);

		Tag::create([
			'tag' => 'Commerce, gestion, économie'
		]);

		Tag::create([
			'tag' => 'Droit, politique'
		]);

		Tag::create([
			'tag' => 'Lettres, langues'
		]);

		Tag::create([
			'tag' => 'Humaines et sociales'
		]);

		Tag::create([
			'tag' => 'Sciences et technologies'
		]);

		Tag::create([
			'tag' => 'Santé, soins'
		]);






	}

}
