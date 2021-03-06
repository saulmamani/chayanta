<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Contenido Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('contenido', 'Contenido:') !!}
    {!! Form::textarea('contenido', null, ['class' => 'form-control ckeditor']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-12">
    {!! Form::label('estado', 'Estado:') !!}
    <label class="radio-inline">
        {!! Form::radio('estado', "Alta", true) !!} Alta
    </label>

    <label class="radio-inline">
        {!! Form::radio('estado', "Baja", null) !!} Baja
    </label>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('comunicados.index') !!}" class="btn btn-default">Cancelar</a>
</div>
