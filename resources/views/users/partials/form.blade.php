<div class="form-group">
    {{ Form::label('name', 'Nombre') }}
    {{ Form::text('name',$value=null, ['class'=>'form-control']) }}
</div>

<hr>
<h3>Lista de Roles</h3>

<div class="form-group">
    <ul class="list-unstyled">
        @foreach ($roles as $role)
            <li>
                <label>
                    {{ Form::checkbox('rooles[]',$role->id) }}
                    {{ $role->name}}
                    <em>({{ $role->descritpion ?: 'Sin descripcion'}})</em>
                </label>
            </li>
        @endforeach
    </ul>
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class'=>'btn btn-primary']) }}
</div>