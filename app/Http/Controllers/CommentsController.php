<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;

use Redirect;





class CommentsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	protected $rules = [
                'body' => ['required'],
		
        ];
    public function __construct(){

		$this->middleware('auth',
			['except' => ['index', 'show']]
		);
	   }
	
	public function index(Post $post)
	{
		//
         return Redirect::route('posts.show', $post->slug);
	
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
	public function store(Request $request, Post $post)
	{
		//
       // $this->validate($request, $this->rules);        
        
	$this->validate($request, $this->rules);    
        
        
      //  $posts = Post::findOrFail($post->id);

        $comment = new Comment();
        $comment->user_id = \Auth::id();
        $comment->body = $request->input('body');
        

        //Auth::user()->
        $post->comments()->save($comment);

        // go back to the post

        return Redirect::route('posts.show', $post->slug);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Post $post)
	{
		//
        return Redirect::route('posts.show', $post->slug);
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
	
	public function destroy(Post $post,$id)
    {
		
		
		Comment::find($id)->delete();
	

        return Redirect::route('posts.show', $post->slug)->with('message', 'post deleted.');
    }

}
