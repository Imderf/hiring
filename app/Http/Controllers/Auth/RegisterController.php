<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

use App\User;
use App\CategoriasComercios;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Services\EmailLinkiados;

class RegisterController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Register Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users as well as their
      | validation and creation. By default this controller uses a trait to
      | provide this functionality without requiring any additional code.
      |
     */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest');
    }

    public function registerc()
    {
        
        $cc = CategoriasComercios::
        where('id', '!=', 3)
        ->orderBy('id','DESC')
        //->take()
        ->get(); 

        return view('auth.registerc', [ 'cc' => $cc ]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
        return Validator::make($data, [
                    'name' => ['required', 'string', 'max:255'],
                    //'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'email' => 'required|email|unique:users,email',
                    'telefono' => 'required',
                    //'password'  => ['required','min:8']
                    'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
                    'password_confirmation' => 'min:6',
                    'cc_id' => 'required'
                        //'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data) {
        $user = User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'telefono' => $data['telefono'],
                    'password' => $data['password'],/*Hash::make(),*/
                    'estado' => 'A',
                    'cc_id' => $data['cc_id']
        ]);

        if ($user) {
            $emailLinkiados = new EmailLinkiados([$data['email']], 'Bienvenido a linkiados', 'emails.newuser', []);
            $emailLinkiados->send();
        }

        return $user;
    }

}
