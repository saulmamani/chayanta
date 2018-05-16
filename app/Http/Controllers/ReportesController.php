<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DocumentoBibliografico;
use DB;
use App\Http\Controllers\Fachada;
use App\Models\DocumentoInstitucional;
use App\Models\Comunicado;
use App\Models\Carrera;

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

    public function buscarDocumentos()
    {
        $documentoInstitucionals = DocumentoInstitucional::where('estado', '=', 'Alta')->get();

        //dd( $documentoInstitucionals);

        return view('busquedas.documentos')
            ->with('documentoInstitucionals', $documentoInstitucionals);
    }

    public function listarComunicados()
    {
        $comunicados = Comunicado::Where('estado', '=', 'Alta')->get();
        return view('busquedas.comunicados_lista')->with('comunicados',$comunicados);
    }

    public function listarCarreras()
    {
        $comunicados = Carrera::All();
        return view('busquedas.carreras_lista')->with('carreras',$comunicados);
    }

    public function reportes()
    {
        $documentos = DB::select("select 'Documentos' descripcion, count(d.id) cantidad
from documento_institucionals d
union all
select 'Materiales Bibligraficos' descripcion, count(d.id) cantidad
from documento_bibliograficos d");

        $materiales = DB::select("select concat(f.nombre,' ',f.apellido), count(d.id)
from 
documento_bibliograficos d inner join
facilitadors f on d.facilitadors_id = f.id
group by d.facilitadors_id");

        return view('reportes.index')->with(['documentos'=>$documentos, 'materiales'=>$materiales]);
    }
}
