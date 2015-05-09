<!-- /resources/views/posts/show.blade.php -->
@extends('app')
 
@section('content')



	<div class="row">
			<article class="col-md-12">
				<header>
					<h1> {{ $post->name }} </h1>
					<a >{{ $post->slug }}</a>
				</header>
				{{ $post->content }} 

				@unless($post->tags->isEmpty())
					<h6>Tags: </h6>
					<ul>
						@foreach($post->tags as $tag)
							<li class="list-inline">{{ $tag->tag }}</li>
						@endforeach
					</ul>
				@endunless
			</article>
	</div>




@endsection


