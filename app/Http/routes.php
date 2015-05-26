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






Route::get('/', 'PostsController@index');
Route::get('/home', 'PostsController@index');
//Route::put('/post/{Slug}/like', 'PostsController@like');





route::post('posts/{posts}/comment/{comment}/delete', array(
  'as' => 'deleteComment',
  'uses' => 'CommentsController@destroyComment'
));
route::get('/posts/{posts}/like', array(
  'as' => 'postlike',
  'uses' => 'PostsController@like'
));
route::get('/posts/{posts}/unlike', array(
  'as' => 'postunlike',
  'uses' => 'PostsController@unlike'
));

Route::bind('tags',function($value, $route) {
        return App\Tag::whereId($value)->first();
});

Route::bind('posts',function($value, $route) {
        return App\Post::whereSlug($value)->first();
});

Route::bind('comments',function($value, $route) {
        return App\Comment::whereId($value)->first();
});


Route::resource('tags','TagsController');



Route::resource('posts','PostsController');

Route::resource('posts.comment','CommentsController');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);