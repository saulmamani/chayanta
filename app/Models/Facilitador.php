<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Facilitador
 * @package App\Models
 * @version April 23, 2018, 3:10 am UTC
 *
 * @property \App\Models\Carrera carrera
 * @property integer codigoRDA
 * @property string ci
 * @property string expedido
 * @property string nombre
 * @property string apellido
 * @property dateTime fechaNacimiento
 * @property string lugarNacimiento
 * @property string nacionalidad
 * @property string estadoCivil
 * @property string genero
 * @property string celular
 * @property string profesion
 * @property integer carrera_id
 */
class Facilitador extends Model
{
    use SoftDeletes;

    public $table = 'facilitadors';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'codigoRDA',
        'ci',
        'expedido',
        'nombre',
        'apellido',
        'fechaNacimiento',
        'lugarNacimiento',
        'nacionalidad',
        'estadoCivil',
        'genero',
        'celular',
        'profesion',
        'carrera_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'codigoRDA' => 'integer',
        'ci' => 'string',
        'expedido' => 'string',
        'nombre' => 'string',
        'apellido' => 'string',
        'fechaNacimiento' => 'datetime',
        'lugarNacimiento' => 'string',
        'nacionalidad' => 'string',
        'estadoCivil' => 'string',
        'genero' => 'string',
        'celular' => 'string',
        'profesion' => 'string',
        'carrera_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'codigoRDA' => 'required',
        'ci' => 'required|min:7|max:15',
        'expedido' => 'required',
        'nombre' => 'required|min:3|max:20',
        'apellido' => 'required|min:3|max:50',
        'fechaNacimiento' => 'required',
        'estadoCivil' => 'required',
        'genero' => 'required',
        'celular' => 'required|min:7|max:20'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function carrera()
    {
        return $this->belongsTo(\App\Models\Carrera::class, 'carrera_id', 'id');
    }
}
