
<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8" />
  <title>Consulo</title>
 <link href="{{{ asset('/Semantic/dist/semantic.css') }}}" rel="stylesheet">
 


  
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

<script src="Semantic/dist/jquery.js"></script>
  <script src="js/sc.js"></script>
  <script src="Semantic/dist/semantic.js"></script>
	
	
	
	
	
  <script type="text/javascript">
 
  </script>
  
	<div class="ui tiered nav menu" style="margin-top: 0px;" >
	  
		<a class="ui" style="" href="/consulo"><img src="img/logo_header.png"></img></a>
	<!--	<a class="ui item" href="/semantic-ui-themes">menu01</a>
		<a class="ui item" href="/semantic-ui-snippets">menu02</a>
		<a class="ui item" href="/semantic-ui-snippets">menu03</a>
	-->
		
		
		<div class="right item">
            
            @if (Auth::guest())
            <a href="{{ url('/auth/register') }}" class="large ui button blue" style="margin-left: 1em;">Inscription</a>
            <a href="{{ url('/auth/login') }}" class="large ui button green" style="margin-left: 1em;">Connexion</a>
						<li><a href="{{ url('/auth/register') }}">Inscription</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">se déconnecter</a></li>
							</ul>
						</li>
					@endif
            
            
            
			<a class="large ui button blue" style="margin-left: 1em;">Inscrivez-vous</a>
			<a class="large ui button green" style="margin-left: 1em;">Connecter</a>
		</div>
	</div>

	
	
    
    
    
    
    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">Home</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Connexion</a></li>
						<li><a href="{{ url('/auth/register') }}">Inscription</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">se déconnecter</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
	



	
	<div class="ui stackable responsive grid">
	
	<div class="row">

		<div class="three wide column" style="margin-top: -1rem;">
				
			<div class="column panel">
				<div id="list_tags" class="ui blue top inverted attached segment">
					<p>Informatique</p>
				</div>
				<div id="list_tags" class="ui attached segment">
					<p>math</p>
				</div>
				<div id="list_tags" class="ui attached segment">
					<p>ing</p>
				</div>
				<div id="list_tags" class="ui attached segment" onclick="changeClass()">
					<p>Physique</p>
				</div>
				<div id="list_tags" class="ui attached segment">
					 <p>Chimie</p>
				</div>
				<div id="list_tags" class="ui attached segment">
					<p>Ingenieurie</p>
				</div>
				<div id="list_tags" class="ui attached segment">
					<p>Maths</p>
				</div>
				<div id="list_tags" class="ui attached segment">
					<p>Physique</p>
				</div>
				<div id="list_tags" class="ui bottom attached segment">
					 <p>Chimie</p>
				</div>
			</div>
			
			
		</div>
			<div class="thirteen wide column">
		<div id="main">
					
			
			
			<!-- -->
            
            
            
            
            
            
            







<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">Home</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Connexion</a></li>
						<li><a href="{{ url('/auth/register') }}">Inscription</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">se déconnecter</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
<table style="width:100%">
       
  <tr>
    <th>
        @foreach( $tags as $tag )
    <p><a href="{{ route('tags.show', [$tag->id]) }}">{{ $tag->tag }}</a></p>  
        @endforeach
      
    </th>
    <th>
        
	@yield('content')

         </th>
  </tr>

</table> 
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
