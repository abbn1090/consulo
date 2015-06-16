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
	.btn {
  background: #e81717;
  background-image: -webkit-linear-gradient(top, #e81717, #b82b40);
  background-image: -moz-linear-gradient(top, #e81717, #b82b40);
  background-image: -ms-linear-gradient(top, #e81717, #b82b40);
  background-image: -o-linear-gradient(top, #e81717, #b82b40);
  background-image: linear-gradient(to bottom, #e81717, #b82b40);
  -webkit-border-radius: 8;
  -moz-border-radius: 8;
  border-radius: 0px;
  font-family: Arial;
  color: #ffffff;
  font-size: 15px;
  padding: 2px 4px 2px 4px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
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
					<h1 class="ui  header"> {{ $post->name }} </h1>
           <h3 class="ui dividing header"><span class="date" style="color: rgb(170, 170, 170); font-size: 0.675em; margin-left: 0.6em;">{{ $post->created_at->diffForHumans() }} par {{ $post->user->name }}
           @unless($post->tags->isEmpty())


              @foreach($post->tags as $tag)
              <div class="description" style="float: left;background-color: #EEE;padding: 2px;margin: 2px;">
                    <a href="{{ route('tags.show', [$tag->tag]) }}">{{ $tag->tag }}</a>
              </div>
              @endforeach
              </span>

              @endunless



           </h3>





					<p>
						{{ $post->content }}
					</p>

          <div class="header" style="display:block;float: left;">
                    <div class="ui button b_nb">{{ $post->likeCount }} likes</div>
                    <div class="ui button b_nb">{{ $post->getNumCommentsStr() }}</div>
          </div>



          <p>

					@if(Auth::check())

<table>
  <tr>
                  <td>  @if($post->liked(Auth::user()->id))
                    <div class="ui brown submit icon button">
              <img src="{{ asset('img/like.png') }}" style="margin: -9px -7px -6px -9px;"></img><a href="{{ route('postunlike', [$post->slug]) }}">Je n’aime plus</a>
        </div>

                    @else
                      <div class="ui blue submit icon button">
              <img src="{{ asset('img/like.png') }}" style="margin: -9px -7px -6px -9px;"></img><a style ="color: #F8F8F8;"href="{{ route('postlike', [$post->slug]) }}">J’aime</a>
        </div>

                    @endif
                  </td>
                      <td>
                    @if(Auth::check() && Auth::user()->id == $post->user->id)

                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('posts.destroy', $post->slug))) !!}
                      {!! link_to_route('posts.edit', 'Modifier', array($post->slug), array('class' => 'ui hover button green')) !!}
                        {!! Form::submit('Supprimer', array('class' => 'ui hover button red')) !!}
                      {!! Form::close() !!}
                    @endif
                  </td>
                  </tr>
                  </table>
          @else
        </br>

          @endif


          </p>

			<!-- comment -->
					<div class="ui comments">
<section>


               {!! Form::open(array('route' => ['posts.comment.store', $post->slug], 'class' => 'form')) !!}
                @include('posts/partials/_formC', ['submit_text' => 'commenter'])
               {!! Form::close() !!}

            </section>


                    	@if (count($post->comments) === 0)

						@else
							@foreach ($post->comments as $comment)
  								<div class="comment">
										<a class="avatar">
											<img src="{{ asset('img/phprofil.png') }}"></img>
										</a>
										<div class="content">
										  <a class="author">{{ $comment->user->name }}</a>
										  <div class="metadata">
											<span class="date">{{ $comment->created_at->diffForHumans() }}</span>

                      @if(Auth::check() && Auth::user()->id == $comment->user->id)
                      {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('posts.comment.destroy', $post->slug,$comment->id))) !!}

                        <input class="btn"  value="x" type="submit">
                        {!! Form::close() !!}
                      @endif
										  </div>
										  <div class="text">
											<p>{{ $comment->body }}</p>


										  </div>

									   </div>

  </div>
                    		@endforeach
    					@endif
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
