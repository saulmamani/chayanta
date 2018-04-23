<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class Fachada extends Controller
{
    public static function crearEstudiante($data)
    {
        return User::create([
            'name' => $data['nombre'].' '. $data['apellido'],
            'email' => $data['codigoRUDE'],
            'password' => bcrypt($data['codigoRUDE']),
            'cargo' => '',
            'rol' => 'Estudiante',
        ]);
    }

    public static function crearFacilitador($data)
    {
        return User::create([
            'name' => $data['nombre'].' '. $data['apellido'],
            'email' => 'rda'.$data['codigoRDA'],
            'password' => bcrypt($data['codigoRDA']),
            'cargo' => '',
            'rol' => 'Facilitador',
        ]);
    }

    public static function eliminarUsuario($codigo)
    {
        $user = User::Where('email', '=', $codigo)->first();
        if (! empty($user))
        {
            User::destroy($user->id);
        }
    }
}
