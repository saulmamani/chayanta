<table class="table table-responsive" id="documentoBibliograficos-table">
    <thead>
        <tr>
        <th align="center">Fecha</th>
        <th>Nombre del Documento</th>
        <th>Descripcion</th>
        <th>Facilitador</th>
        <th>Carrera</th>
        <th>Url</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($documentoBibliograficos as $documentoBibliografico)
        <tr>
            <td align="center">{!! $documentoBibliografico->fecha->format('d/m/Y') !!}</td>
            <td>{!! $documentoBibliografico->nombre !!}</td>
            <td>{!! $documentoBibliografico->descripcion !!}</td>
            <td>{!! $documentoBibliografico->facilitador->nombre . ' '. $documentoBibliografico->facilitador->apellido !!}</td>
            <td><strong>Carrera: {{ $documentoBibliografico->facilitador->carrera->nombre }}</strong></td>
            <td><a id="documento" class="btn-sm btn-success" href="{{ '/materiales/'.$documentoBibliografico->url }}">Descargar</a></td>
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