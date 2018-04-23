<!-- Codigorude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigoRUDE', 'Codigo RUDE:') !!}
    {!! Form::number('codigoRUDE', null, ['class' => 'form-control']) !!}
</div>

<!-- Ci Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ci', 'Ci:') !!}
    {!! Form::text('ci', null, ['class' => 'form-control']) !!}
</div>

<!-- Expedido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expedido', 'Expedido:') !!}
    {!! Form::select('expedido', ['Pt' => 'Pt', 'Or' => 'Or', 'Lp' => 'Lp', 'Cb' => 'Cb', 'Sc' => 'Sc', 'Bn' => 'Bn', 'Tj' => 'Tj', 'Pa' => 'Pa', 'Ch' => 'Ch'], null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido', 'Apellido:') !!}
    {!! Form::text('apellido', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechanacimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaNacimiento', 'Fecha Nacimiento:') !!}
    {!! Form::date('fechaNacimiento', null, ['class' => 'form-control']) !!}
</div>

<!-- Lugarnacimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lugarNacimiento', 'Lugar Nacimiento:') !!}
    {!! Form::text('lugarNacimiento', null, ['class' => 'form-control']) !!}
</div>

<!-- Nacionalidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nacionalidad', 'Nacionalidad:') !!}
    {!! Form::text('nacionalidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Estadocivil Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estadoCivil', 'Estado Civil:') !!}
    {!! Form::select('estadoCivil', ['Soltero' => 'Soltero', 'Casado' => 'Casado', 'Divorciado' => 'Divorciado', 'Separado' => 'Separado', 'Otro' => 'Otro'], null, ['class' => 'form-control']) !!}
</div>

<!-- Genero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('genero', 'Genero:') !!}
    {!! Form::select('genero', ['Varon' => 'Varon', 'Mujer' => 'Mujer', 'Otro' => 'Otro'], null, ['class' => 'form-control']) !!}
</div>

<!-- Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('celular', 'Celular:') !!}
    {!! Form::text('celular', null, ['class' => 'form-control']) !!}
</div>

<!-- Anioingreso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anioIngreso', 'Anio Ingreso:') !!}
    {!! Form::number('anioIngreso', null, ['class' => 'form-control']) !!}
</div>

<!-- Carrera Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('carrera_id', 'Carrera:') !!}
    {!! Form::select('carrera_id', $carreras, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('estudiantes.index') !!}" class="btn btn-default">Cancel</a>
</div>
