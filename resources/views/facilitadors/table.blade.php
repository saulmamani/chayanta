<table class="table table-responsive" id="facilitadors-table">
    <thead>
        <tr>
        <th>Codigo RDA</th>
        <th>Ci</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Genero</th>
        <th>Celular</th>
        <th>Profesion</th>
        <th>Carrera</th>
        <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($facilitadors as $facilitador)
        <tr>
            <td>{!! $facilitador->codigoRDA !!}</td>
            <td>{!! $facilitador->ci !!}</td>
            <td>{!! $facilitador->nombre !!}</td>
            <td>{!! $facilitador->apellido !!}</td>
            <td>{!! $facilitador->genero !!}</td>
            <td>{!! $facilitador->celular !!}</td>
            <td>{!! $facilitador->Profesion !!}</td>
            <td>{{  $facilitador->Carrera->nombre }}</td>
            <td>
                {!! Form::open(['route' => ['facilitadors.destroy', $facilitador->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('facilitadors.show', [$facilitador->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('facilitadors.edit', [$facilitador->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>