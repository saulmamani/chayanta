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

<div id="exTab2" class="container">	
	<ul class="nav nav-tabs">
		<li class="active"><a  href="#1" data-toggle="tab">Documentos</a></li>
		<li><a href="#2" data-toggle="tab">Por Facilitador</a></li>
	</ul>

	<div class="tab-content ">
		<div class="tab-pane active" id="1">
        	<h3>Reporte PIE</h3>
		</div>
		<div class="tab-pane" id="2">
        	<h3>Reporte de Barras</h3>
		</div>
	</div>
</div>

		</div>
	</div>

</div>

@endsection