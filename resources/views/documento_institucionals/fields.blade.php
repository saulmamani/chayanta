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
    {!! Form::label('urlPdf', 'Cargar Documento: (*.pdf, *.jpg, *.png)') !!}
    {!! Form::file('urlPdf', null, ['class' => 'form-control','required' => 'required', 'accept'=>'.pdf, .jpeg, .jpg, .png']) !!}

</div>


<!-- Scaner -->
<div class="form-group col-sm-6">
    {!! Form::label('urlDocumento', 'Escanear Documento: ') !!} <br>
    <a href="javascript:void(0)" class="btn btn-success" id="escaner">= Escanear Documento</a>
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
    <a href="{!! route('documentoInstitucionals.index') !!}" class="btn btn-default">Cancelar</a>
</div>



@section('scripts')
<link rel="stylesheet" href="/css/scanner.css">
<script type="text/javascript" src="//cdn.asprise.com/scannerjs/scanner.js"></script>
<script type="text/javascript">
    //http://cdn.asprise.com/scanapp/scan-setup.exe
$(document).ready(function(){
    $("#escaner").click(function() {
        scanToJpg() ;
    });
});

function scanToJpg() {
   scanner.scan(displayImagesOnPage,
   {
      "output_settings" :
      [
         {
            "type" : "return-base64",
            "format" : "jpg"
         }
      ]
   }
   );
}

/** Processes the scan result */
function displayImagesOnPage(successful, mesg, response) {
   if(!successful) { // On error
      console.error('Failed: ' + mesg);
      return;
   }

   if(successful && mesg != null && mesg.toLowerCase().indexOf('user cancel') >= 0) { // User canceled.
      console.info('User canceled');
      return;
   }

   var scannedImages = scanner.getScannedImage(response, true, false); // returns an array of ScannedImage
   for(var i = 0; (scannedImages instanceof Array) && i < scannedImages.length; i++) {
      var scannedImage = scannedImages[i];
      processScannedImage(scannedImage);
   }
}

/** Images scanned so far. */
var imagesScanned = [];

/** Processes a ScannedImage */
function processScannedImage(scannedImage) {
   imagesScanned.push(scannedImage);
   var elementImg = createDomElementFromModel( {
       'name': 'img',
       'attributes': {
           'class': 'scanned',
           'src': scannedImage.src
       }
   });
   document.getElementById('images').appendChild(elementImg);
}

</script>
@endsection