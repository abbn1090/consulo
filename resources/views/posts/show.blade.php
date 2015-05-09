<!-- /resources/views/posts/show.blade.php -->
@extends('app')
 
@section('content')
    <h2>{{ $post->slug }}</h2>
    
        <ul>
                <li>
                       {{ $post->name }} 
                    {{ $post->content }}    
                           
                </li>
            
        </ul>
    
 
    <p>
        {!! link_to_route('posts.index', 'Back to posts') !!} 
    </p>
@endsection