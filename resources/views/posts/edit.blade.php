<!-- /resources/views/posts/edit.blade.php -->

    









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
					
					<div class="ui attached segment">
						@if (count($errors) > 0)
						<div id = 'display-success' class="alert alert-danger">
                            <strong>Whoops!</strong> Il y a un problème avec votre entrée.<br><br>							
						</div>
					
            			@endif
	
						<div class="ui form">
							
						  <div class="field">
                              
                                 <h2>Edit post</h2>
 
    {!! Form::model($post, ['method' => 'PATCH', 'route' => ['posts.update', $post->slug]]) !!}
        @include('posts/partials/_form', ['submit_text' => 'Edit post'])
    {!! Form::close() !!}
                            
                            
						</div>
						
</div>
</div>
		

					
					
					

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