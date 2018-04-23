<table class="table table-responsive" id="comunicados-table">
    <thead>
        <tr>
            <th>Fecha</th>
        <th>Titulo</th>
        <th>Contenido</th>
        <th>Estado</th>
        <th>Usuario quien publico</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($comunicados as $comunicado)
        <tr>
            <td>{!! $comunicado->fecha !!}</td>
            <td>{!! $comunicado->titulo !!}</td>
            <td>{!! $comunicado->contenido !!}</td>
            <td>{!! $comunicado->estado !!}</td>
            <td>{!! $comunicado->user->email !!}</td>
            <td>
                {!! Form::open(['route' => ['comunicados.destroy', $comunicado->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('comunicados.show', [$comunicado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('comunicados.edit', [$comunicado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>