<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use DateTime;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use App\Http\Services\EmailLinkiados;
use Illuminate\Support\Facades\Validator;

class ResetPasswordController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Password Reset Controller
      |--------------------------------------------------------------------------
      |
      | This controller is responsible for handling password reset requests
      | and uses a simple trait to include this behavior. You're free to
      | explore this trait and override any methods you wish to tweak.
      |
     */

use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function resetpassword($hash) {
        $user = User::where('password_reset', $hash)->first();
        if ($user) {
            return view('auth.passwords.set', ['hash' => $hash]);
        }

        return redirect()->route('password.request')->withErrors(['email' => 'Link no valido.']);
    }

    public function resetpasswordhash(Request $request) {
        $user = User::where('email', $request->get('email'))->first();
        if ($user) {
            $n = new DateTime();
            $hash = $n->getTimestamp() . rand(0, 1000) . rand(0, 1000);

            $user->password_reset = $hash;
            $user->save();

            $emailLinkiados = new EmailLinkiados([$request->get('email')], 'Recuperar contraseña linkiados', 'emails.recoverpassword', ['name' => $user->name, 'hash' => $hash]);
            $emailLinkiados->send();

            return redirect()->route('password.request')->with('status', 'Le enviamos lo detalles a su correo por favor revisar spam.');
        }

        $request->flash();
        return redirect()->route('password.request')->withErrors(['email' => 'Su correo no esta asociado a un usuario.']);
    }

    public function updatepassword(Request $request) {

        $validatedData = $request->validate([
            'hash' => 'required',
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        $user = User::where('password_reset', $request->get('hash'))->first();

        if ($user) {
            $user->fill([
                'password' => $request->get('password')
            ])->save();
            #$user->password = Hash::make();
            $user->password_reset = null;
            $user->save();


            return redirect()->route('home.index');
        }

        return redirect()->route('password.request')->withErrors(['email' => 'Link no valido.']);
    }

}
