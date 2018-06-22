<form class="form" role="form" action="{{url('/institucionales/')}}">
    <div class="form-group col-sm-6">
        {!! Form::label('txtBuscar', 'Buscar:') !!}
        {!! Form::text('txtBuscar', null, ['class' => 'form-control', 'placeholder'=>'Nombre Documento | Descripcion']) !!}     
    </div>

    <div class="form-group  col-sm-2">
        {!! Form::label('dtpFecha', 'Por Fecha:') !!}
        {!! Form::date('dtpFecha', null, ['class' => 'form-control']) !!}         
    </div>
    <div class="form-group  col-sm-2">
    <br>        
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Buscar</button>
    </div>
</form>