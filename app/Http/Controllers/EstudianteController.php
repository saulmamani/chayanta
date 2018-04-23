<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEstudianteRequest;
use App\Http\Requests\UpdateEstudianteRequest;
use App\Repositories\EstudianteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Carrera;
use App\User;
use App\Http\Controllers\Fachada;

class EstudianteController extends AppBaseController
{
    /** @var  EstudianteRepository */
    private $estudianteRepository;

    public function __construct(EstudianteRepository $estudianteRepo)
    {
        $this->estudianteRepository = $estudianteRepo;
    }

    /**
     * Display a listing of the Estudiante.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->estudianteRepository->pushCriteria(new RequestCriteria($request));
        $estudiantes = $this->estudianteRepository->paginate(10);

        return view('estudiantes.index')
            ->with('estudiantes', $estudiantes);
    }

    /**
     * Show the form for creating a new Estudiante.
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

        return view('estudiantes.create')->with('carreras',$carrerasArray);
    }

    /**
     * Store a newly created Estudiante in storage.
     *
     * @param CreateEstudianteRequest $request
     *
     * @return Response
     */
    public function store(CreateEstudianteRequest $request)
    {
        $input = $request->all();

        $estudiante = $this->estudianteRepository->create($input);

        //registrando en la tabla usuarios
        Fachada::crearEstudiante($input);

        Flash::success('Estudiante saved successfully.');

        return redirect(route('estudiantes.index'));
    }

    /**
     * Display the specified Estudiante.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estudiante = $this->estudianteRepository->findWithoutFail($id);
        $carrerasArray = $this->listaCarreras();

        if (empty($estudiante)) {
            Flash::error('Estudiante not found');

            return redirect(route('estudiantes.index'));
        }

        return view('estudiantes.show')->with(['estudiante'=> $estudiante, 'carreras'=>$carrerasArray]);
    }

    /**
     * Show the form for editing the specified Estudiante.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estudiante = $this->estudianteRepository->findWithoutFail($id);

        if (empty($estudiante)) {
            Flash::error('Estudiante not found');

            return redirect(route('estudiantes.index'));
        }

        return view('estudiantes.edit')->with('estudiante', $estudiante);
    }

    /**
     * Update the specified Estudiante in storage.
     *
     * @param  int              $id
     * @param UpdateEstudianteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstudianteRequest $request)
    {
        $estudiante = $this->estudianteRepository->findWithoutFail($id);

        if (empty($estudiante)) {
            Flash::error('Estudiante not found');

            return redirect(route('estudiantes.index'));
        }

        $estudiante = $this->estudianteRepository->update($request->all(), $id);

        Flash::success('Estudiante updated successfully.');

        return redirect(route('estudiantes.index'));
    }

    /**
     * Remove the specified Estudiante from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estudiante = $this->estudianteRepository->findWithoutFail($id);

        if (empty($estudiante)) {
            Flash::error('Estudiante not found');

            return redirect(route('estudiantes.index'));
        }

        $this->estudianteRepository->delete($id);

         //eliminando al usuario
        Fachada::eliminarUsuario($estudiante->codigoRUDE);


        Flash::success('Estudiante deleted successfully.');

        return redirect(route('estudiantes.index'));
    }
}
