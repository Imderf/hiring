@extends('layout') 
@section('content')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Crear Cliente</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('users.index')}}">Clientes</a></li>
            <li class="breadcrumb-item active">Nueva cliente</li>
        </ol>
    </div>
    <div>
        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
    </div>
</div>

<div class="container-fluid">   

    @if($errors->any())
    <div class="card border-0 shadow">
        <div class="card-body">
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                - {{ $error }} <br/>
                @endforeach
            </div>
        </div>
    </div>
    @endif

    <div class="row"> 
        <div class="col-lg-12">
            <form action="{{ route('users.store') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                <div class="card card-outline-info">
                    <div class="card-body">
                        <div class="form-body">
                            <h6 class="box-title">Ingrese los siguiente datos</h6>
                            <hr class="m-t-0 m-b-40">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-4">Nombre</label>
                                        <div class="col-md-8 ">
                                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-4">Categoria</label>
                                        <div class="col-md-8">
                                            <select class="form-control custom-select" name="cc_id" required>
                                                @foreach($cc as $item)
                                                <option value="{{$item->id}}" @if( $item->id == old('cc_id') ) {!! _('selected') !!} @endif >{{$item->nombre_cc}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-4">Ciudad</label>
                                        <div class="col-md-8 ">
                                            <input type="text" class="form-control" name="ciudad" value="{{ old('ciudad') }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-4">Dirección</label>
                                        <div class="col-md-8 ">
                                            <input type="text" class="form-control" name="direccion" value="{{ old('direccion') }}" required>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-4">Teléfono</label>
                                        <div class="col-md-8 ">
                                            <input type="text" class="form-control" name="telefono" value="{{ old('telefono') }}" required>
                                        </div>
                                    </div>                                    
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-4">Sitio Web</label>
                                        <div class="col-md-8 ">
                                            <input type="text" class="form-control" name="sitio_web" value="{{ old('sitio_web') }}" required>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-4">Estado</label>
                                        <div class="col-md-8">
                                            <select class="form-control custom-select" name="estado" required>
                                                <option value="A" selected>Activo</option>
                                                <option value="I">InActivo</option>
                                            </select>
                                        </div>
                                    </div>   
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-4">Contraseña</label>
                                        <div class="col-md-8 ">
                                            <input type="password" class="form-control" name="password" value="" required>
                                        </div>
                                    </div>          
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row m-b-10">
                                        <label class="control-label text-right col-md-4">¿Quién es?</label>
                                        <div class="col-md-8">
                                            <textarea rows="5" class="form-control" name="quien_es" style="height: 111px;">{{ old('quien_es') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-4">Img.Perfil</label>
                                        <div class="col-md-8">
                                            <img class="previoFondo m-b-5" style="height: 105px; width: 105px; display: none;">
                                            <div class="file-field">
                                                <div class="btn btn-photo btn-sm">
                                                    <span><i class="fa-camera fa"></i></span>
                                                    <input type="file" class="form-control" id="imgFondo" name="url_perfil">
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div> 

                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-4">Facebook</label>
                                        <div class="col-md-8 ">
                                            <input type="text" class="form-control" name="redes1" value="{{ old('redes1') }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-4">Instagram</label>
                                        <div class="col-md-8 ">
                                            <input type="text" class="form-control" name="redes2" value="{{ old('redes2') }}">
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-4">Youtube</label>
                                        <div class="col-md-8 ">
                                            <input type="text" class="form-control" name="redes3" value="{{ old('redes3') }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-4">Correo</label>
                                        <div class="col-md-8 ">
                                            <input type="text" class="form-control" name="email"  value="{{ old('email') }}" required>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>   
                        </div>                        
                    </div>
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-12">
                            @csrf
                            <a href="{{route('users.index')}}" class="btn-md btn-inverse float-right">Cancelar</a>
                            <button type="submit" class="btn-md btn-primary float-right  m-r-10">Guardar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .form-control{
        border-right: 1px solid #ced4da !important;
    }
</style>

<script>
    $(document).ready(function () {
        function readURL(input, doom) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('.' + doom).attr('src', e.target.result).show();
                }
                reader.readAsDataURL(input.files[0]);
                //$('.'+doom).val(input.files[0].name);              
            }
        }

        $("#imgFondo").change(function () {
            readURL(this, 'previoFondo');
        });
    });
</script>

@endsection
