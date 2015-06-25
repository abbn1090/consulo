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



    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-64515605-1', 'auto');
    ga('send', 'pageview');

    </script>
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

        <form class="ui form" role="form" method="POST" action="{{ url('/auth/register') }}">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <h4 class="ui dividing header">Inscription</h4>

            <label >Nom</label>

            <input type="text" class="form-control" name="name" value="{{ old('name') }}">

            <label >Addresse E-Mail</label>

            <input type="email" class="form-control" name="email" value="{{ old('email') }}">

            <label>Mot de passe</label>

            <input type="password" class="form-control" name="password">

            <label>Vérifier mot de passe</label>

            <input type="password" class="form-control" name="password_confirmation">

            <label >profession</label>

            <input type="text" class="form-control" name="profession" value="{{ old('profession') }}">

            <div style="margin-top: 1em;">

                <button type="submit" class="large ui button green">S'inscrire</button>

            </div>

        </form>

    </div>



</body>
</html>
