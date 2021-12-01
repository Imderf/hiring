@extends('layouts.app')

@section('content')

<section id="wrapper">
    <div class="login-register">
        <div class="row" style="height: 100%;">
            <div class="col-md-6 d-none d-sm-block background-gris">
                <img src="/assets/images/Logotipo_Linkiados-08.png" class="logotipo">
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="login-box card shadow-box">
                    <div class="card-body">
                        <img src="/assets/images/Logotipo_Linkiados-02.png" alt="homepage" class="dark-logo center" />
                        <form method="POST" action="{{ route('usuario.updatepassword') }}">
                            @csrf
                            <input type="hidden" value="{{$hash}}" name="hash">
                            <h5 class="box-titile m-b-20 text-center" style="color: 432874">ASIGNAR CONTRASEÑA</h5>
                            <h1 class="titlelogin" style="font-size: 40px;">CONTRASEÑA</h1>
                            <h6 class="box-title m-b-20 m-t-20 text-center">Por favor ingrese la nueva contraseña.</h6>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input id="password" type="password" class="form-control shadow-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input id="password-confirm" type="password" class="form-control shadow-input @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" placeholder="Repetir contraseña">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 font-14">       
                                    <a class="text-dark pull-right" href="/login">
                                        {{ __('Ir a Login') }}
                                    </a>                        
                                </div>
                            </div>
                            <div class="row m-t-20">
                                <div class="col-xs-12 col-md-12 m-b-12 te">
                                    <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">{{ __('ACEPTAR') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</section>

@endsection
