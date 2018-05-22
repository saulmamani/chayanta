<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDocumentoBibliograficoRequest;
use App\Http\Requests\UpdateDocumentoBibliograficoRequest;
use App\Repositories\DocumentoBibliograficoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Auth;
use Storage;
use App\Models\Facilitador;
use App\Models\DocumentoBibliografico;
use App\Http\Controllers\Fachada;

class DocumentoBibliograficoController extends AppBaseController
{
    /** @var  DocumentoBibliograficoRepository */
    private $documentoBibliograficoRepository;

    public function __construct(DocumentoBibliograficoRepository $documentoBibliograficoRepo)
    {
        $this->documentoBibliograficoRepository = $documentoBibliograficoRepo;
    }

    /**
     * Display a listing of the DocumentoBibliografico.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->documentoBibliograficoRepository->pushCriteria(new RequestCriteria($request));

        if(Auth::user()->rol == 'Facilitador')
            $documentoBibliograficos = DocumentoBibliografico::where('facilitadors_id', '=', $this->sacarIdFacilitador())->get();
        else    
            $documentoBibliograficos = $this->documentoBibliograficoRepository->all();


        return view('documento_bibliograficos.index')
            ->with('documentoBibliograficos', $documentoBibliograficos);
    }

    private function listarFacilitadores()
    {
        $carreras = Facilitador::select('id','nombre','apellido')->get();
        $res = [];
        foreach ($carreras as $fila) {
            $res[$fila->id] = $fila->nombre.' '.$fila->apellido;
        }
        return $res;
    }

    /**
     * Show the form for creating a new DocumentoBibliografico.
     *
     * @return Response
     */
    public function create()
    {
        $facilitadoresArray = $this->listarFacilitadores();
        return view('documento_bibliograficos.create')->with('facilitadores', $facilitadoresArray);
    }

    private function cargarArchivo(Request $request)
    {
        //TODO controlar el tamano del archivo a 5 megas maximo
        $pdf = $request->file('urlPdf');
        if(is_null($pdf))
        {
            Flash::error('Elija un archivo .pdf o .docx valido');
            return redirect(route('documentoBibliograficos.create'));
        }
        
        $nombreArchivo = time().'_'.$pdf->getClientOriginalName();
        Storage::disk('materialesPdf')->put($nombreArchivo, 
             file_get_contents( $pdf->getRealPath() ) );

        return $nombreArchivo;
    }    

    /**
     * Store a newly created DocumentoBibliografico in storage.
     *
     * @param CreateDocumentoBibliograficoRequest $request
     *
     * @return Response
     */
    public function store(CreateDocumentoBibliograficoRequest $request)
    {
        $nombreArchivo = $this->cargarArchivo($request);

        $input = $request->all();
        $input['fecha'] = new \DateTime();
        $input['url'] = $nombreArchivo;
        if(Auth::user()->rol == 'Facilitador')
            $input['facilitadors_id'] = $this->sacarIdFacilitador();

        $documentoBibliografico = $this->documentoBibliograficoRepository->create($input);

        Flash::success('Documento Bibliografico saved successfully.');

        return redirect(route('documentoBibliograficos.index'));
    }

    /**
     * Display the specified DocumentoBibliografico.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $documentoBibliografico = $this->documentoBibliograficoRepository->findWithoutFail($id);

        if (empty($documentoBibliografico)) {
            Flash::error('Documento Bibliografico not found');

            return redirect(route('documentoBibliograficos.index'));
        }

        return view('documento_bibliograficos.show')->with('documentoBibliografico', $documentoBibliografico);
    }

    /**
     * Show the form for editing the specified DocumentoBibliografico.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $documentoBibliografico = $this->documentoBibliograficoRepository->findWithoutFail($id);
        $facilitadoresArray = $this->listarFacilitadores();


        if (empty($documentoBibliografico)) {
            Flash::error('Documento Bibliografico not found');

            return redirect(route('documentoBibliograficos.index'));
        }

        return view('documento_bibliograficos.edit')->with(['documentoBibliografico'=> $documentoBibliografico, 'facilitadores'=>$facilitadoresArray]);
    }

    private function sacarIdFacilitador()
    {
        $facilitador = Fachada::buscarFacilitador();
        return $facilitador->id;
    }

    /**
     * Update the specified DocumentoBibliografico in storage.
     *
     * @param  int              $id
     * @param UpdateDocumentoBibliograficoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDocumentoBibliograficoRequest $request)
    {
        $documentoBibliografico = $this->documentoBibliograficoRepository->findWithoutFail($id);

        if (empty($documentoBibliografico)) {
            Flash::error('Documento Bibliografico not found');

            return redirect(route('documentoBibliograficos.index'));
        }

        $input = $request->all();

        //modificando archivo plan de estudios
        if (is_null($request->file('urlPdf')))
        {
            $input['url'] = $documentoBibliografico->url;   
        }
        else
        {
            $nombreArchivo = $this->cargarArchivo($request);
            $input['url'] = $nombreArchivo;
        }

        if(Auth::user()->rol == 'Facilitador')
            $input['facilitadors_id'] = $this->sacarIdFacilitador();

        $documentoBibliografico = $this->documentoBibliograficoRepository->update($input, $id);

        Flash::success('Documento Bibliografico updated successfully.');

        return redirect(route('documentoBibliograficos.index'));
    }

    /**
     * Remove the specified DocumentoBibliografico from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $documentoBibliografico = $this->documentoBibliograficoRepository->findWithoutFail($id);

        if (empty($documentoBibliografico)) {
            Flash::error('Documento Bibliografico not found');

            return redirect(route('documentoBibliograficos.index'));
        }

        $this->documentoBibliograficoRepository->delete($id);

        Flash::success('Documento Bibliografico deleted successfully.');

        return redirect(route('documentoBibliograficos.index'));
    }
}
