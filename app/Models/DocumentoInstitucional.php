<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DocumentoInstitucional
 * @package App\Models
 * @version April 23, 2018, 3:48 pm UTC
 *
 * @property \App\Models\User user
 * @property dateTime fecha
 * @property string nombre
 * @property string descripcion
 * @property string url
 * @property string estado
 * @property integer users_id
 */
class DocumentoInstitucional extends Model
{
    use SoftDeletes;

    public $table = 'documento_institucionals';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'fecha',
        'nombre',
        'descripcion',
        'url',
        'estado',
        'users_id'
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
        'estado' => 'string',
        'users_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required|min:3|max:100',
        'descripcion' => 'required|min:5',
        'estado' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\User::class, 'users_id', 'id');
    }
}
