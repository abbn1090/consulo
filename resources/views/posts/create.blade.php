

<div class="ui attached segment">
						
						<div class="ui form">
							
						  <div class="field">
                              
                                  {!! Form::model(new App\Post, ['route' => ['posts.store']]) !!}
        @include('posts/partials/_form', ['submit_text' => 'Create Post'])
    {!! Form::close() !!}
						  
                            
                            
						</div>
						
</div>
					