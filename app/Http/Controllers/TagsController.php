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
        $tags = Tag::all();
        $ts = Tag::lists('tag', 'id');
       
		
		
		$postslike =clone $tag->posts->sortByDesc(function($post)
{
    		return $post->likeCount ;//published_at;
});
		$posts = $tag->posts->sortByDesc(function($post)
{
			return $post->created_at;
});
        
        return view('posts.index',compact('posts','postslike','tags','ts'));
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
