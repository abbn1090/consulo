<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8" />
  <title>Consulo</title>
 
  <link href="{{ asset('Semantic/dist/semantic.css') }}" rel="stylesheet">



  
  <style type="text/css">
	body{
		background: none repeat scroll 0% 0% #F7F7F7;
	}
	
	
	.main.container {
    background-color: #FFF;
    margin: 0em auto;
    box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.05);
    border: 1px solid #DDD;
    padding: 2em 2em 7em;
    z-index: 1;
}	
	
	.wd{
		max-width: 1000px;
	}
	
  </style>
 
</head>
<body>


    <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
    
    <script src="{{ URL::asset('Semantic/dist/jquery.js') }}" type="text/javascript"></script> 
    <script src="{{ URL::asset('js/sc.js') }}" type="text/javascript"></script> 
    <script src="{{ URL::asset('Semantic/dist/semantic.js') }}" type="text/javascript"></script>

  
	
<div class="ui tiered nav menu" style="margin-top: 0px;" >	  
		<a class="ui" style="" href="/"><img src="{{ asset('img/logo_header.png') }}"></img></a>
		
		<div class="right item">
            
            @if (Auth::guest())
                <a href="{{ url('/auth/register') }}" class="large ui button blue" style="margin-left:      1em;">Inscription</a>
                <a href="{{ url('/auth/login') }}" class="large ui button green" style="margin-left: 1em;">Connexion</a>
            @else
                        
                <a href="#" class="large ui button blue" style="margin-left: 1em;">{{ Auth::user()->name }}</a>
                <a href="{{ url('/auth/logout') }}" class="large ui button green" style="margin-left: 1em;">se déconnecter</a>
            			
            @endif
                    
        </div>
	</div>

	
	
	



	
	<div class="ui stackable responsive grid">
	
	<div class="row">

		
		
		<div class="three wide column" style="margin-top: -1rem;">
				
			<div class="column panel">
				
				
                   @foreach( $tags as $key => $tag ) 
                        @if ($key == 0)
                            <div id="list_tags" class="ui blue top inverted attached segment">
                            <a href="{{ route('tags.show', [$tag->id]) }}" style="color: white">{{ $tag->tag }}</a>
                            </div>
                        @elseif ($key+1 == count($tags))
                        <div id="list_tags" class="ui bottom attached segment">
                            <a href="{{ route('tags.show', [$tag->id]) }}" style="color: black">{{ $tag->tag }}</a>
                        </div>
                
                        @else
                        <div id="list_tags" class="ui attached segment">
                            <a href="{{ route('tags.show', [$tag->id]) }}" style="color: black">{{ $tag->tag }}</a>
                        </div>
                        @endif
				    @endforeach
				
				
			
                    
              </div>
		
			
			
			
		</div>
			<div class="thirteen wide column">
		<div id="main">
					
			
			
			<!-- -->
			
			
			
			
			
			
			
			
                
              
			
				       
                 
				  
	
				
				
         
			
			
			
			
			
			
			
			
			

				<div class="main container">
					<h1 class="ui dividing header"> {{ $post->name }} </h1>
				
				
				<h3 class="ui header"><a class="author">Hassan</a> <span class="date" style="color: rgb(170, 170, 170); font-size: 0.675em; margin-left: 0.6em;">Today at 3:42PM</span> </h3>
				  <header>
					
                    	@unless($post->tags->isEmpty())
					<h6>Tags: 
					
						@foreach($post->tags as $tag)
							 
          
                        <a href="{{ route('tags.show', [$tag->id]) }}">{{ $tag->tag }}</a>
						@endforeach
					</h6>
				@endunless
				</header>
				
				<div class="metadata">
					
				</div>	
				<p>
					{{ $post->content }}
				</p>
				<p><a href="#">{{ $post->likeCount }} personnes aiment ça</a></p>
                <p><a href="#">{{ $post->getNumCommentsStr() }}</a></p>
				  
	
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
		<img src="{{ asset('img/phprofil.png') }}"></img>
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
</div>	
 
                  <section>
					  
					
  </br>
  
    <h3 class="ui dividing header">Laisser un commentaire : </h3>
         
    {!! Form::open(array('route' => ['posts.comment.store', $post->slug], 'class' => 'form')) !!}
       
        @include('posts/partials/_formC', ['submit_text' => 'commenter'])
    {!! Form::close() !!}
     
  </section>
</div> 
			
			
			
			
			
				</div>
				

				
			<!-- -->
		</div>
			
			
			
		</div>

  </div>
	
  </div>	
  
  

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
<!-- <div class="ui inverted footer vertical segment center">kkk</div> -->
<div class="ui inverted black footer vertical segment">
  <div class="ui container">
    <div class="ui stackable relaxed grid">
      <div class="eight wide column">
        <h3 class="ui inverted header">Consulo.ma</h3>
        <p>Consulo bla blaaa blaa blaaaaaa lkjks mlks khsq jhqdhk kjhsqjh kjhqdj kjhDQKJHS KJHDSQKJHDS KHSQJHS.</p>
		<!--
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
          <button type="submit" class="ui teal button">Donate Today</button>
        </form>
		-->
      </div>
      <div class="four wide right aligned column">
        <h5 class="ui blue inverted header">Chi7aja</h5>
        <div class="ui inverted link list">
          <a class="item" href="#" target="_blank">one</a>
          <a class="item" href="#" target="_blank">jojat</a>
          <a class="item" href="/cla.html" target="_blank">nnn</a>
          <a class="disabled item">Myiu</a>
        </div>
      </div>
      <div class="four wide right aligned column">
        <h5 class="ui blue inverted header">Chi7aja okhra</h5>
        <div class="ui inverted link list">
          <a class="item" href="#">1dlkj</a>
          <a class="item" href="#">ljhkhsdl</a>
          <a class="disabled item">lkjsdf</a>
          <a class="disabled item">lkjldksj</a>
        </div>
      </div>
    </div>
  </div>
</div>	

	

	
</body>
</html>