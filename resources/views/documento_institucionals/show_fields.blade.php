<!-- Fecha Field -->
<div class="form-group">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{!! $documentoInstitucional->fecha->format('d/m/Y') !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre de Documento:') !!}
    <p>{!! $documentoInstitucional->nombre !!}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{!! $documentoInstitucional->descripcion !!}</p>
</div>

<!-- Url Field -->
<div class="form-group">
    <p><a class="btn-lg btn-success" target="_black" href="{{ '/documentos/'.$documentoInstitucional->url }}">Descargar</a></p>
</div>

<!-- Estado Field -->
<div class="form-group">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{!! $documentoInstitucional->estado !!}</p>
</div>

<!-- Users Id Field -->
<div class="form-group">
    {!! Form::label('users_id', 'Usuario:') !!}
    <p>{!! $documentoInstitucional->user->email !!}</p>
</div>

