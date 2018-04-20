<?php

namespace App\Repositories;

use App\Models\Carrera;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CarreraRepository
 * @package App\Repositories
 * @version April 20, 2018, 12:17 am UTC
 *
 * @method Carrera findWithoutFail($id, $columns = ['*'])
 * @method Carrera find($id, $columns = ['*'])
 * @method Carrera first($columns = ['*'])
*/
class CarreraRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'area'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Carrera::class;
    }
}
