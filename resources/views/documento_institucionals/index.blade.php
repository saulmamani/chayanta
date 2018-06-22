@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Documento Institucionales</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('documentoInstitucionals.create') !!}">Adicionar Nuevo</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                @include('documento_institucionals.formulario_buscador')
                @include('documento_institucionals.table')
            </div>
        </div>
        <div class="text-center">
        
        @include('adminlte-templates::common.paginate', ['records' => $documentoInstitucionals])

        </div>
    </div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $("#documentoInstitucionals-table").DataTable({
            "paging":   false,
            "ordering": false,
            "info":     false,
            "searching":   false,

            "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
        });
    });
</script>
@endsection

