@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Documento Institucional
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding: 20px">
                    <div class="col">
                    @include('documento_institucionals.show_fields')
                    <a href="{!! route('documentoInstitucionals.index') !!}" class="btn btn-default">Back</a>
                    </div>
                    <hr>
                    <div class="col">
                        <iframe src="{{ url('/documentos/'.$documentoInstitucional->url) }}" width="100%" height="600"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
