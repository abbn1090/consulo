<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::model('posts', 'Post');
Route::model('tags', 'Tag');
Route::model('comments', 'Comment');

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');


Route::bind('tags',function($value, $route) {
        return App\Tag::whereSlug($value)->first();
});

Route::bind('posts',function($value, $route) {
        return App\Post::whereSlug($value)->first();
});

Route::bind('comments',function($value, $route) {
        return App\Comment::whereSlug($value)->first();
});

Route::resource('tags','TagsController');

Route::resource('posts','PostsController');

Route::resource('comment','PostsController');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);