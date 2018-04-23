@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Facilitador
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($facilitador, ['route' => ['facilitadors.update', $facilitador->id], 'method' => 'patch']) !!}

                        @include('facilitadors.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection