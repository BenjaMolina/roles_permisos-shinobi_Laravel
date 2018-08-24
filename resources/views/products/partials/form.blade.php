<div class="form-group">
    {!! Form::label('name', 'Nombre del producto')!!}
    {!! Form::text('name',$value=null, ['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::label('description', 'descripcion del producto')!!}
    {!! Form::text('description',$value=null, ['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::submit('Guardar', ['class'=>'btn btn-primary'])!!}
</div>