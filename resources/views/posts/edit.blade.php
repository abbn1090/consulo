<!-- /resources/views/posts/edit.blade.php -->
@extends('app')
 
@section('content')
    <h2>Edit post</h2>
 
    {!! Form::model($post, ['method' => 'PATCH', 'route' => ['posts.update', $post->slug]]) !!}
        @include('posts/partials/_form', ['submit_text' => 'Edit post'])
    {!! Form::close() !!}
@endsection