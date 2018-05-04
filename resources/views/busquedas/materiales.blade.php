@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 id='titulo' class="pull-left">Materiales Bibliograficos</h1>
        <br/>
    </section>

    <div class="content">
        <div class="clearfix"></div>

        <div class="alert alert-info">
            Lista de Materiales Bibliograficos publicados por los facilitadores de tu carrera
        </div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">

<table class="table table-responsive table-bordered" id="mitabla">
    <thead>
        <tr>
        <th align="center">Fecha</th>
        <th>Nombre del Documento</th>
        <th>Descripcion</th>
        <th>Facilitador</th>
        <th>Material</th>
        </tr>
    </thead>
    <tbody>
    @foreach($materiales as $row)
        <tr>
            <td align="center">{!! $row->fecha !!}</td>
            <td>{!! $row->nombre !!}</td>
            <td>{!! $row->descripcion !!}</td>
            <td>
                <strong>Carrera: </strong>{{ $row->nombreCarrera }}</strong> || 
                <strong>Docente: </strong>{{ $row->nombreFacilitador }}
            </td>
            <td><a id="documento" class="btn-sm btn-success" href="{{ route('documentoBibliograficos.show', [$row->id]) }}">Descargar</a></td>
        </tr>
    @endforeach
    </tbody>
</table>

            </div>
        </div>
        <div class="text-center">
        </div>
    </div>
@endsection

@section('scripts')
<script type="text/javascript">
$(document).ready(function() {
    var table = $('#mitabla').DataTable({
        "columnDefs": [
            { "visible": false, "targets": 3 }
        ],
        "order": [[ 3, 'asc' ]],
        "displayLength": 25,
        "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;
 
            api.column(3, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    $(rows).eq( i ).before(
                        '<tr class="group" style="color:#5555AA"><td colspan="5">'+group+'</td></tr>'
                    );
 
                    last = group;
                }
            } );
        }
    } );
 
    // Order by the grouping
    $('#mitabla tbody').on( 'click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if ( currentOrder[0] === 3 && currentOrder[1] === 'asc' ) {
            table.order( [ 3, 'desc' ] ).draw();
        }
        else {
            table.order( [ 3, 'asc' ] ).draw();
        }
    } );
} );
</script>
@endsection
