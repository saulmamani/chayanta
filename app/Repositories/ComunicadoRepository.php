<?php

namespace App\Repositories;

use App\Models\Comunicado;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ComunicadoRepository
 * @package App\Repositories
 * @version April 20, 2018, 1:40 am UTC
 *
 * @method Comunicado findWithoutFail($id, $columns = ['*'])
 * @method Comunicado find($id, $columns = ['*'])
 * @method Comunicado first($columns = ['*'])
*/
class ComunicadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fecha',
        'titulo',
        'contenido'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Comunicado::class;
    }
}
