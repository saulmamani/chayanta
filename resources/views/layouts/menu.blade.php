<li class="{{ Request::is('carreras*') ? 'active' : '' }}">
    <a href="{!! route('carreras.index') !!}"><i class="fa fa-edit"></i><span>Carreras</span></a>
</li>

<li class="{{ Request::is('comunicados*') ? 'active' : '' }}">
    <a href="{!! route('comunicados.index') !!}"><i class="fa fa-edit"></i><span>Comunicados</span></a>
</li>

<li class="{{ Request::is('facilitadors*') ? 'active' : '' }}">
    <a href="{!! route('facilitadors.index') !!}"><i class="fa fa-edit"></i><span>Facilitadors</span></a>
</li>

