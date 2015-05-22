<!-- /resources/views/projects/partials/_form.blade.php -->

 	<div class="form-group">   
	 {!! Form::label('name', 'title:') !!}
    {!! Form::text('name') !!}
                </div>
                <div class="form-group">
                    {!! Form::label('slug', 'Slug:') !!}
                    {!! Form::text('slug') !!}
                </div>

                <div class="form-group">
                    {!! Form::label('content', 'Content:') !!}

                    {!! Form::textarea('content') !!}
                </div>

                <!-- Tags Form Input -->

								
 <div class="form-group">
                    <label for="tag_list">Tags:</label>
                    <select id="tag_list" class="ui fluid dropdown" multiple="multiple" name="tag_list[]">
						@foreach($tags as $tag)
							 
          
                        
	<option value="{{ $tag->id }}">{{ $tag->tag }}</option>
						@endforeach
						
	 </select>
                </div>

							<!-- -->
						  



</br>
<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'ui hover button blue']) !!}
</div>
							<!-- -->
						 






@section('scriptArea')
	<script>
		$("#tag_list").select2({
			placeholder: 'Chose a tag'
		});
	</script>
@endsection