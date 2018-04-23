<table class="table table-responsive" id="documentoBibliograficos-table">
    <thead>
        <tr>
        <th>Fecha</th>
        <th>Nombre del Documento</th>
        <th>Descripcion</th>
        <th>Usuario</th>
        <th>Url</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($documentoBibliograficos as $documentoBibliografico)
        <tr>
            <td>{!! $documentoBibliografico->fecha !!}</td>
            <td>{!! $documentoBibliografico->nombre !!}</td>
            <td>{!! $documentoBibliografico->descripcion !!}</td>
            <td>{!! $documentoBibliografico->user->email !!}</td>
            <td><a class="btn-sm btn-success" target="_black" href="{{ $documentoBibliografico->url }}">Descargar</a></td>
            <td>
                {!! Form::open(['route' => ['documentoBibliograficos.destroy', $documentoBibliografico->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('documentoBibliograficos.show', [$documentoBibliografico->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('documentoBibliograficos.edit', [$documentoBibliografico->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>