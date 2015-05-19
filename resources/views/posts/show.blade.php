<!-- /resources/views/posts/show.blade.php -->
@extends('app')
 
@section('content')



	<div class="row">
			<article class="col-md-12">
                
                
                
                
				
				
               
                 
         
                
                
                
                
                
                <header>
					<h1 class="ui dividing header"> {{ $post->name }} </h1>
                    	@unless($post->tags->isEmpty())
					<h6>Tags: 
					
						@foreach($post->tags as $tag)
							 
          
                        <a href="{{ route('tags.show', [$tag->id]) }}">{{ $tag->tag }}</a>
						@endforeach
					</h6>
				@endunless
				</header>
                
              
				
				
				<h3 class="ui header"><a class="author">Hassan</a> <span class="date" style="color: rgb(170, 170, 170); font-size: 0.675em; margin-left: 0.6em;">Today at 3:42PM</span> </h3>
				
				<div class="metadata">
					
				</div>	
				<p>
					{{ $post->content }} 
				</p>
				       
                 <p>
    <a href="{{ route('posts.show', $post->slug) }}">{{ $post->likeCount }} personnes aiment ça</a>
    </p>
                <p>
                     <a href="{{ route('posts.show', $post->slug) }}">{{ $post->getNumCommentsStr() }}</a>
    
                          </p>
				  
	
				
				
         @if(Auth::check())
                @if($post->liked(Auth::user()->id))
                <p><a href="{{ route('postunlike', [$post->slug]) }}">Je n’aime plus</a></p>
                @else
                <div class="ui green submit icon button">
					<img src="img/like.png" style="margin: -6px 6px -6px -6px;"></img><a href="{{ route('postlike', [$post->slug]) }}">J’aime</a>
				</div>
        
                @endif
                @endif

	  
			<!-- comment -->	
				<div class="ui comments">
  <h3 class="ui dividing header">commentaires</h3>
                    @if (count($post->comments) === 0)
      <p>Pas encore de commentaires !</p>
    @else
      @foreach ($post->comments as $comment)
  <div class="comment">
    <a class="avatar">
      <img src="img/phprofil.png">
    </a>
    <div class="content">
      <a class="author">{{ $comment->user->name }}</a>
      <div class="metadata">
        <span class="date">Yesterday at 12:30AM</span>
      </div>
      <div class="text">
        <p>{{ $comment->body }}</p>
      </div>
  
    </div>

  </div>
                    @endforeach
    @endif

 
                  <section>
    <h3 class="title">Laisser un commentaire : </h3>
         
    {!! Form::open(array('route' => ['posts.comment.store', $post->slug], 'class' => 'form')) !!}
       
        @include('posts/partials/_formC', ['submit_text' => 'commenter'])
    {!! Form::close() !!}
     
  </section>
</div> 
        
        
        
     
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                

			

			</article>
	</div>




@endsection








