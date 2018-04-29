<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DocumentoBibliografico;
use DB;
use App\Http\Controllers\Fachada;

class ReportesController extends Controller
{
    public function buscarMaterial()
    {
    	$materiales = DB::select("select d.*, concat(f.nombre, ' ', f.apellido) as nombreFacilitador, f.codigoRDA, c.id as idCarrera, c.nombre as nombreCarrera
			from documento_bibliograficos d inner join 
				 facilitadors f on f.id = d.facilitadors_id inner join
			     carreras c on c.id = f.carrera_id
			where c.id = ?", [Fachada::buscarEstudiante()->carrera_id]);

    	return view('busquedas.materiales')->with('materiales',$materiales);
    }
}