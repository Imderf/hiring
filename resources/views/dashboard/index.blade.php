@extends('layouts.app') 
@section('content')
<section class='information'>
    <div class='content_background_information'>
        <div class='contetn_logo'>
            <img src="{{ asset('assets/images/icon/hiring.png') }}" alt="">
        </div>
        <div class='content_dash_hiring'>
            <div class="col-md-4 col-12">
                <a class="item it1" href="{{ route('vaca') }}">
                    <div class="">
                        <img src="{{ asset('assets/images/icon/item_h_1.png') }}" alt="">
                    </div>
                    <div class="col">
                        <p class="text">Solicitar Vacante</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-12">
                <a class="item it2" href="{{ route('solicitud.index') }}">
                    <div class="">
                        <img src="{{ asset('assets/images/icon/item_h_2.png') }}" alt="">
                    </div>
                    <div class="col">
                        <p class="text">Estado de mi Solicitud</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-12">
                <div class="item it3" href="{{ route('users') }}">
                    <div class="">
                        <img src="{{ asset('assets/images/icon/item_h_3.png') }}" alt="">
                    </div>
                    <div class="col">
                        <p class="text">Registros</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


@endsection     