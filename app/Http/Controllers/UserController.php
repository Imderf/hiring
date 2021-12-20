<?php

namespace App\Http\Controllers;

use App\User;
use App\Vacantes;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::latest()->with('vacantes')->get();
        /* dd($users); */
        /* dd($users); */
        return view('usuarios.usuariosIndex', [
            'users' => $users
        ]);
        /* return view('users.index', [
            'users' => $users
        ]); */
    } 

    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => ['required','email','unique:users'],
            'password'  => ['required','min:8']
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return back();
    }

    public function destroy(User $user)
    {
        $user->delete();

        return back();        
    }


    public function status_approved($id){

		$users_aprobados = User::findOrfail($id);

		$users_aprobados->fill([

			'estado' => 'A',
			
		]);
		$users_aprobados->update();

        

        $users = User::latest()->with('vacantes')->get();
        return view('usuarios.usuariosIndex', [
            'users' => $users
        ]);
    }


    public function status_invalid($id){

		$users_aprobados = User::findOrfail($id);

		$users_aprobados->fill([

			'estado' => 'I',
			
		]);
		$users_aprobados->update();

        

        $users = User::latest()->with('vacantes')->get();
        return view('usuarios.usuariosIndex', [
            'users' => $users
        ]);
    }
}

