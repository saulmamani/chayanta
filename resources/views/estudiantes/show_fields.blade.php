<!-- Codigorude Field -->
<div class="form-group">
    {!! Form::label('codigoRUDE', 'Codigo RUDE:') !!}
    <p>{!! $estudiante->codigoRUDE !!}</p>
</div>

<!-- Ci Field -->
<div class="form-group">
    {!! Form::label('ci', 'Ci:') !!}
    <p>{!! $estudiante->ci !!}</p>
</div>

<!-- Expedido Field -->
<div class="form-group">
    {!! Form::label('expedido', 'Expedido:') !!}
    <p>{!! $estudiante->expedido !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $estudiante->nombre !!}</p>
</div>

<!-- Apellido Field -->
<div class="form-group">
    {!! Form::label('apellido', 'Apellido:') !!}
    <p>{!! $estudiante->apellido !!}</p>
</div>

<!-- Fechanacimiento Field -->
<div class="form-group">
    {!! Form::label('fechaNacimiento', 'Fecha Nacimiento:') !!}
    <p>{!! $estudiante->fechaNacimiento !!}</p>
</div>

<!-- Lugarnacimiento Field -->
<div class="form-group">
    {!! Form::label('lugarNacimiento', 'Lugar Nacimiento:') !!}
    <p>{!! $estudiante->lugarNacimiento !!}</p>
</div>

<!-- Nacionalidad Field -->
<div class="form-group">
    {!! Form::label('nacionalidad', 'Nacionalidad:') !!}
    <p>{!! $estudiante->nacionalidad !!}</p>
</div>

<!-- Estadocivil Field -->
<div class="form-group">
    {!! Form::label('estadoCivil', 'Estado Civil:') !!}
    <p>{!! $estudiante->estadoCivil !!}</p>
</div>

<!-- Genero Field -->
<div class="form-group">
    {!! Form::label('genero', 'Genero:') !!}
    <p>{!! $estudiante->genero !!}</p>
</div>

<!-- Celular Field -->
<div class="form-group">
    {!! Form::label('celular', 'Celular:') !!}
    <p>{!! $estudiante->celular !!}</p>
</div>

<!-- Anioingreso Field -->
<div class="form-group">
    {!! Form::label('anioIngreso', 'Anio Ingreso:') !!}
    <p>{!! $estudiante->anioIngreso !!}</p>
</div>

<!-- Carrera Id Field -->
<div class="form-group">
    {!! Form::label('carrera_id', 'Carrera:') !!}
    <p>{!! $estudiante->carrera->nombre !!}</p>
</div>

