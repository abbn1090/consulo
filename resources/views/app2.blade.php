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
<script src="{{ asset('Semantic/dist/jquery.js') }}" type="text/javascript"></script> 
    <script src="{{ asset('js/sc.js') }}" type="text/javascript"></script> 
    <script src="{{ asset('Semantic/dist/semantic.js') }}" type="text/javascript"></script> 

	
	
	
	
	
  <script type="text/javascript">
 
  </script>
  
	<div class="ui tiered nav menu" style="margin-top: 0px;" >
	  
		<a class="ui" style="" href="/"><img src="{{ asset('img/logo_header.png') }}"></img></a>
	<!--	<a class="ui item" href="/semantic-ui-themes">menu01</a>
		<a class="ui item" href="/semantic-ui-snippets">menu02</a>
		<a class="ui item" href="/semantic-ui-snippets">menu03</a>
	-->
		
    
    
    
    
		
		<div class="right item">
            
            @if (Auth::guest())
            <a href="{{ url('/auth/register') }}" class="large ui button blue" style="margin-left: 1em;">Inscription</a>
            <a href="{{ url('/auth/login') }}" class="large ui button green" style="margin-left: 1em;">Connexion</a>
					@else
            
            
            <a href="#" class="large ui button blue" style="margin-left: 1em;">{{ Auth::user()->name }}</a>
            <a href="{{ url('/auth/logout') }}" class="large ui button green" style="margin-left: 1em;">se déconnecter</a>
            
						
					@endif
            
            
		</div>
	</div>


	
	<div class="ui stackable responsive grid">
	
	<div class="row">

		
		
		

        
	@yield('content')
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

</table> 
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>






