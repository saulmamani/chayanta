<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre del documento:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- URL Field -->
<div class="form-group col-sm-6">
    {!! Form::label('urlPdf', 'Cargar Material Bibliografico: (*.pdf)') !!}
    {!! Form::file('urlPdf', null, ['class' => 'form-control','required' => 'required']) !!}

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('documentoBibliograficos.index') !!}" class="btn btn-default">Cancel</a>
</div>
