<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function comunicados()
    {
        return $this->hasMany(\App\Models\Comunicado::class, 'users_id');
    }

    public function documentosInstitucionales()
    {
        return $this->hasMany(\App\Models\DocumentoInstitucional::class, 'users_id');
    }
}
