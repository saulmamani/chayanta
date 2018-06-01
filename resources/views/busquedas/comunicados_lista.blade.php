<ul class="list-group mb-3">

@foreach($comunicados as $row)

<li class="list-group-item d-flex justify-content-between lh-condensed">
  <div>
    <h5 class="my-0"><strong>{{ $row->titulo }}:</strong></h5>
    <p class="text-muted">{!! $row->contenido !!}</p>
  </div>
  <small class="text-muted">{{ $row->fecha->format('d/m/Y') }}</small>
</li>
@endforeach

</ul>