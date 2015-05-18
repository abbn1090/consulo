@extends('app')
 
@section('content')
    <h2>posts</h2>
<div class="tabs">
    <ul class="tab-links">
        
        
          @if(isset($t))
        <p><a href="{{ route('tags.show', [$t->id]) }}">most recent</a></p> 
            
    
        @else
        <p><a href="{{ route('posts.index') }}">most recent</a></p>
        
        @endif
        
        
        
        @if(isset($t))
        <p><a href="{{ route('poststagbylike', [$t->id]) }}">most liked</a></p>
        
    
        @else
        <p><a href="{{ route('postsbylike') }}">most liked</a></p>
        
        @endif
        
        
      
    </ul>


 
      
      
    @if ( !$posts->count() )
        You have no posts
    @else
        <ul>
            
            @foreach( $posts as $post )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('posts.destroy', $post->slug))) !!}
                        <a href="{{ route('posts.show', $post->slug) }}">{{ $post->name }}</a>
                      
                    
                    @if(Auth::check() && Auth::user()->id == $post->user->id)
                    {!! link_to_route('posts.edit', 'Edit', array($post->slug), array('class' => '')) !!}
                            {!! Form::submit('Delete', array('class' => '')) !!}
                        
                    {!! Form::close() !!}
                    
                    @endif
                      <footer class="text-muted">
    <p>Posted {{ $post->created_at->diffForHumans() }}</p>
   <p>
    <a href="{{ route('posts.show', $post->slug) }}">{{ $post->getNumCommentsStr() }}</a>
    <a href="{{ route('posts.show', $post->slug) }}">{{ $post->likeCount }} likes</a>
                          </p>
    </footer>
                </li>
            @endforeach
        </ul>
    @endif
 
    <p>
        {!! link_to_route('posts.create', 'Create Post') !!}
    </p>
@endsection


  
   
    