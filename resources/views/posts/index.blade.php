
			
			
							
				<div class="ui top attached tabular menu">
					<a class="active item" data-tab="first">plus récent</a>
					<a class="item" data-tab="second">plus actif</a>
				  </div>
				<div class="ui bottom attached active tab segment" data-tab="first">

					<div class="ui attached segment">
						
						<div class="ui form">
							
						  <div class="field">
						  
						    <label>Titre</label>
							<input type="text" placeholder="Titre">
							
							<label>Intervention</label>
							<textarea placeholder="Intervention"></textarea>
							
								
							
							<label>Tags</label>
							<!-- -->
								<select name="skills" multiple="" class="ui fluid dropdown">
								  <option value="">Tags</option>
							  <option value="Informatique">Informatique</option>
								<option value="Maths">Maths</option>
								<option value="Physique">Physique</option>
								<option value="Chimie">Chimie</option>
								<option value="history">history</option>
								<option value="geo">geo</option>

								</select>
							<!-- -->
						  </div>
							
						  <div class="field">
							<div class="menu"><a class="ui hover button blue">publier</a></div>
						  </div>
						</div>
						
					</div>
					
					
					
					
					
					
					
					<div class="ui attached segment">
					<div class="content">
					
						<div class="header" style="display:block;float: left;">
							<div class="ui button b_nb">93</br>votes</div>
							<div class="ui button b_nb">65</br>comments</div>
						
						</div>
						
						<div class="header"  style="font-weight: bold; font-size: 1.2em; line-height: 1.33em;">
							Consulo howa site li ikhalikom ttab3o chaghaf dyalkom !!!
						</div>
						
					
					</div>
					<div class="description" style="float: left;background-color: #EEE;padding: 2px;margin: 2px;">Informatique</div>

					<div class="description" style="text-align: right;">Par Hassan il y a 2 min</div>
					</div>
					
					
					
					
					
					
					
					<div class="ui attached segment">
					<div class="content">
					
						<div class="header" style="display:block;float: left;">
							<div class="ui button b_nb">93</br>votes</div>
							<div class="ui button b_nb">65</br>comments</div>
						
						</div>
						
						<div class="header"  style="font-weight: bold; font-size: 1.2em; line-height: 1.33em;">
							F Consulo imkan likom tfa3lo m3a nass khobara2 !!!
						</div>
						
					
					</div>
					<div class="description" style="float: left;background-color: #EEE;padding: 2px;margin: 2px;">Physique</div>
					<div class="description" style="text-align: right;">Par Hassan il y a 12 min</div>
					</div>	




					
					<div class="ui attached segment">
					<div class="content">
					
						<div class="header" style="display:block;float: left;">
							<div class="ui button b_nb">93</br>votes</div>
							<div class="ui button b_nb" style="padding: 0.7em; width: 6em;">65</br>comments</div>
						
						</div>
						
						<div class="header"  style="font-weight: bold; font-size: 1.2em; line-height: 1.33em;">
							F Consulo imkan likom tfa3lo m3a nass khobara2 !!!
						</div>
						
					
					</div>
					<div class="description" style="float: left;background-color: #EEE;padding: 2px;margin: 2px;">Physique</div>
					<div class="description" style="text-align: right;">Par Hassan il y a 15 min</div>
					</div>						
					
					
<!--					<div class="ui inverted blue top attached segment">Consulo howa site li ikhalikom ttab3o chaghaf dyalkom !!!</div>
					<div class="ui bottom attached segment" style="text-align: right;">Par Hassan il y a 5 min</div>
-->					
					
					
				  </div>
				  
				<div class="ui bottom attached tab segment" data-tab="second">
					plus actif
					
					
					
					
				  </div>
				<div class="ui bottom attached tab segment" data-tab="third">
					plus visité
				  </div>
		
			</div>
			
			
			
		</div>

  </div>
	
  </div>	
  
  

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
<!-- <div class="ui inverted footer vertical segment center">kkk</div> -->
<div class="ui inverted black footer vertical segment">
  <div class="ui container">
    <div class="ui stackable relaxed grid">
      <div class="eight wide column">
        <h3 class="ui inverted header">Consulo.ma</h3>
        <p>Consulo est la plateforme qui va vous aider au cours de votre vie universitaire</p>
		<!--
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
          <button type="submit" class="ui teal button">Donate Today</button>
        </form>
		-->
      </div>
      <div class="four wide right aligned column">
        <h5 class="ui blue inverted header">Chi7aja</h5>
        <div class="ui inverted link list">
          <a class="item" href="#" target="_blank">one</a>

          <a class="disabled item">Myiu</a>
        </div>
      </div>
      <div class="four wide right aligned column">
        <h5 class="ui blue inverted header">Chi7aja okhra</h5>
        <div class="ui inverted link list">
          <a class="item" href="#">1dlkj</a>
          <a class="item" href="#">ljhkhsdl</a>
        </div>
      </div>
    </div>
  </div>
</div>	

	
</body>
</html>
@extends('app')
 
@section('content')
    <h2>posts</h2>


        @include('posts/create')
    


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
 
   
@endsection


  
   
    