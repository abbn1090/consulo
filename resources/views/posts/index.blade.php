

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

	.wd{
		max-width: 1000px;
	}
	
	.ui.button.b_nb{
		padding: 0.7em;
		width: 6em;
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
			
			
							
			
               <div class="ui top attached tabular menu">
            @if(isset($t))
                <a href="{{ route('tags.show', [$t->id]) }}" class="active item" data-tab="first">most recent</a> 
            @else
                <a href="{{ route('posts.index') }}" class="active item" data-tab="first">most recent</a>
            @endif
        
            @if(isset($t))
                <a href="{{ route('poststagbylike', [$t->id]) }}" class="item" data-tab="second">most liked</a>
            @else
                <a href="{{ route('postsbylike') }}" class="item" data-tab="second">most liked</a>
            @endif     

        </div>   
            
            
            
            @include('posts/create')
				
            
            
            <div class="ui bottom attached active tab segment" data-tab="first">

					
					
					
					@if ( !$posts->count() )
            You have no posts
        @else
            
                @foreach( $posts as $post )
					
					
					<div class="ui attached segment">
					<div class="content">
					
						<div class="header" style="display:block;float: left;">
							<div class="ui button b_nb">{{ $post->likeCount }}</br>likes</div>
							<div class="ui button b_nb">{{ $post->getNumCommentsStr() }}</div>
						
						</div>
						
						<div class="header"  style="font-weight: bold; font-size: 1.2em; line-height: 1.33em;">
							
                            <a href="{{ route('posts.show', $post->slug) }}">{{ $post->name }}</a>
						</div>
						
					
					</div>
					<div class="description" style="float: left;background-color: #EEE;padding: 2px;margin: 2px;">Informatique</div>

					
                    <div class="description" style="text-align: right;"><p>Posted {{ $post->created_at->diffForHumans() }}</p></div>
					</div>
					
					@endforeach
            
        @endif	
					
					
					
					
			



					
										
					
					
<!--					<div class="ui inverted blue top attached segment">Consulo howa site li ikhalikom ttab3o chaghaf dyalkom !!!</div>
					<div class="ui bottom attached segment" style="text-align: right;">Par Hassan il y a 5 min</div>
-->					
					
					
				  </div>
				  
				<div class="ui bottom attached tab segment" data-tab="second">
					plus actif
					
					
					
					
				  </div>
				<div class="ui bottom attached tab segment" data-tab="third">
					plus visité
				  </div>
		
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
        <p>Consulo est la plateforme qui va vous aider au cours de votre vie universitaire</p>
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

          <a class="disabled item">Myiu</a>
        </div>
      </div>
      <div class="four wide right aligned column">
        <h5 class="ui blue inverted header">Chi7aja okhra</h5>
        <div class="ui inverted link list">
          <a class="item" href="#">1dlkj</a>
          <a class="item" href="#">ljhkhsdl</a>
        </div>
      </div>
    </div>
  </div>
</div>	

	
</body>
</html>

