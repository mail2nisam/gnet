<div class="form-group">
    {!! Form::label('Name',null,['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name',old('name'),['class'=>'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('E-Mail Address',null,['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::email('email',old('email'),['class'=>'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('Password',null,['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::password('password',['class'=>'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('Confirm Password',null,['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::password('password_confirmation',['class'=>'form-control']) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::submit($submitButtonText,['class'=>'btn btn-promary']) !!}
    </div>
</div>