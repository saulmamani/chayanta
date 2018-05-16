@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 id='titulo' class="pull-left">Busqueda de Documentos</h1>

    </section>
    <div class="content">
        <div class="clearfix"></div>

        <p class="alert alert-info">Busqueda de documentos del Centro de Educacion Alternativa CEA Chayanta</p>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
<table class="table table-responsive" id="miTabla">
    <thead>
        <tr>
        <th align="center">Fecha</th>
        <th>Nombre de Documento</th>
        <th>Descripcion</th>
        <th>Estado</th>
        <th>Usuario</th>
        <th>Documento</th>
        </tr>
    </thead>
    <tbody>
    @foreach($documentoInstitucionals as $row)
        <tr>
            <td align="center">{!! $row->fecha !!}</td>
            <td>{!! $row->nombre !!}</td>
            <td>{!! $row->descripcion !!}</td>
            <td>{!! $row->estado !!}</td>
            <td><strong>Usuario: {!! $row->user->email !!} [ {{ $row->user->name }} ]</strong></td>
            <td><a class="btn-sm btn-success" href="{!! route('documentoInstitucionals.show', [$row->id]) !!}"}}">Descargar</a></td>
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
    var table = $('#miTabla').DataTable({
        "columnDefs": [
            { "visible": false, "targets": 4 }
        ],
        "order": [[ 4, 'asc' ]],
        "displayLength": 25,
        "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;
 
            api.column(4, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    $(rows).eq( i ).before(
                        '<tr class="group"><td colspan="5">'+group+'</td></tr>'
                    );
 
                    last = group;
                }
            } );
        }
    } );
});
</script>
@endsection
