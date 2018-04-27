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
        $documentoBibliograficos = $this->documentoBibliograficoRepository->paginate(10);

        return view('documento_bibliograficos.index')
            ->with('documentoBibliograficos', $documentoBibliograficos);
    }

    /**
     * Show the form for creating a new DocumentoBibliografico.
     *
     * @return Response
     */
    public function create()
    {
        return view('documento_bibliograficos.create');
    }

    private function cargarArchivo(Request $request)
    {
        //cargando el documento
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
        $input['users_id'] = Auth::id();
        $input['url'] = $nombreArchivo;

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

        if (empty($documentoBibliografico)) {
            Flash::error('Documento Bibliografico not found');

            return redirect(route('documentoBibliograficos.index'));
        }

        return view('documento_bibliograficos.edit')->with('documentoBibliografico', $documentoBibliografico);
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

        $datos = $request->all();

        //modificando archivo plan de estudios
        if (is_null($request->file('urlPdf')))
        {
            $datos['url'] = $documentoBibliografico->url;   
        }
        else
        {
            $nombreArchivo = $this->cargarArchivo($request);
            $datos['url'] = $nombreArchivo;
        }

        $documentoBibliografico = $this->documentoBibliograficoRepository->update($datos, $id);

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
