<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Flash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::Where('rol', '<>', 'Estudiante')
                          ->Where('rol','<>','Facilitador')->get();
        //dd($usuarios);
        return view('users.index')->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

     public function validar(Request $request)
    {
        $this->validate($request, 
            [
            'email' => 'required|email|unique:users', 
            'name' => 'required|min:3', 
            'password' => 'required|string|min:6|confirmed',
            'rol' => 'required'
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validar($request);
        $input = $request->all();
        $user = User::create($input);

        Flash::success('Facilitador saved successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if (empty($user)) {
            Flash::error('user not found');

            return redirect(route('users.index'));
        }

        User::destroy($id);

        Flash::success('usuario eliminado successfully.');

        return redirect(route('users.index'));
    }
}
