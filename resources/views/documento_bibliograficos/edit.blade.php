@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Material Bibliografico
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($documentoBibliografico, ['route' => ['documentoBibliograficos.update', $documentoBibliografico->id], 'enctype'=>'multipart/form-data', 'method' => 'patch']) !!}

                        @include('documento_bibliograficos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection