<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFacilitadorRequest;
use App\Http\Requests\UpdateFacilitadorRequest;
use App\Repositories\FacilitadorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Carrera;
use App\Http\Controllers\Fachada;

class FacilitadorController extends AppBaseController
{
    /** @var  FacilitadorRepository */
    private $facilitadorRepository;

    public function __construct(FacilitadorRepository $facilitadorRepo)
    {
        $this->facilitadorRepository = $facilitadorRepo;
    }

    /**
     * Display a listing of the Facilitador.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->facilitadorRepository->pushCriteria(new RequestCriteria($request));
        $facilitadors = $this->facilitadorRepository->paginate(10);

        return view('facilitadors.index')
            ->with('facilitadors', $facilitadors);
    }

    /**
     * Show the form for creating a new Facilitador.
     *
     * @return Response
     */
    
    private function listaCarreras()
    {
        $carreras = Carrera::select('id','nombre')->get();
        $res = [];
        foreach ($carreras as $fila) {
            $res[$fila->id] = $fila->nombre;
        }
        return $res;
    }

    public function create()
    {
        $carrerasArray = $this->listaCarreras();
        //dd($carrerasArray);
        return view('facilitadors.create')->with('carreras', $carrerasArray);
    }

    /**
     * Store a newly created Facilitador in storage.
     *
     * @param CreateFacilitadorRequest $request
     *
     * @return Response
     */
    public function store(CreateFacilitadorRequest $request)
    {
        $input = $request->all();

        $facilitador = $this->facilitadorRepository->create($input);

        //registrando en la tabla usuarios
        Fachada::crearFacilitador($input);

        Flash::success('Facilitador saved successfully.');

        return redirect(route('facilitadors.index'));
    }

    /**
     * Display the specified Facilitador.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $facilitador = $this->facilitadorRepository->findWithoutFail($id);

        if (empty($facilitador)) {
            Flash::error('Facilitador not found');

            return redirect(route('facilitadors.index'));
        }

        return view('facilitadors.show')->with('facilitador', $facilitador);
    }

    /**
     * Show the form for editing the specified Facilitador.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $facilitador = $this->facilitadorRepository->findWithoutFail($id);
        $carrerasArray = $this->listaCarreras();

        if (empty($facilitador)) {
            Flash::error('Facilitador not found');

            return redirect(route('facilitadors.index'));
        }

        return view('facilitadors.edit')->with(['facilitador'=> $facilitador,'carreras'=> $carrerasArray]);
    }

    /**
     * Update the specified Facilitador in storage.
     *
     * @param  int              $id
     * @param UpdateFacilitadorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFacilitadorRequest $request)
    {
        $facilitador = $this->facilitadorRepository->findWithoutFail($id);

        if (empty($facilitador)) {
            Flash::error('Facilitador not found');

            return redirect(route('facilitadors.index'));
        }

        $facilitador = $this->facilitadorRepository->update($request->all(), $id);

        Flash::success('Facilitador updated successfully.');

        return redirect(route('facilitadors.index'));
    }

    /**
     * Remove the specified Facilitador from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $facilitador = $this->facilitadorRepository->findWithoutFail($id);

        if (empty($facilitador)) {
            Flash::error('Facilitador not found');

            return redirect(route('facilitadors.index'));
        }

        $this->facilitadorRepository->delete($id);

        //eliminando al usuario
        Fachada::eliminarUsuario('rda'.$facilitador->codigoRDA);

        Flash::success('Facilitador deleted successfully.');

        return redirect(route('facilitadors.index'));
    }
}
