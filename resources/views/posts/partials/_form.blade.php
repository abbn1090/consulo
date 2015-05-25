<!-- /resources/views/projects/partials/_form.blade.php -->

	<div class="form-group">   
			{!! Form::text('name',Input::old('title'),  array('placeholder'=>'title')) !!}
	</div></br>
                
	<div class="form-group">
			{!! Form::textarea('content',Input::old('content'),  array('placeholder'=>'Content','style' => 'height: 90px')) !!}
	</div> </br>
								
 	<div class="form-group">
 		<select id="tag_list" class="ui fluid dropdown" multiple="multiple" name="tag_list[]">
				<option value="">Tags</option>
				@foreach($tags as $tag)
					<option value="{{ $tag->id }}">{{ $tag->tag }}</option>
				@endforeach		
		</select>
	</div></br>

	<div class="form-group">
			{!! Form::submit($submit_text, ['class'=>'ui hover button blue']) !!}
	</div>

	@section('scriptArea')
	<script>
		$("#tag_list").select2({
			placeholder: 'Chose a tag'
		});
	</script>
	@endsection