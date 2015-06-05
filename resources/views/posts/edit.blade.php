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
			@include('posts/partials/_tag')
		</div>
		<div class="thirteen wide column">
			<div id="main">
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
		</div>
	</div>

  	</div>

<!-- <div class="ui inverted footer vertical segment center">kkk</div> -->
@include('posts/partials/_footer')



</body>
</html>
