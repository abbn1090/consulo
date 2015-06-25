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

	#display-success {
    display:none;
    color:red;
	}



.images{
	float: left;
}

.floating{
	animation-name: floating;
	-webkit-animation-name: floating;

	animation-duration: 2.5s;
	-webkit-animation-duration: 2.5s;

	animation-iteration-count: infinite;
	-webkit-animation-iteration-count: infinite;
}

@keyframes floating {
	0% {
		transform: translateX(0%);
	}
	50% {
		transform: translateX(9%);
	}
	100% {
		transform: translateX(0%);
	}
}

@-webkit-keyframes floating {
	0% {
		-webkit-transform: translateX(0%);
	}
	50% {
		-webkit-transform: translateX(9%);
	}
	100% {
		-webkit-transform: translateX(0%);
	}
}


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


        <div class="ui top attached tabular menu">



          @if(isset($sort)&&($sort === "populaire"))

          <?php $first1 = ""; ?>
          <?php $second2 = "active"; ?>
          @else
           <?php $first1 = "active"; ?>
           <?php $second2 = ""; ?>
         @endif
        <a href="#" class="{{$first1}} item" id="first" data-tab="first">récent</a>
        <a href="#" class="{{$second2}} item" id="second" data-tab="second">populaire</a>
        </div>


            	<div id="firstdiv" class="ui bottom attached {{$first1}} tab segment" data-tab="first">
				@if(isset($t))
        			<div id="tag" style="display: none;">{{$t->tag}}</div>
        		@endif
				@if (!Auth::guest())
				<div>@include('posts/create')</div>
				@else



	<div style="background-color: #29abe2; margin: -14px -14px 14px;">
	<div style="text-align: center; display: block; width: 500px; margin: auto; padding: 30px 0px 0px;">
		<div class="images"><img  src="{{ asset('img/images_bare/bare_01.png') }}"></img></div>
		<div class="images"><img class="floating" src="{{ asset('img/images_bare/bare_02.png') }}"></img></div>
		<div class="images"><img src="{{ asset('img/images_bare/bare_03.png') }}"></img></div>
		<div class="images"><img class="floating" src="{{ asset('img/images_bare/bare_04.png') }}"></img></div>
		<div class="images"><img src="{{ asset('img/images_bare/bare_05.png') }}"></img></div>
		<div style="clear: both;font-size: 24px;">	</div>
	</div>

	<div style="text-align: center; display: block; width: 500px; margin: auto; padding: 10px 0px 30px;">
		<div class="images"><a href="{{ url('/auth/register') }}" class=" ui button white" style="margin-left: -14px;">Inscrivez-vous</a></div>
		<div class="images"><a href="{{ url('/auth/login') }}" class=" ui button white" style="margin-left: 82px;">Postez</a></div>
		<div class="images"><a href="{{ url('/auth/login') }}" class=" ui button white" style="margin-left: 100px;">Partagez</a></div>

		<div style="clear: both;font-size: 24px;"></div>
	</div>

	</div>






				@endif

				@if ( !$posts->count() )
        Woops, Il n'y a pas de posts
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
						@foreach($post->tags as $tag)
							<div class="description" style="float: left;background-color: #EEE;padding: 2px;margin: 2px;">{{ $tag->tag }}</div>
						@endforeach
						<div class="description" style="text-align: right;"><p> {{ $post->created_at->diffForHumans() }} par {{ $post->user->name }} </p></div>
						</div>

					@endforeach

				@endif
				</div>

				<div id="seconddiv" class="ui bottom attached tab segment" data-tab="second">

					@if ( !$postslike->count() )
          Woops, Il n'y a pas de posts
					@else
						@foreach( $postslike as $postl )
							<div class="ui attached segment">
								<div class="content">
									<div class="header" style="display:block;float: left;">
										<div class="ui button b_nb">{{ $postl->likeCount }}</br>likes</div>
										<div class="ui button b_nb">{{ $postl->getNumCommentsStr() }}</div>
									</div>
									<div class="header"  style="font-weight: bold; font-size: 1.2em; line-height: 1.33em;">
										<a href="{{ route('posts.show', $postl->slug) }}">{{ $postl->name }}</a>
									</div>
								</div>
								@foreach($postl->tags as $tag)
									<div class="description" style="float: left;background-color: #EEE;padding: 2px;margin: 2px;">{{ $tag->tag }}</div>
								@endforeach
								<div class="description" style="text-align: right;"><p> {{ $postl->created_at->diffForHumans() }} par {{ $postl->user->name }} </p></div>
							</div>
						@endforeach

            <div class="ui attached segment">
        @if(!isset($page))
        <?php $page = 1; ?>
        @endif


            @if($page != 1)
              <?php
            $pageB = $page-1;
            echo '<a href="?page='.$pageB.'" class="large ui button blue" style="margin-left: 1em;">précédent</a>';
            ?>
            @endif

            @if ( !$posts->count() )

            <?php
            $pageN = $page+1;

            echo '<a href="?page='.$pageN.'" class="large ui button blue" style="margin-left: 1em;">suivant</a>';
            ?>
            @endif

          </div>


            @endif
            </div>





			</div>
		</div>









  </div>



  </div>

<!-- <div class="ui inverted footer vertical segment center">kkk</div> -->
@include('posts/partials/_footer')

	<script>



</script>
</body>
</html>
