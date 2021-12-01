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
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <h5 class="box-titile m-b-20 text-center" style="color: 432874">REGISTRO</h5>
                            <h6 class="box-title m-b-20 m-t-20 text-center">Bienvenido a Linkiados, la plataforma<br/> para venders.</h6>
                            
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input class="form-control shadow-input @error('name') is-invalid @enderror" name="name" type="text" required="" placeholder="{{ __('Nombre') }}" value="{{ old('name') }}"> 
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

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
                                    <input class="form-control shadow-input @error('telefono') is-invalid @enderror" name="telefono" type="text" required="" placeholder="{{ __('Teléfono') }}" value="{{ old('telefono') }}"> 
                                    @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <input type="hidden" name="cc_id" value="1">
                            <!--
                            <div class="form-group">
                                <div class="col-xs-12">
                                        <select class="form-control shadow-select  custom-select @error('cc_id') is-invalid @enderror" name="cc_id" required>
                                            <option value="" selected>¿Que eres?</option>
                                            @foreach($cc as $item)
                                            <option value="{{$item->id}}" @if( $item->id == old('cc_id') ) {!! _('selected') !!} @endif >{{$item->nombre_cc}}</option>
                                            @endforeach
                                        </select>
                                </div>
                                @error('cc_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div> 
                            -->
                           
                            <div class="form-group">
                                <div class="col-xs-12">                                  
                                    <input id="password" type="password" class="form-control shadow-input @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Contraseña') }}" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input id="password-confirm" type="password" class="form-control shadow-input" name="password_confirmation" required autocomplete="new-password"  placeholder="{{ __('Confirmar Contraseña') }}" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox-signup" type="checkbox">
                                        <label for="checkbox-signup">Yo acepto todos los <a href="https://www.linkiados.com/contrato-comercios-linkiados/" target="_blank">Términos y Condiciones</a></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center m-t-20">
                                <div class="col-xs-12">
                                    <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Registrar</button>
                                </div>
                            </div>
                            <div class="form-group m-b-0">
                                <div class="col-sm-12 text-center">
                                    <a href="{{ route('register') }}" class="text-info m-l-5"><b>Soy Afiliado</b></a>
                                </div>
                            </div>
                            <div class="form-group m-b-0">
                                <div class="col-sm-12 text-center">
                                    <div>Ya tienes cuenta? <a href="{{ route('login') }}" class="text-info m-l-5"><b>Login</b></a></div>
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
