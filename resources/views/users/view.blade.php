@extends('layout') 
@section('content')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Cliente - {{$user->name}}</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Clientes</a></li>
            <li class="breadcrumb-item">Ver</li>
            <li class="breadcrumb-item active">{{$user->id}}</li>
        </ol>
    </div>
    <div>
        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Perfil</h4>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-body">
                            <h3 class="box-title">Información</h3>
                            <hr class="m-t-0 m-b-40">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">ID:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$user->id}} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Nombre:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$user->name}} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Correo:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$user->email}} </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Ciudad:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$user->ciudad}} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Dirección:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$user->direccion}} </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Teléfono:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$user->ciudad}} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Categoria:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$user->categoriacomercio->nombre_cc}} </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Sitio Web:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$user->sitio_web}} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Redes:</label>
                                        <div class="col-md-9 social">
                                            <a class="form-control-static" href="{{$user->redes1}}" target="_blank"><i class="fa fa-facebook-square"></i></a>
                                            <a class="form-control-static" href="{{$user->redes1}}" target="_blank"><i class="fa fa-instagram"></i></a>
                                            <a class="form-control-static" href="{{$user->redes1}}" target="_blank"><i class="fa fa-youtube-square"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Redes 2:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$user->redes3}} </p>
                                        </div>
                                    </div>
                                </div>                               
                            </div>

                            <div class="row">
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">¿Quien es?:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$user->quien_es}} </p>
                                        </div>
                                    </div>
                                </div>                               
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Foto Perfil:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {!! $user->imagen !!} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>                          

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Estado:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {!! $user->estados !!} </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Creado:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$user->format_fecha}} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>                          
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <a href="{{ route('users.edit', $user) }}" class="btn-md btn-primary"> <i class="fa fa-pencil"></i> Editar</a>

                                            @if(Auth::user()->id == 3)
                                            <a href="{{route('users.index')}}" class="btn-md btn-inverse float-right">Regresar</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6"> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @if(Auth::user()->cc_id == 1)
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Linkear</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            @if(!empty($user->url_pago))
                            <p>Antes de utilizar cualquier servicio de Linkeados, copia y pega estas secuencias de comandos en la etiqueta <head>:</p>

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
  linkeados.initializeApp(linkeadoConfig);
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
.social .fa{
    font-size: 20px;
    color: #432874;
}
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

function copyToClipboard(text) {
    if (window.clipboardData && window.clipboardData.setData) {
        // IE specific code path to prevent textarea being shown while dialog is visible.
        return clipboardData.setData("Text", text); 

    } else if (document.queryCommandSupported && document.queryCommandSupported("copy")) {
        var textarea = document.createElement("textarea");
        textarea.textContent = text;
        textarea.style.position = "fixed";  // Prevent scrolling to bottom of page in MS Edge.
        document.body.appendChild(textarea);
        textarea.select();
        try {
            return document.execCommand("copy");  // Security exception may be thrown by some browsers.
        } catch (ex) {
            console.warn("Copy to clipboard failed.", ex);
            return false;
        } finally {
            document.body.removeChild(textarea);
        }
    }
}
</script>
@endsection
