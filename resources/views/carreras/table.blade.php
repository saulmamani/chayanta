<table class="table table-responsive" id="carreras-table">
    <thead>
        <tr>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Area</th>
        <th>Tiempo</th>
        <th>Plan de estudios</th>
        <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($carreras as $carrera)
        <tr>
            <td>{!! $carrera->nombre !!}</td>
            <td>{!! $carrera->descripcion !!}</td>
            <td>{!! $carrera->area !!}</td>
            <td>{!! $carrera->tiempo !!}</td>
            <td><a class="btn-sm btn-success" target="_black" href="{{ $carrera->ruta }}">Descargar</a></td>
            <td>
                {!! Form::open(['route' => ['carreras.destroy', $carrera->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('carreras.show', [$carrera->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('carreras.edit', [$carrera->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>