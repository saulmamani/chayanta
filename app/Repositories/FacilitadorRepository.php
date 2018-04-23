<?php

namespace App\Repositories;

use App\Models\Facilitador;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FacilitadorRepository
 * @package App\Repositories
 * @version April 23, 2018, 3:10 am UTC
 *
 * @method Facilitador findWithoutFail($id, $columns = ['*'])
 * @method Facilitador find($id, $columns = ['*'])
 * @method Facilitador first($columns = ['*'])
*/
class FacilitadorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Facilitador::class;
    }
}
