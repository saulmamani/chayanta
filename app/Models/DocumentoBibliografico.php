<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DocumentoBibliografico
 * @package App\Models
 * @version April 23, 2018, 4:14 pm UTC
 *
 * @property \App\Models\User user
 * @property dateTime fecha
 * @property string nombre
 * @property string descripcion
 * @property string url
 * @property integer users_id
 */
class DocumentoBibliografico extends Model
{
    use SoftDeletes;

    public $table = 'documento_bibliograficos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'fecha',
        'nombre',
        'descripcion',
        'url',
        'facilitadors_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fecha' => 'datetime',
        'nombre' => 'string',
        'descripcion' => 'string',
        'url' => 'string',
        'facilitadors_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required|min:3|max:100',
        'descripcion' => 'required|min:5'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function facilitador()
    {
        return $this->belongsTo(\App\Models\Facilitador::class, 'facilitadors_id', 'id');
    }
}
