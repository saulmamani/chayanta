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
                   {!! Form::model($comunicado, ['route' => ['comunicados.update', $comunicado->id], 'method' => 'patch']) !!}

                        @include('comunicados.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection