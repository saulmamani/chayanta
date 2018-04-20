<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Comunicado
 * @package App\Models
 * @version April 20, 2018, 1:40 am UTC
 *
 * @property dateTime fecha
 * @property string titulo
 * @property string contenido
 * @property string estado
 */
class Comunicado extends Model
{
    use SoftDeletes;

    public $table = 'comunicados';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'fecha',
        'titulo',
        'contenido',
        'estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fecha' => 'datetime',
        'titulo' => 'string',
        'contenido' => 'string',
        'estado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'titulo' => 'required|min:3|max:100',
        'contenido' => 'required|min:5',
        'estado' => 'required'
    ];

    
}
