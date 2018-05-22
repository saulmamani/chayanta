<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDocumentoInstitucionalRequest;
use App\Http\Requests\UpdateDocumentoInstitucionalRequest;
use App\Repositories\DocumentoInstitucionalRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Auth;
use Storage;

class DocumentoInstitucionalController extends AppBaseController
{
    /** @var  DocumentoInstitucionalRepository */
    private $documentoInstitucionalRepository;

    public function __construct(DocumentoInstitucionalRepository $documentoInstitucionalRepo)
    {
        $this->documentoInstitucionalRepository = $documentoInstitucionalRepo;
    }

    /**
     * Display a listing of the DocumentoInstitucional.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->documentoInstitucionalRepository->pushCriteria(new RequestCriteria($request));
        $documentoInstitucionals = $this->documentoInstitucionalRepository->paginate(10);

        //dd( $documentoInstitucionals);

        return view('documento_institucionals.index')
            ->with('documentoInstitucionals', $documentoInstitucionals);
    }

    /**
     * Show the form for creating a new DocumentoInstitucional.
     *
     * @return Response
     */
    public function create()
    {
        return view('documento_institucionals.create');
    }

    private function cargarArchivo(Request $request)
    {
        //TODO controlar el tamano del archivo a 5 megas maximo
        $pdf = $request->file('urlPdf');
        if(is_null($pdf))
        {
            Flash::error('Elija un archivo .pdf o .docx valido');
            return redirect(route('documentoInstitucional.create'));
        }
        
        $nombreArchivo = time().'_'.$pdf->getClientOriginalName();
        Storage::disk('documentosPdf')->put($nombreArchivo, 
             file_get_contents( $pdf->getRealPath() ) );

        return $nombreArchivo;
    } 
    /**
     * Store a newly created DocumentoInstitucional in storage.
     *
     * @param CreateDocumentoInstitucionalRequest $request
     *
     * @return Response
     */
    public function store(CreateDocumentoInstitucionalRequest $request)
    {
        $nombreArchivo = $this->cargarArchivo($request);

        $input = $request->all();
        $input['fecha'] = new \DateTime();
        $input['users_id'] = Auth::id();
        $input['url'] = $nombreArchivo;

        $documentoInstitucional = $this->documentoInstitucionalRepository->create($input);

        Flash::success('Documento Institucional saved successfully.');

        return redirect(route('documentoInstitucionals.index'));
    }

    /**
     * Display the specified DocumentoInstitucional.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $documentoInstitucional = $this->documentoInstitucionalRepository->findWithoutFail($id);

        if (empty($documentoInstitucional)) {
            Flash::error('Documento Institucional not found');

            return redirect(route('documentoInstitucionals.index'));
        }

        return view('documento_institucionals.show')->with('documentoInstitucional', $documentoInstitucional);
    }

    /**
     * Show the form for editing the specified DocumentoInstitucional.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $documentoInstitucional = $this->documentoInstitucionalRepository->findWithoutFail($id);

        if (empty($documentoInstitucional)) {
            Flash::error('Documento Institucional not found');

            return redirect(route('documentoInstitucionals.index'));
        }

        return view('documento_institucionals.edit')->with('documentoInstitucional', $documentoInstitucional);
    }

    /**
     * Update the specified DocumentoInstitucional in storage.
     *
     * @param  int              $id
     * @param UpdateDocumentoInstitucionalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDocumentoInstitucionalRequest $request)
    {
        $documentoInstitucional = $this->documentoInstitucionalRepository->findWithoutFail($id);

        if (empty($documentoInstitucional)) {
            Flash::error('Documento Institucional not found');

            return redirect(route('documentoInstitucionals.index'));
        }

        $datos = $request->all();

        //modificando archivo plan de estudios
        if (is_null($request->file('urlPdf')))
        {
            $datos['url'] = $documentoInstitucional->url;   
        }
        else
        {
            $nombreArchivo = $this->cargarArchivo($request);
            $datos['url'] = $nombreArchivo;
        }

        $documentoInstitucional = $this->documentoInstitucionalRepository->update($datos, $id);

        Flash::success('Documento Institucional updated successfully.');

        return redirect(route('documentoInstitucionals.index'));
    }

    /**
     * Remove the specified DocumentoInstitucional from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $documentoInstitucional = $this->documentoInstitucionalRepository->findWithoutFail($id);

        if (empty($documentoInstitucional)) {
            Flash::error('Documento Institucional not found');

            return redirect(route('documentoInstitucionals.index'));
        }

        $this->documentoInstitucionalRepository->delete($id);

        Flash::success('Documento Institucional deleted successfully.');

        return redirect(route('documentoInstitucionals.index'));
    }
}
