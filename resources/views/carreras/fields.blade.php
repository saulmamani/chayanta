<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre de la Carrera:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Area Field -->
<div class="form-group col-sm-6">
    {!! Form::label('area', 'Area:') !!}
    {!! Form::select('area', ['Humanidades' => 'Humanidades', 'Tecnico Medio' => 'Tecnico Medio', 'Tecnico Superior' => 'Tecnico Superior', 'Tecnico Basico' => 'Tecnico Basico', 'Tecnico Auxiliar' => 'Tecnico Auxiliar'], null, ['class' => 'form-control']) !!}
</div>

<!-- Tiempo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tiempo', 'Tiempo: (Años)') !!}
    {!! Form::number('tiempo', null, ['class' => 'form-control']) !!}
</div>

<!-- Ruta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rutaPdf', 'Plan de estudios: (*.pdf)') !!}
    {!! Form::file('rutaPdf', null, ['class' => 'form-control']) !!}

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('carreras.index') !!}" class="btn btn-default">Cancelar</a>
</div>
