@extends('app')
 
@section('content')
    <h2>posts</h2>

    @if ( !$posts->count() )
        You have no posts
    @else
        <ul>
            @foreach( $posts as $post )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('posts.destroy', $post->slug))) !!}
                        <a href="{{ route('posts.show', $post->slug) }}">{{ $post->name }}</a>
                      
                    
                    {!! link_to_route('posts.edit', 'Edit', array($post->slug), array('class' => '')) !!}
                    {!! link_to_route('posts.edit', 'Edit', array($post->slug), array('class' => '')) !!}
                            {!! Form::submit('Delete', array('class' => '')) !!}
                        
                    {!! Form::close() !!}
                      <footer class="text-muted">
    <p>Posted {{ $post->created_at->diffForHumans() }}</p>
    <p><a href="{{ route('posts.show', $post->slug) }}">{{ $post->getNumCommentsStr() }}</a></p>
    <p><a href="{{ route('posts.show', $post->slug) }}">{{ $post->likeCount }}</a>likes</p>
  </footer>
                </li>
            @endforeach
        </ul>
    @endif
 
    <p>
        {!! link_to_route('posts.create', 'Create Post') !!}
    </p>
@endsection


