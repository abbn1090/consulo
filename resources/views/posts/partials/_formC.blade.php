

<div class="form-group">
    <p>{!! Form::label('body', 'comment:') !!}
    </p>
    {!! Form::textarea('body') !!}

    </div>



<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>


