@extends('layouts.app')

@section('content')
 <!-- GOOGLE -->
<meta name="google-signin-client_id" content="1029620471740-usd4fpot54vumkn3p83k65qrq7a3r17e.apps.googleusercontent.com">
<!-- <section class='content_background_login'>
    <p>Mileniumgroup todos los derechos reservados</p>
</section> -->
<section class='login_goo'>
    <div class='content_background_loginx'>
        <p>Customer Live Analysis Platform</p>
        <a href="{{ route('dashboard.index') }}">
            <img src="/public/assets/images/icon/log_google.png" alt="">
        </a>
        <div class="google-btn g-signin2" data-onsuccess="onSignIn"></div>
    </div>
</section>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script>

function onSignIn(googleUser)
{
    let profile = googleUser.getBasicProfile();
    auth("login", profile);

}


function signOut()
{
    //gapi.auth2.getAuthInstance().disconnect();

    let auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function ()
    {
        auth("logout");
        window.location.href = "../login";
    });
}



function auth(action, profile = null)
{
    let data = { UserAction : action };

    if(profile)
    {
         data =
            {
                UserName : profile.getGivenName(),
                UserLastName : profile.getFamilyName(),
                UserEmail : profile.getEmail(),
                UserImage : profile.getImageUrl(),
                UserAction : action
            };
    }


    $.ajax(
        {
            type: "POST",
            url: "../../core/user.php",
            data: data,
            success: function (data)
            {
                // let user = JSON.parse(data);
                console.log(data);
                // if(user.logged)
                // {
                //     $('#user_given_name').text( profile.getGivenName());
                //     $('#user_last_name').text( profile.getFamilyName());
                //     $('#user_email').text( profile.getEmail());
                //     $('#user_profile').attr( "src", profile.getImageUrl());
                //
                //     if(document.URL === "http://itic.tutoriales.com/google/login/")
                //     {
                //         window.location.href = "../home";
                //     }
                // }
                // else
                // {
                //     alert("La cuenta no esta registrada");
                //     signOut();
                //
                // }
            }
        }
    )
}
</script>
<!-- <section id="wrapper">
    <div class="login-register">
        <div class="row" style="height: 100%;">
            <div class="col-md-6 d-none d-sm-block background-gris">
                <img src="" class="logotipo">
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="login-box card shadow-box">
                    <div class="card-body">
                        <img src="/assets/images/Logotipo_Linkiados-02.png" alt="homepage" class="dark-logo center" />
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <h5 class="box-titile m-b-20 text-center">INGRESAR</h5>
                            <h1 class="titlelogin">LOGIN</h1>
                            <h6 class="box-title m-b-20 m-t-20 text-center">Bienvenido a CLAP.</h6>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input class="form-control shadow-input @error('email') is-invalid @enderror" name="email" type="text" required="" placeholder="{{ __('Email') }}" value="{{ old('email') }}" autocomplete="email" autofocus> 

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input id="password" type="password" class="form-control shadow-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contrase??a">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 font-14">
                                    <div class="checkbox checkbox-primary pull-left p-t-0">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Recordarme') }}
                                        </label>
                                    </div> 
                                
                                    @if (Route::has('password.request'))
                                        <a class="text-dark pull-right" href="{{ route('password.request') }}">
                                            {{ __('Olvid?? la contrase??a') }}
                                        </a>
                                    @endif                            
                                </div>
                            </div>
                            <div class="row m-t-20">
                                <div class="col-xs-12 col-md-6 m-b-10">
                                    <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">{{ __('Ingresar') }}</button>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a href="{{ route('register') }}" class="btn btn-outline-primary btn-lg btn-block text-uppercase waves-effect waves-light">{{ __('Registrarse') }}</a>
                                </div>
                            </div>                           
                        </form>

                        <form class="form-horizontal" id="recoverform" action="index.html">
                            <div class="form-group ">
                                <div class="col-xs-12">
                                    <h3>Recover Password</h3>
                                    <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-xs-12">
                                    <input class="form-control shadow-input" type="text" required="" placeholder="Email"> </div>
                            </div>
                            <div class="form-group text-center m-t-20">
                                <div class="col-xs-12">
                                    <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</section> -->
@endsection
