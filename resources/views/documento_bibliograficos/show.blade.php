@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Documento Bibliografico
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding: 20px">
                    <div class="col">
                        @include('documento_bibliograficos.show_fields')

                        @if(Auth::user()->rol == "Estudiante")
                        <a href="{!! url('/bibliograficos') !!}" class="btn btn-default">Back</a>
                        @else
                        <a href="{!! route('documentoBibliograficos.index') !!}" class="btn btn-default">Back</a>
                        @endif
                    </div>
                    <hr>
                    <div class="col">
                        <iframe src="{{ url('/materiales/'.$documentoBibliografico->url) }}" width="100%" height="600"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
