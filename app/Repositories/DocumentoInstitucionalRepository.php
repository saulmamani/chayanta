<?php

namespace App\Repositories;

use App\Models\DocumentoInstitucional;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DocumentoInstitucionalRepository
 * @package App\Repositories
 * @version April 23, 2018, 3:48 pm UTC
 *
 * @method DocumentoInstitucional findWithoutFail($id, $columns = ['*'])
 * @method DocumentoInstitucional find($id, $columns = ['*'])
 * @method DocumentoInstitucional first($columns = ['*'])
*/
class DocumentoInstitucionalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fecha',
        'nombre',
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return DocumentoInstitucional::class;
    }
}
