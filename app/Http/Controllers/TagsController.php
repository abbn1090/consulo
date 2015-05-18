<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tag;
use App\Post;

class TagsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

    
    public function index()
	{
		//
       
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Tag $tag)
	{
		//  
        $t = $tag;
        
        $ts = Tag::lists('tag', 'id');
        $posts = $tag->posts->sortByDesc(function($post)
{
    return $post->published_at;
});
        $tags = Tag::all();
        return view('posts.index',compact('posts','tags','t','ts'));
	}
    
    public function indexbylikes(Tag $tag)
	{
		//  
        $t = $tag;
        $ts = Tag::lists('tag', 'id');
        $posts = $tag->posts->sortByDesc(function($post)
{
    return $post->likeCount ;//published_at;
});//::orderBy('published_at', 'asc');;
        $tags = Tag::all();
        return view('posts.index',compact('posts','tags','t','ts'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
