@extends('layout') 
@section('content') 
<div class="row page-titles">
    @if(Auth::user()->cc_id == 3)
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Editar Cliente</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('users.index')}}">Clientes</a></li>
            <li class="breadcrumb-item active">Editar cliente</li>
        </ol>
    </div>
    <div>
        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
    </div>
    @else
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Perfil</h3>
    </div>
    @endif
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
            <form action="{{ route('users.update', $user) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            <div class="card card-outline-info">              
                <div class="card-body">
                    <div class="form-body">
                        <h3 class="box-title">Ingrese los siguiente datos</h3>
                        <hr class="m-t-0 m-b-40">                            
                        <div class="row">                            
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4">Nombre</label>
                                    <div class="col-md-8 ">
                                        <input type="text" class="form-control" placeholder="Ingrese el nombre" name="name" value="{{ old('name', $user->name) }}" required>
                                        
                                    </div>
                                </div>  
                                @if(Auth::user()->cc_id == 3)
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4">Categoría</label>
                                    <div class="col-md-8">
                                        <select class="form-control custom-select" name="cc_id" required>
                                            @foreach($cc as $item)
                                            <option value="{{$item->id}}" @if( $item->id == old('cc_id', $user->cc_id) ) {!! _('selected') !!} @endif >{{$item->nombre_cc}}</option>
                                            @endforeach 
                                        </select>
                                    </div>
                                </div>
                                @endif

                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4">Ciudad</label>
                                    <div class="col-md-8 ">
                                        <input type="text" class="form-control" name="ciudad" value="{{ old('ciudad', $user->ciudad) }}" required>
                                        
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4">Dirección</label>
                                    <div class="col-md-8 ">
                                        <input type="text" class="form-control" name="direccion" value="{{ old('direccion', $user->direccion) }}" required>
                                        
                                    </div>
                                </div> 

                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4">Teléfono</label>
                                    <div class="col-md-8 ">
                                        <input type="text" class="form-control" name="telefono" value="{{ old('telefono', $user->telefono) }}" required>
                                        
                                    </div>
                                </div> 
                                <!--
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4">Contacto</label>
                                    <div class="col-md-8">
                                        <select class="form-control" name="contacto">
                                        </select>                                       
                                    </div>
                                </div>
                                -->

                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4">Sitio Web</label>
                                    <div class="col-md-8 ">
                                        <input type="text" class="form-control" name="sitio_web" value="{{ old('sitio_web', $user->sitio_web) }}" required>
                                        
                                    </div>
                                </div>     
                                @if(Auth::user()->cc_id == 3)
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4">Estado</label>
                                    <div class="col-md-8">
                                        <select class="form-control custom-select" name="estado" required>
                                            <option value="A" @if( $user->estado == 'A' ) {!! _('selected') !!} @endif >Activo</option>
                                            <option value="I" @if( $user->estado == 'I' ) {!! _('selected') !!} @endif >InActivo</option>
                                        </select>
                                    </div>
                                </div>   
                                @endif
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4">Contraseña</label>
                                    <div class="col-md-8 ">
                                        <input type="password" class="form-control" name="password">
                                        
                                    </div>
                                </div>                              
                            </div>

                            <div class="col-md-6">

                                <div class="form-group row m-b-10">
                                    <label class="control-label text-right col-md-4">¿Quién es?</label>
                                    <div class="col-md-8">
                                        <textarea rows="4" class="form-control" name="quien_es" style="height: 111px;">{{ old('quien_es', $user->quien_es) }}</textarea>                                        
                                    </div>
                                </div> 

                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4">Img.Perfil</label>
                                    <div class="col-md-8">
                                        <img class="previoFondo m-b-5" style="height: 105px; width: 105px;" src="{{url('storage/app/public/'.$user->url_perfil)}}">
                                        <div class="file-field">
                                            <div class="btn btn-photo btn-sm">
                                                <span><i class="fa-camera fa"></i></span>
                                                <input type="file" class="imgFondo" name="url_perfil_new"> 
                                            </div>
                                        </div>                                          
                                    </div>
                                    <input type="hidden" name="url_perfil" value="{{$user->url_perfil}}"/>
                                </div>       

                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4">Facebook</label>
                                    <div class="col-md-8 ">
                                        <input type="text" class="form-control" name="redes1" value="{{ old('redes1', $user->redes1) }}">
                                        
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4">Instagram</label>
                                    <div class="col-md-8 ">
                                        <input type="text" class="form-control" name="redes2" value="{{ old('redes2',$user->redes2) }}">
                                        
                                    </div>
                                </div> 

                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4">Youtube</label>
                                    <div class="col-md-8 ">
                                        <input type="text" class="form-control" name="redes3" value="{{ old('redes3',$user->redes3) }}">
                                        
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4">Correo</label>
                                    <div class="col-md-8 ">
                                        <input type="text" class="form-control" placeholder="Ingrese el email" name="email"  value="{{ old('email', $user->email) }}" required>
                                        
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
                        @method('PUT')
                        
                        @if(Auth::user()->id == 3)
                        <a href="{{route('users.index')}}" class="btn-md btn-inverse float-right">Cancelar</a>
                        @else
                        <a href="{{route('users.show', $user)}}" class="btn-md btn-inverse float-right">Cancelar</a>
                        @endif

                        <button type="submit" class="btn-md btn-primary float-right  m-r-10">Guardar</button>
                    </div>
                </div>
            </div>
            </form>

            @if(Auth::user()->cc_id == 1)
            <br/>
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Linkear</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            @if(!empty($user->url_pago))
                            <p>Copie la etiqueta a continuación y péguela entre las etiquetas &lt;head&gt;&lt;/head&gt; de todas las páginas de su sitio web. Solo debe instalar la etiqueta global del sitio una vez por cuenta, incluso si hace un seguimiento de varias acciones.</p>

                            <div class="form-group row">                              
                                <pre class='code code-javascript'>
                                    <label>JS</label>
                                    <code id="code_copy">&lt;!-- The core Linkeado JS SDK is always required and must be listed first --&gt;
&lt;script src="https://app.linkiados.com/linkeadoscom.js"&gt;&lt;/script&gt;
&lt;script&gt;
  // Your web app's Linkeados configuration
  var linkeadoConfig = {   
    vendorEmail: "{{$user->email}} ",
    urlpay: "{{$user->url_pago}}"
  };
  // Initialize Linkeados
  linkeadosApp(linkeadoConfig);
&lt;/script&gt;</code>
                                <div class="copiado">Copiado</div>
                                </pre>  
                            </div>
                            @else
                            <p>Debe ingresar la url de pago de su sitio web</p>
                            @endif

                            <form action="{{ route('users.updateurl', $user) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-1">URL Pago</label>
                                    <div class="col-md-6 input-group">
                                        <input type="text" class="form-control" name="url_pago" value="{{$user->url_pago}}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                                <i class="fa fa-pencil"></i>
                                            </span>
                                        </div>                                        
                                    </div>
                                    <div class="col-md-2">
                                        @csrf
                                        <button type="submit" class="btn-md btn-primary float-right  m-r-10">Guardar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>    
</div>
<style>
/* CSS Simple Pre Code */
pre {
    background: #333;
    white-space: pre;
    word-wrap: break-word;
    overflow: auto;
}

pre.code {
    margin: 20px 25px;
    border-radius: 4px;
    border: 1px solid #292929;
    position: relative;
    width: 100%;
}

pre.code label {
    font-family: sans-serif;
    font-weight: bold;
    font-size: 13px;
    color: #ddd;
    position: absolute;
    left: 1px;
    top: 15px;
    text-align: center;
    width: 60px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    pointer-events: none;
}

pre.code code {
    font-family: "Inconsolata","Monaco","Consolas","Andale Mono","Bitstream Vera Sans Mono","Courier New",Courier,monospace;
    display: block;
    margin: 0 0 0 60px;
    padding: 15px 16px 14px;
    border-left: 1px solid #555;
    overflow-x: auto;
    font-size: 13px;
    line-height: 19px;
    color: #E2CC0B;
}

pre::after {
    content: "copy";
    padding: 0;
    width: auto;
    height: auto;
    position: absolute;
    right: 18px;
    top: 14px;
    font-size: 12px;
    color: #ddd;
    line-height: 20px;
    overflow: hidden;
    -webkit-backface-visibility: hidden;
    transition: all 0.3s ease;
}

pre:hover::after {
   color: red;
}

pre.code-javascript code {
    color: #E2CC0B;
}

pre.code-jquery code {
    color: #4dd0e1;
}

.copiado {
    position: absolute;
    height: 100%;
    width: 100%;
    background: rgb(0,0,0,0.8);
    text-align: center;
    top: 0;
    line-height: 300px;
    color: white;
    font-size: 20px;
    display:none;
}
</style>

<script>
    $(document).ready(function() {
        function readURL(input, doom) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();                
                reader.onload = function (e) {                   
                    $('.'+doom).attr('src', e.target.result).show();
                }
                reader.readAsDataURL(input.files[0]);
                //$('.'+doom).val(input.files[0].name);              
            }
        }

        $(".imgFondo").change(function(){
            readURL(this, 'previoFondo');
        });
    });
    var btn = document.querySelector(".code-javascript");
    if(btn) {

        btn.onclick = function() {
            var copiado = document.querySelector('.copiado');
            copiado.style.display = 'block';
            var result = copyToClipboard(document.querySelector('#code_copy').textContent);
            console.log("copied?", result);
            setTimeout(() => {
                copiado.style.display = 'none';
            }, 3800);
        };
    }    
</script>
@endsection