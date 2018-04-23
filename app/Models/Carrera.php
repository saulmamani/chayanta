<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Carrera
 * @package App\Models
 * @version April 20, 2018, 12:17 am UTC
 *
 * @property string nombre
 * @property string area
 * @property integer tiempo
 * @property string ruta
 */
class Carrera extends Model
{
    use SoftDeletes;

    public $table = 'carreras';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'descripcion',
        'area',
        'tiempo',
        'ruta'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'descripcion' => 'string',
        'area' => 'string',
        'tiempo' => 'integer',
        'ruta' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required|min:3|max:100',
        'descripcion' => 'required|min:3',
        'area' => 'required',
        'tiempo' => 'required',
        //'ruta' => 'required'
    ];


    public function facilitadores()
    {
        return $this->hasMany(\App\Models\Facilitador::class, 'carrera_id');
    }
}
