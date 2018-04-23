<?php

namespace App\Repositories;

use App\Models\DocumentoBibliografico;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DocumentoBibliograficoRepository
 * @package App\Repositories
 * @version April 23, 2018, 4:14 pm UTC
 *
 * @method DocumentoBibliografico findWithoutFail($id, $columns = ['*'])
 * @method DocumentoBibliografico find($id, $columns = ['*'])
 * @method DocumentoBibliografico first($columns = ['*'])
*/
class DocumentoBibliograficoRepository extends BaseRepository
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
        return DocumentoBibliografico::class;
    }
}
