@if(Auth::user()->rol == "Administrador" || Auth::user()->rol == "Secretaria")
	
	@if(Auth::user()->rol == "Administrador")
<li class="{{ Request::is('institucionales*') ? 'active' : '' }}">
    <a href="{!! url('institucionales') !!}"><i class="fa fa-search"></i><span>Buscar Documentos</span></a>
</li>
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-user"></i><span>Usuarios</span></a>
</li>
<li class="{{ Request::is('carreras*') ? 'active' : '' }}">
    <a href="{!! route('carreras.index') !!}"><i class="fa fa-th-list"></i><span>Carreras</span></a>
</li>
    @endif
<li class="{{ Request::is('comunicados*') ? 'active' : '' }}">
    <a href="{!! route('comunicados.index') !!}"><i class="fa fa-bookmark"></i><span>Comunicados</span></a>
</li>

<li class="{{ Request::is('facilitadors*') ? 'active' : '' }}">
    <a href="{!! route('facilitadors.index') !!}"><i class="glyphicon glyphicon-blackboard"></i><span>Facilitadores</span></a>
</li>

<li class="{{ Request::is('estudiantes*') ? 'active' : '' }}">
    <a href="{!! route('estudiantes.index') !!}"><i class="glyphicon glyphicon-education"></i><span>Estudiantes</span></a>
</li>

<li class="{{ Request::is('documentoInstitucionals*') ? 'active' : '' }}">
    <a href="{!! route('documentoInstitucionals.index') !!}"><i class="fa fa-file"></i><span>Documentos</span></a>
</li>

<li class="{{ Request::is('documentoBibliograficos*') ? 'active' : '' }}">
    <a href="{!! route('documentoBibliograficos.index') !!}"><i class="fa fa-book"></i><span>Materiales</span></a>
</li>

<li class="{{ Request::is('reportes*') ? 'active' : '' }}">
    <a href="{!! url('reportes') !!}"><i class="glyphicon glyphicon-stats"></i><span>Reportes</span></a>
</li>

@elseif(Auth::user()->rol == "Estudiante" || Auth::user()->rol == "Administrador")
<li class="active">
    <a href="{!! url('/bibliograficos') !!}"><i class="fa fa-search"></i><span>Buscar Material</span></a>
</li>
@else
<li class="{{ Request::is('documentoBibliograficos*') ? 'active' : '' }}">
    <a href="{!! route('documentoBibliograficos.index') !!}"><i class="fa fa-book"></i><span>Materiales</span></a>
</li>
@endif