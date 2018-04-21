<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $carrera->id !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $carrera->nombre !!}</p>
</div>

<!-- Area Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{!! $carrera->descripcion !!}</p>
</div>

<!-- Area Field -->
<div class="form-group">
    {!! Form::label('area', 'Area:') !!}
    <p>{!! $carrera->area !!}</p>
</div>

<!-- Tiempo Field -->
<div class="form-group">
    {!! Form::label('tiempo', 'Tiempo:') !!}
    <p>{!! $carrera->tiempo !!}</p>
</div>

<!-- Ruta Field -->
<div class="form-group">
    <a target="_blank" href="{{ '/planes/'.$carrera->ruta }}" class="btn btn-success">Descargar Plan de Estudios</a>
</div>

<hr>

