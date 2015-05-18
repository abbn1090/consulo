
    {!! Form::model(new App\Post, ['route' => ['posts.store']]) !!}
        @include('posts/partials/_form', ['submit_text' => 'Create Post'])
    {!! Form::close() !!}
