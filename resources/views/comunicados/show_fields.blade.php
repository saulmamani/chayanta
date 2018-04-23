<!-- Fecha Field -->
<div class="form-group">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{!! $comunicado->fecha !!}</p>
</div>

<!-- Titulo Field -->
<div class="form-group">
    {!! Form::label('titulo', 'Titulo:') !!}
    <p>{!! $comunicado->titulo !!}</p>
</div>

<!-- Contenido Field -->
<div class="form-group">
    {!! Form::label('contenido', 'Contenido:') !!}
    <p>{!! $comunicado->contenido !!}</p>
</div>

<!-- Estado Field -->
<div class="form-group">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{!! $comunicado->estado !!}</p>
</div>

<!-- Users Id Field -->
<div class="form-group">
    {!! Form::label('users_id', 'Usuario:') !!}
    <p>{!! $comunicado->user->email !!}</p>
</div>

