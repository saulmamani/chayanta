<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Area Field -->
<div class="form-group col-sm-6">
    {!! Form::label('area', 'Area:') !!}
    {!! Form::select('area', ['Humanidades' => 'Humanidades', 'Tecnico' => 'Tecnico'], null, ['class' => 'form-control']) !!}
</div>

<!-- Tiempo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tiempo', 'Tiempo:') !!}
    {!! Form::number('tiempo', null, ['class' => 'form-control']) !!}
</div>

<!-- Ruta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ruta', 'Ruta:') !!}
    {!! Form::text('ruta', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('carreras.index') !!}" class="btn btn-default">Cancel</a>
</div>
