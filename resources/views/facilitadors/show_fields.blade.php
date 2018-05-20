<!-- Codigorda Field -->
<div class="form-group">
    {!! Form::label('codigo RDA', 'Codigo RDA:') !!}
    <p>{!! $facilitador->codigoRDA !!}</p>
</div>

<!-- Ci Field -->
<div class="form-group">
    {!! Form::label('ci', 'Ci:') !!}
    <p>{!! $facilitador->ci !!}</p>
</div>

<!-- Expedido Field -->
<div class="form-group">
    {!! Form::label('expedido', 'Expedido:') !!}
    <p>{!! $facilitador->expedido !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $facilitador->nombre !!}</p>
</div>

<!-- Apellido Field -->
<div class="form-group">
    {!! Form::label('apellido', 'Apellido:') !!}
    <p>{!! $facilitador->apellido !!}</p>
</div>

<!-- Fechanacimiento Field -->
<div class="form-group">
    {!! Form::label('fechaNacimiento', 'Fecha de Nacimiento:') !!}
    <p>{!! $facilitador->fechaNacimiento->format('d/m/Y') !!}</p>
</div>

<!-- Lugarnacimiento Field -->
<div class="form-group">
    {!! Form::label('lugarNacimiento', 'Lugar de Nacimiento:') !!}
    <p>{!! $facilitador->lugarNacimiento !!}</p>
</div>

<!-- Nacionalidad Field -->
<div class="form-group">
    {!! Form::label('nacionalidad', 'Nacionalidad:') !!}
    <p>{!! $facilitador->nacionalidad !!}</p>
</div>

<!-- Estadocivil Field -->
<div class="form-group">
    {!! Form::label('estadoCivil', 'Estado Civil:') !!}
    <p>{!! $facilitador->estadoCivil !!}</p>
</div>

<!-- Genero Field -->
<div class="form-group">
    {!! Form::label('genero', 'Genero:') !!}
    <p>{!! $facilitador->genero !!}</p>
</div>

<!-- Celular Field -->
<div class="form-group">
    {!! Form::label('celular', 'Celular:') !!}
    <p>{!! $facilitador->celular !!}</p>
</div>

<!-- Profesion Field -->
<div class="form-group">
    {!! Form::label('profesion', 'Profesion:') !!}
    <p>{!! $facilitador->profesion !!}</p>
</div>

<!-- Carrera Id Field -->
<div class="form-group">
    {!! Form::label('carrera_id', 'Carrera:') !!}
    <p>{!! $facilitador->carrera->nombre !!}</p>
</div>

