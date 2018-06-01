<center>
<!-- Table -->
<table class="table  table-striped table-bordered" id="carreras-table">
<thead class="thead-dark">
  <tr>
  <th>Carrera</th>
  <th>Descripcion</th>
  <th>Arera</th>
  <th>Tiempo</th>
  <th></th>
  </tr>
</thead>
<tbody>
	 @foreach($carreras as $carrera)
  <tr>
    <td><strong>{!! $carrera->nombre !!}</strong></td>
    @if(strlen($carrera->descripcion) > 50)
    	<td><i>{{ substr($carrera->descripcion, 0, 50).'...' }}</i></td>
    @else
    	<td><i>{{ $carrera->descripcion }}</i></td>
	@endif
    <td>{!! $carrera->area !!}</td>
    <td>{!! $carrera->tiempo !!}</td>
    <td><a class="btn-sm btn-success" target="_black" href="{{ '/planes/'.$carrera->ruta }}">Plan de estudios</a></td>
  </tr>
  	@endforeach
</tbody>
</table>
</center>