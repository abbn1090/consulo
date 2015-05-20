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
	.main.container.cn{
		max-width: 415px;
		background-color: rgb(255, 255, 255);
		padding: 2em;
		border-radius: 8px;
		border: 1px solid #D4D4D5;
		display: block;
		margin:auto;
		margin-top: 6em;
	}
	
  </style>
 
</head>
<body>


    
    <script src="{{ URL::asset('Semantic/dist/jquery.js') }}" type="text/javascript"></script> 
    <script src="{{ URL::asset('js/sc.js') }}" type="text/javascript"></script> 
    <script src="{{ URL::asset('Semantic/dist/semantic.js') }}" type="text/javascript"></script>

	
	
	
	
  <script type="text/javascript">
 
  </script>
  


    <div class="main container cn">

        <a class="ui" style="" href="/"><img src="{{ asset('img/logo_header.png') }}"></img></a>

            @if (count($errors) > 0)
						<div class="alert alert-danger">
                            <strong>Whoops!</strong> Il y a un problème avec votre entrée.<br><br>							
						</div>
            @endif

        <form class="ui form" role="form" method="POST" action="{{ url('/auth/login') }}">
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <h4 class="ui dividing header">Authentification</h4>					

            <label >Addresse E-Mail</label>

            <input type="email" class="form-control" name="email" value="{{ old('email') }}">

            <label>Mot de passe</label>

            <input type="password" class="form-control" name="password">

            <div  style="margin-top: 1em;">

                <button type="submit" class="large ui button green">Connexion</button>

            </div>
            
        </form>
	
    </div>


	
</body>
</html>

