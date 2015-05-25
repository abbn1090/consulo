<?php namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Input;
use Redirect;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Laracasts\Flash\Flash;
use Session;

class PostsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    	public function __construct(){

		$this->middleware('auth',
			['except' => ['index', 'show']]
		);
	   }
    protected $rules = [
                'name' => ['required'],
				'content' => ['required'],
		
        ];
	public function index()
	{
		//
        $tags = Tag::all();
        $ts = Tag::lists('tag', 'id');
        $posts = Post::all()->sortByDesc(function($post)
							{
								return $post->created_at;
							});
		$postslike = Post::all()->sortByDesc(function($post)
								{
									return $post->likeCount ;//published_at;
								});
        return view('posts.index',compact('posts','postslike','tags','ts'));
	}
    


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
        $tags = Tag::all();
        $ts = Tag::lists('tag', 'id');
        return view('posts.create', compact('ts','tags'));
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
        $tags =Tag::all();
        return view('posts.show',compact('post','tags'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Post $post)
	{
		//
        
    if (Auth::check() && $post->user_id == Auth::id()) {  
     
    	$tags = Tag::all();
        $ts = Tag::lists('tag', 'id');
		return view('posts.edit', compact('post', 'tags','ts'));
    }else 
        return redirect()->back();//->with('data', ['some kind of data']);
	}



    public function store(Request $request)
    {
        $this->validate($request, $this->rules);        
        
		$posts = new Post($request->all());
        $posts->slug = $posts->name;//$request->input('name');

		Auth::user()->posts()->save($posts);

		$posts->tags()->attach($request->input('tag_list'));
		if(!empty($posts->tags))
			return Redirect::route('posts.show', $posts->slug)->with('message', 'Post created');
		else
			return Redirect::route('posts.index')->with('message', 'please enter tag');
    }
 
    public function update(Post $post, Request $request)
    {
        $posts = Post::where('id', '=', $post->id)->firstOrFail();

		$posts->update($request->all());

		$posts->tags()->sync($request->input('tag_list'));

        return Redirect::route('posts.show', $post->slug)->with('message', 'post updated.');
    }
 
    public function destroy(Post $post)
    {
        $post->delete();

        return Redirect::route('posts.index')->with('message', 'post deleted.');
    }
    
     public function like(Post $post)
    {      
         $post->like(Auth::user()->id);
         $post->save();
         
        return Redirect::route('posts.show', $post->slug);
    }
    public function unlike(Post $post)
    {
               
         $post->unlike(Auth::user()->id);
         $post->save();
         
        return Redirect::route('posts.show', $post->slug);  
    }
    
}
