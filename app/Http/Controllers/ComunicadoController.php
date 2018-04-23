<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateComunicadoRequest;
use App\Http\Requests\UpdateComunicadoRequest;
use App\Repositories\ComunicadoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Auth;

class ComunicadoController extends AppBaseController
{
    /** @var  ComunicadoRepository */
    private $comunicadoRepository;

    public function __construct(ComunicadoRepository $comunicadoRepo)
    {
        $this->comunicadoRepository = $comunicadoRepo;
    }

    /**
     * Display a listing of the Comunicado.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->comunicadoRepository->pushCriteria(new RequestCriteria($request));
        $comunicados = $this->comunicadoRepository->paginate(10);

        return view('comunicados.index')
            ->with('comunicados', $comunicados);
    }

    /**
     * Show the form for creating a new Comunicado.
     *
     * @return Response
     */
    public function create()
    {
        return view('comunicados.create');
    }

    /**
     * Store a newly created Comunicado in storage.
     *
     * @param CreateComunicadoRequest $request
     *
     * @return Response
     */
    public function store(CreateComunicadoRequest $request)
    {
        $input = $request->all();
        $input['fecha']= new \DateTime();
        $input['users_id'] = Auth::id();

        $comunicado = $this->comunicadoRepository->create($input);

        Flash::success('Comunicado saved successfully.');

        return redirect(route('comunicados.index'));
    }

    /**
     * Display the specified Comunicado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $comunicado = $this->comunicadoRepository->findWithoutFail($id);

        if (empty($comunicado)) {
            Flash::error('Comunicado not found');

            return redirect(route('comunicados.index'));
        }

        return view('comunicados.show')->with('comunicado', $comunicado);
    }

    /**
     * Show the form for editing the specified Comunicado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $comunicado = $this->comunicadoRepository->findWithoutFail($id);

        if (empty($comunicado)) {
            Flash::error('Comunicado not found');

            return redirect(route('comunicados.index'));
        }

        return view('comunicados.edit')->with('comunicado', $comunicado);
    }

    /**
     * Update the specified Comunicado in storage.
     *
     * @param  int              $id
     * @param UpdateComunicadoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateComunicadoRequest $request)
    {
        $comunicado = $this->comunicadoRepository->findWithoutFail($id);

        if (empty($comunicado)) {
            Flash::error('Comunicado not found');

            return redirect(route('comunicados.index'));
        }

        $comunicado = $this->comunicadoRepository->update($request->all(), $id);

        Flash::success('Comunicado updated successfully.');

        return redirect(route('comunicados.index'));
    }

    /**
     * Remove the specified Comunicado from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $comunicado = $this->comunicadoRepository->findWithoutFail($id);

        if (empty($comunicado)) {
            Flash::error('Comunicado not found');

            return redirect(route('comunicados.index'));
        }

        $this->comunicadoRepository->delete($id);

        Flash::success('Comunicado deleted successfully.');

        return redirect(route('comunicados.index'));
    }
}
