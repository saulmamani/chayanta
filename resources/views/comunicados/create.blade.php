@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Comunicado
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'comunicados.store']) !!}

                        @include('comunicados.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script type="text/javascript">
    CKEDITOR.replace( 'contenido' );
</script>
@endsection
