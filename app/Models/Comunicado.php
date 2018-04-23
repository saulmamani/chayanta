<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Comunicado
 * @package App\Models
 * @version April 23, 2018, 2:51 pm UTC
 *
 * @property \App\Models\User user
 * @property dateTime fecha
 * @property string titulo
 * @property string contenido
 * @property string estado
 * @property integer users_id
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
        'titulo' => 'string',
        'contenido' => 'string',
        'estado' => 'string',
        'users_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fecha' => 'required',
        'titulo' => 'required|min:3|max:100',
        'contenido' => 'required|min:5',
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
