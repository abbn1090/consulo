<!-- /resources/views/posts/show.blade.php -->
@extends('app')
 
@section('content')



	<div class="row">
			<article class="col-md-12">
				<header>
					<h1> {{ $post->name }} </h1>
                    	@unless($post->tags->isEmpty())
					<h6>Tags: 
					
						@foreach($post->tags as $tag)
							 
          
                        <p><a href="{{ route('tags.show', [tag -> $tag]) }}">{{ $tag->tag }}</a></p>
						@endforeach
					</h6>
				@endunless
				</header>
				{{ $post->content }} 

			
                  <section id="comments">
    <h3 class="title">Comments</h3>
    @if (count($post->comments) === 0)
      <p>No comments yet on this post.</p>
    @else
      @foreach ($post->comments as $comment)
        <div class="comment">
          <p><strong>{{ $comment->user->name }} says...</strong></p>
          <blockquote>{{ $comment->body }}</blockquote>
        </div>
      @endforeach
    @endif
  </section>
			</article>
	</div>




@endsection


