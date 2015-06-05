<div class="column panel">
                   @foreach( $tags as $tag ) 
                        @if (isset($t) and ($tag->tag === $t->tag) )
                            <div id="list_tags" class="ui blue top inverted attached segment">
                            	<a href="{{ route('tags.show', [$tag->id]) }}" style="color: white">{{ $tag->tag }}</a>
                            </div>
                        @else
                        <div id="list_tags" class="ui attached segment">
                            <a href="{{ route('tags.show', [$tag->id]) }}" style="color: black">{{ $tag->tag }}</a>
                        </div>
                        @endif
				    @endforeach 
</div>