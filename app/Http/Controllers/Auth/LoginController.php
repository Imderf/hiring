<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers; 
use Laravel\Socialite\Facades\Socialite;

/* use Socialite; */
use Auth;
use Exception;
use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    //protected $redirectTo = '/login';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function show()
    {
        if (Auth::check()) 
            return Redirect::route('dashboard');

        return View::make('login');
    }

    /* public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {  
            $user = Socialite::driver('google')->user();   
            $finduser = User::where('google_id', $user->id)->first(); 

            if($finduser){   
                Auth::login($finduser);  
                return redirect('/dashboard');   
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id
                ]);  
                Auth::login($newUser);   
                return redirect('/dashboard');
            }  
        } catch (Exception $e) {
            return redirect('/login');
        }
    }  */
    
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
        
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback(Request $request)
    {

        if($request->get('error')){
            return redirect('/login');
        }

        /* $userSocialite = Socialite::driver('google')->user(); */

       /* $user = User::where('email', $userSocialite->getEmail())->first(); */
       $userSocialite = Socialite::driver('google')->user();
       $finduser = User::where('google_id', $userSocialite->id)->first();

       if($finduser){
            Auth::login($finduser);  
            return redirect('/dashboard');
        }
        else{
            $newuser =  User::create([
                'name' => $userSocialite->getName(),
                'email' => $userSocialite->getEmail(),
                'roles_usuario_id' => 1 ,
                'estado' => 'A',
                'google_id' => $userSocialite->getId(),
    
                ]);
        }
        

       auth()->login($newuser);
       return redirect('/confirm_register');

       

       
    }
}
