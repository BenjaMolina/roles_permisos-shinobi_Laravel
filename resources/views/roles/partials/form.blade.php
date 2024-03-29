<div class="form-group  {{ $errors->first('name') ? 'has-error' : '' }}">
    {{ Form::label('name', 'Nombre') }}
    {{ Form::text('name',$value=null, ['class'=>'form-control']) }}

    {!! $errors->first('name','<span class="control-label">:message</span>') !!}
</div>
<div class="form-group  {{ $errors->first('slug') ? 'has-error' : '' }}">
    {{ Form::label('slug', 'URL amigable') }}
    {{ Form::text('slug',$value=null, ['class'=>'form-control']) }}

    {!! $errors->first('slug','<span class="control-label">:message</span>') !!}
</div>
<div class="form-group {{ $errors->first('description') ? 'has-error' : '' }}">
    {{ Form::label('description', 'Descripcion') }}
    {{ Form::textarea('description',$value=null, ['class'=>'form-control']) }}

    {!! $errors->first('description','<span class="control-label">:message</span>') !!}
</div>

<hr>
<h3>Permiso especial</h3>
<div class="form-gropu">
    <label>
        {{ Form::radio('special','all-access')}} Acceso Total
    </label>
    <label>
        {{ Form::radio('special','no-access')}} Ningun acceso
    </label>
</div>

<h3>Lista de Permisos</h3>

<div class="form-group">
    <ul class="list-unstyled">
        @foreach ($permissions as $permission)
            <li>
                <label>
                    {{ Form::checkbox('permissions[]',$permission->id) }}
                    {{ $permission->name}}
                    <em>({{ $permission->descritpion ?: 'Sin descripcion'}})</em>
                </label>
            </li>
        @endforeach
    </ul>
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class'=>'btn btn-primary']) }}
</div>