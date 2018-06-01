@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1 id='titulo' class="pull-left">Reportes Estadisticos</h1>
    <br/>
</section>

<div class="content">
    <div class="clearfix"></div>
	
	<div class="box box-primary">
        <div class="box-body">

<div id="exTab2">	
	<ul class="nav nav-tabs">
		<li class="active"><a  href="#1" data-toggle="tab">Documentos</a></li>
		<li><a href="#2" data-toggle="tab">Por Facilitador</a></li>
		<li><a href="#3" data-toggle="tab">Estudiantes por Genero</a></li>
	</ul>

	<div class="tab-content ">
		<div class="tab-pane active" id="1">
        	@include('reportes.reporte_pie')
		</div>
		<div class="tab-pane" id="2">
        	<div id="container_barra" style="width:100%; height:400px;"></div>
		</div>
		<div class="tab-pane" id="3">
        	<div id="container_genero" style="width:100%; height:400px;"></div>
		</div>
	</div>
</div>

		</div>
	</div>

</div>

@endsection