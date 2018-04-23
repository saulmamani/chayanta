<?php

namespace App\Repositories;

use App\Models\Estudiante;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EstudianteRepository
 * @package App\Repositories
 * @version April 23, 2018, 12:38 pm UTC
 *
 * @method Estudiante findWithoutFail($id, $columns = ['*'])
 * @method Estudiante find($id, $columns = ['*'])
 * @method Estudiante first($columns = ['*'])
*/
class EstudianteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigoRUDE',
        'ci',
        'expedido',
        'nombre',
        'apellido',
        'estadoCivil',
        'genero'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Estudiante::class;
    }
}
