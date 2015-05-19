
@extends('app')
 
@section('content')

			
        <div class="ui top attached tabular menu">
            @if(isset($t))
                <a href="{{ route('tags.show', [$t->id]) }}" class="active item" data-tab="first">most recent</a> 
            @else
                <a href="{{ route('posts.index') }}" class="active item" data-tab="first">most recent</a>
            @endif
        
            @if(isset($t))
                <a href="{{ route('poststagbylike', [$t->id]) }}" class="item" data-tab="second">most liked</a>
            @else
                <a href="{{ route('postsbylike') }}" class="item" data-tab="second">most liked</a>
            @endif     

        </div>           
            
        @include('posts/create')


        @if ( !$posts->count() )
            You have no posts
        @else
            <ul>
                @foreach( $posts as $post )
                    <div class="ui attached segment">
                        <div class="content">
                            <div class="header" style="display:block;float: left;">
                                <div class="ui button b_nb">{{ $post->getNumCommentsStr() }}</div>
                                <div class="ui button b_nb">{{ $post->likeCount }}</br>likes</div>

                            </div>

                            <div class="header"  style="font-weight: bold; font-size: 1.2em; line-height: 1.33em;">
                                <a href="{{ route('posts.show', $post->slug) }}">{{ $post->name }}</a>
                                @if(Auth::check() && Auth::user()->id == $post->user->id)
                                     {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('posts.destroy', $post->slug))) !!}

                                        {!! link_to_route('posts.edit', 'Edit', array($post->slug), array('class' => '')) !!}
                                        {!! Form::submit('Delete', array('class' => '')) !!}

                                    {!! Form::close() !!}

                                @endif
                            </div>
                        </div>
                        <div class="description" style="float: left;background-color: #EEE;padding: 2px;margin: 2px;">Informatique</div>

                        <div class="description" style="text-align: right;"><p>Posted {{ $post->created_at->diffForHumans() }}</p></div>
                    </div>

                @endforeach
            </ul>
        @endif				
    
   
@endsection


