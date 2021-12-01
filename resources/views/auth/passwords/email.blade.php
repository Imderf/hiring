@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Recuperar contraseña') }}</div>
                <div class="card-body">  
                    <form method="POST" action="{{ route('usuario.sendlinkpassword') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electronico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar link de reestablecimiento') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @if(session('status'))
            <div class="col-md-8">
                <div class="alert alert-success">{{session('status')}}</div>                
            </div>
        @endif    

        @error('email')
            <div class="col-md-8">
                <div class="alert alert-warning">{{ $message }}</div>                
            </div>
        @enderror

               
    </div>
</div>
@endsection
