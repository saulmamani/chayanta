<!-- Fecha Field -->
<div class="form-group">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{!! $documentoBibliografico->fecha !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre de documento:') !!}
    <p>{!! $documentoBibliografico->nombre !!}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{!! $documentoBibliografico->descripcion !!}</p>
</div>

<!-- Url Field -->
<div class="form-group">
    <p><a class="btn-lg btn-success" target="_black" href="{{ $documentoBibliografico->url }}">Descargar</a></p>
</div>

<!-- Users Id Field -->
<div class="form-group">
    {!! Form::label('users_id', 'Usuario:') !!}
    <p>{!! $documentoBibliografico->user->email !!}</p>
</div>
