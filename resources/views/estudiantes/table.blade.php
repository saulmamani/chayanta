<table class="table table-responsive" id="estudiantes-table">
    <thead>
        <tr>
        <th>Codigo RUDE</th>
        <th>Ci</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Genero</th>
        <th>Celular</th>
        <th>Anioingreso</th>
        <th>Carrera</th>
        <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($estudiantes as $estudiante)
        <tr>
            <td>{!! $estudiante->codigoRUDE !!}</td>
            <td>{!! $estudiante->ci !!}</td>
            <td>{!! $estudiante->nombre !!}</td>
            <td>{!! $estudiante->apellido !!}</td>
            <td>{!! $estudiante->genero !!}</td>
            <td>{!! $estudiante->celular !!}</td>
            <td>{!! $estudiante->anioIngreso !!}</td>
            <td>{!! $estudiante->carrera->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['estudiantes.destroy', $estudiante->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('estudiantes.show', [$estudiante->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('estudiantes.edit', [$estudiante->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>