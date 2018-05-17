<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre del Documento:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control'])  !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- URL Field -->
<div class="form-group col-sm-6">
    {!! Form::label('urlPdf', 'Cargar Documento: (*.pdf)') !!}
    {!! Form::file('urlPdf', null, ['class' => 'form-control','required' => 'required', 'accept'=>'.pdf']) !!}

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
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('documentoInstitucionals.index') !!}" class="btn btn-default">Cancel</a>
</div>
