@extends('app')
 
@section('content')
    <h2>Create Project</h2>
 
    {!! Form::model(new App\Post, ['route' => ['posts.store']]) !!}
        @include('posts/partials/_form', ['submit_text' => 'Create Post'])
    {!! Form::close() !!}
@endsection