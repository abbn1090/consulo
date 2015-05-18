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
							 
          
                        <a href="{{ route('tags.show', [$tag->id]) }}">{{ $tag->tag }}</a>
						@endforeach
					</h6>
				@endunless
				</header>
				{{ $post->content }} 
                @if(Auth::check())
                @if($post->liked(Auth::user()->id))
                <p><a href="{{ route('postunlike', [$post->slug]) }}">Je n’aime plus</a></p>
                @else
                <p><a href="{{ route('postlike', [$post->slug]) }}">J’aime</a></p>
                @endif
                @endif
                 
                
                 <p>
    <a href="{{ route('posts.show', $post->slug) }}">{{ $post->likeCount }} personnes aiment ça</a>
    </p>
                <p>
                     <a href="{{ route('posts.show', $post->slug) }}">{{ $post->getNumCommentsStr() }}</a>
    
                          </p>

			
<section id="comments">
    @if (count($post->comments) === 0)
      <p>Pas encore de commentaires !</p>
    @else
      @foreach ($post->comments as $comment)
        <div class="comment">
          <p><strong>{{ $comment->user->name }} :</strong></p>
          <blockquote>{{ $comment->body }}</blockquote>
        </div>
      @endforeach
    @endif
</section>
                
                  <section>
    <h3 class="title">Laisser un commentaire : </h3>
         
    {!! Form::open(array('route' => ['posts.comment.store', $post->slug], 'class' => 'form')) !!}
       
        @include('posts/partials/_formC', ['submit_text' => 'commenter'])
    {!! Form::close() !!}
     
  </section>
			</article>
	</div>




@endsection


