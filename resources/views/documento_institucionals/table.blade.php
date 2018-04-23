<table class="table table-responsive" id="documentoInstitucionals-table">
    <thead>
        <tr>
            <th>Fecha</th>
        <th>Nombre de Documento</th>
        <th>Descripcion</th>
        <th>Estado</th>
        <th>Usuario</th>
        <th>Url</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($documentoInstitucionals as $documentoInstitucional)
        <tr>
            <td>{!! $documentoInstitucional->fecha !!}</td>
            <td>{!! $documentoInstitucional->nombre !!}</td>
            <td>{!! $documentoInstitucional->descripcion !!}</td>
            <td>{!! $documentoInstitucional->estado !!}</td>
            <td>{!! $documentoInstitucional->user->email !!}</td>
            <td><a class="btn-sm btn-success" target="_black" href="{{ $documentoInstitucional->url }}">Descargar</a></td>
            <td>
                {!! Form::open(['route' => ['documentoInstitucionals.destroy', $documentoInstitucional->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('documentoInstitucionals.show', [$documentoInstitucional->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('documentoInstitucionals.edit', [$documentoInstitucional->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>