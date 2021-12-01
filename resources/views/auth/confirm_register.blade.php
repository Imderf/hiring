@extends('layouts.app')
@section('content')

<section class='register'>
    <div class='content_background_register'>
        <div class='content_hiring'> 
            <img src="{{ asset('assets/images/icon/hiring.png') }}" alt="">
        </div>
        <div class='content_check'>
            <img src="{{ asset('assets/images/icon/check.png') }}" alt="">
            <p>Hemos confirmado tu mail exitosamente</p>
        </div>
        <div class='content_botton'>
            <a href="{{ route('dashboard.index') }}">Siguiente</a>        
        </div>
        
    </div>
</section>

@endsection