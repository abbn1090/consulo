
	<div class="ui attached segment">
			@if (count($errors) > 0)
		<div id = 'display-success' class="alert alert-danger">
				<strong>Whoops!</strong> Il y a un problème avec votre entrée.<br><br>
		</div>
			@endif


			@if ($errors->any())
        {{ implode('', $errors->all(':message')) }}
			@endif
		
			<div class="ui form">
					<div class="field">
							{!! Form::model(new App\Post, ['route' => ['posts.store']]) !!}
							@include('posts/partials/_form', ['submit_text' => 'Create Post'])
							{!! Form::close() !!}
					</div>
			</div>
	</div>
