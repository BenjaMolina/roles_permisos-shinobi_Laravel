<div class="form-group  {{ $errors->first('name') ? 'has-error' : '' }}">

    {!! Form::label('name', 'Nombre del producto')!!}
    {!! Form::text('name',$value=null, ['class'=>'form-control'])!!}

    {!! $errors->first('name','<span>:message</span>') !!}
</div>

<div class="form-group {{ $errors->first('description') ? 'has-error' : '' }}">

    {!! Form::label('description', 'descripcion del producto') !!}
    {!! Form::text('description',$value=null, ['class'=>'form-control'])!!}

    {!! $errors->first('description','<span>:message</span>') !!}
</div>

<div class="form-group">
    {!! Form::submit('Guardar', ['class'=>'btn btn-primary'])!!}
</div>