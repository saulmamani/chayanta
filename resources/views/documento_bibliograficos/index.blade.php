@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 id='titulo' class="pull-left">Documento Bibliograficos</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('documentoBibliograficos.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        <a id="rostro" href="{{ asset('rostro1.jpg') }}" alt="" data-lightbox="example-1">imagen</a>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('documento_bibliograficos.table')
            </div>
        </div>
        <div class="text-center">
        
        @include('adminlte-templates::common.paginate', ['records' => $documentoBibliograficos])

        </div>
    </div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
       // alert($("#rostro").html());

    });
</script>
@endsection
