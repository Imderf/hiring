@extends('layouts.app')

@section('content')
<!-- <section class='content_background_login'>
    <p>Mileniumgroup todos los derechos reservados</p>
</section> -->
<section class='login_goo'>
    <div class='content_background_loginx'>
        <p>Customer Live Analysis Platform</p>
        <a href="{{ route('dashboard.index') }}">
            <img src="/public/assets/images/icon/log_google.png" alt="">
        </a>
        <a href="{{ url('auth/google') }}" class="btn btn-lg btn-primary btn-block">
            <strong>Login With Google V2</strong>
        </a> 
    </div>
</section>
@endsection