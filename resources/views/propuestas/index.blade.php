@extends('layout') 
@section('content')
    <div class='conntent_background prop'>
        <div class="content_background_gradient">
            <div class="container-fluid">
                <div class="row section1 int_c">
                    <div class='content'>
                        <div class='user'>
                            <img src="/assets/images/icon/user.png" alt="">
                            <p>Propuestas</p>
                        </div>
                        <div class='item'>
                            <select name='cliente'>
                                <option value="" selected disabled>Clientes</option>
                                @foreach($clientes as $item)
                                <option value="{{$item->id}}">{{$item->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class='item'>
                            <img src="/assets/images/icon/country.png" alt="">
                            <select name='pais'>
                                <option value="" selected disabled>País</option>
                                @foreach($paises as $item)
                                <option value="{{$item->id}}">{{$item->pnombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class='item'>
                            <img src="/assets/images/icon/project.png" alt="">
                            <select name='proyecto'>
                                <option value="" selected disabled>Proyecto</option>
                                @foreach($proyectos as $item)
                                <option value="{{$item->id}}">{{$item->pnombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class='item swiper-container swiper-container-h' style=''>
                            <div class="swiper-wrapper" name="" id="">
                                <div class="swiper-slide">Year</div>
                                <?php $year = 2018; while($year <= date('Y')): ?>
                                <div class="swiper-slide" data-year="<?=$year?>"><?=$year?></div>
                                <?php $year++; endwhile; ?>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination-h"></div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next marcas-next"></div>
                            <div class="swiper-button-prev marcas-prev"></div>
                        </div>
                    </div>
                </div>
                <div class='row section2 int_c'>
                    <div class='content'>
                        <div class='add_invoice' onclick='modalform()'>
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            Adicionar
                        </div>
                        <div class="table-responsive">
                            <div class=''>
                                <table id="table" class="">
                                    <thead>
                                        <tr>
                                            <th>
                                                <p>
                                                    Cliente
                                                </p>
                                            </th>
                                            <th>
                                                <p>
                                                    Proyecto
                                                </p>
                                            </th>
                                            <th>
                                                <p>
                                                    Fecha
                                                </p>
                                            </th>
                                            <th>
                                                <p>
                                                    País
                                                </p>
                                            </th>
                                            <th>
                                                <p>
                                                    Fuente
                                                </p>
                                            </th>
                                            <th>
                                                <p>
                                                    Valor
                                                </p>
                                            </th>
                                            <th>
                                                <p>
                                                    Status
                                                </p>
                                            </th>
                                            <th>
                                                <p>
                                                    Acción
                                                </p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($propuestas as $item)
                                        <tr>
                                            <td>
                                                {{$item->cliente->mnombre}}  
                                            </td>
                                            <td>
                                                <a href="#">
                                                    {{$item->PHPproyectos()}}  
                                                </a>
                                            </td>
                                            <td >
                                                {{$item->fomatoFecha($item->fecha_ini,'m-Y')}}    
                                            </td>
                                            <td>
                                                {{$item->PEPpaises()}}  
                                            </td>
                                            <td>
                                                {{$item->prospecto->fuente->fnombre}}  
                                            </td>
                                            <td>
                                                {{$item->fomatoMoney($item->valor_sin_impuestos)}}  
                                            </td>
                                            <td>
                                                <a href="#">
                                                    {{$item->estado->enombre}}  
                                                </a>
                                            </td>
                                            <td>
                                                <button class='editar' type="button" data-id='{{$item->id}}' name="button">Editar</button>                                                
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal_form modal_form1 prop" id="PopupLegal">
        <div class='content_modal'>
            <div class="cuerpo_modal_form">
                <div class="info_modal">
                    <span class="close-btn" onclick='out_modal()'><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                    <div class="h-100">
                        <div class='title'>
                            <i class="fa fa-paperclip" aria-hidden="true"></i>
                            <h5>Adicionar Propuesta</h5>
                        </div>
                        <div class='add_client'>
                            <div class='btn' onclick='modalform2()'>
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                Adicionar Prospecto
                            </div>
                        </div>
                        <div class='content_form'>
                            <form action="{{ route('propuestas.store') }}" method="POST" enctype="multipart/form-data">
                                <div class='form_group'>
                                    <label for="prospectos">Prospecto / Cliente</label>
                                    <select name="prospecto" id="prospectos" class="form-control select2" required>
                                        <option value="" selected disable>Seleccione Prospecto / Cliente</option>
                                        @foreach($prospectos as $item)
                                        <option value="{{$item->id}}"
                                        @if( $item->id == old('prospectos_id') ) {!! _('selected') !!} @endif
                                        >{{$item->mnombre}}</option>
                                        @endforeach
                                    </select>
                                </div>                             
                                <div class='form_group'>
                                    <label for="">Tipo de Venta</label>
                                    <select name="tp" required>
                                        <option value="" selected disable>Seleccione Tipo de Venta</option>
                                        @foreach($tiposventas as $item)
                                        <option value="{{$item->id}}">{{$item->tnombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class='form_group'>
                                    <label for="">Estado</label>
                                    <select name="estado" required>
                                        <option value="" selected disable>Seleccione Estado</option>
                                        @foreach($estados as $item)
                                        <option value="{{$item->id}}">{{$item->enombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class='form_group'>
                                    <label for="">País</label>
                                    <select name="paises[]" class='select2' multiple="multiple" required>
                                        @foreach($paises as $item)
                                        <option value="{{$item->id}}">{{$item->pnombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class='form_group'>
                                    <label for="">Proyecto</label>
                                    <select name="proyectos[]" class='select2' multiple="multiple" required>
                                        @foreach($proyectos as $item)
                                        <option value="{{$item->id}}">{{$item->pnombre}}</option>
                                        @endforeach
                                    </select>
                                    <div class='btn' onclick='modalform4()'>
                                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                        Adicionar Proyecto
                                    </div>
                                </div>
                                <div class='form_group'>
                                    <label for="">Descripción de propuesta</label>
                                    <input type="text" name="descripcion" placeholder='Detalle los propuesta' required>
                                </div>
                                <div class='form_group'>
                                    <label for="">Valor (sin impuestos)</label>
                                    <input type="number" name="valor" required>
                                </div>
                                <div class='form_group'>
                                    <label for="">Moneda</label>
                                    <select name="moneda" required>
                                        <option value="" selected disable>Seleccione</option>
                                        @foreach($monedas as $item)
                                        <option value="{{$item->id}}">{{$item->mnombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class='form_group'>
                                    <label for="">Fecha Servicio</label>
                                    <input class='double_input picker_date' type="text" name="finicio" placeholder='Desde' required>
                                    <input class='double_input picker_date' type="text" name="ffinal" placeholder='Hasta' required>
                                </div>
                                <div class='form_group'>
                                    <label for="">Duración (Mes)</label>
                                    <input type="number" name="duracion" required>
                                </div>
                                <div class='form_group justify-content-between mt-3'  >
                                    <div>
                                        <div class='file' id='file_quote'>
                                            <input class='file__input--file' type="file" name="archivo" id="quote_file" required>
                                            <label class="file__input--label" id="labelquote_file" for="quote_file" data-text-btn="Upload"><i class="fa fa-camera" aria-hidden="true"></i>Upload File</label>
                                        </div>
                                    </div>
                                    <div class='d-flex align-items-center'>
                                        <div class='btn button_form_close' onclick='out_modal()'>
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                            Close
                                        </div>
                                        @csrf
                                        <button class='btn button_form_save'>
                                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal_form modal_form2 prop" id="PopupLegal">
        <div class='content_modal'>
            <div class="cuerpo_modal_form">
                <div class="info_modal">
                    <span class="close-btn" onclick='out_modal1()'><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                    <div class="h-100">
                        <div class='title'>
                            <i class="fa fa-address-card" aria-hidden="true"></i>
                            <h5>Adicionar Prospecto</h5>
                        </div>                        
                        <div class='content_form'>
                            <form action="{{ route('prospectos.store') }}" method="POST" enctype="multipart/form-data">
                                <div class='form_group'>
                                    <label for="">Nombre</label>
                                    <input type="text" placeholder='Ingrese nombre' name="pnombre" value="{{ old('pnombre') }}" required>
                                </div>
                                <div class='form_group'>
                                    <label for="">Logo</label>
                                    <input type="file" placeholder='Cargue una imagen' name='logo'>
                                </div>
                                <div class='form_group'>
                                    <label for="">Fuente</label>
                                    <select class="form-control" name="fuentes_id">
                                        <option value="">Seleccione una fuente</option>
                                        @foreach($fuentes as $item)
                                        <option value="{{$item->id}}"
                                        @if( $item->id == old('fuentes_id') ) {!! _('selected') !!} @endif
                                        >{{$item->fnombre}}</option>
                                        @endforeach
                                    </select>                                    
                                </div>
                                <div class='form_group justify-content-end mt-3'  >
                                    <div class='d-flex'>
                                        <div class='btn button_form_close' onclick='out_modal1()'>
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                            Close
                                        </div>
                                        @csrf
                                        <button class='btn button_form_save'>
                                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                                            Save
                                        </button>
                                    </div>
                                </div>                              
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal_form modal_form3 prop" id="PopupLegal">
        <div class='content_modal'>
            <div class="cuerpo_modal_form">
                <div class="info_modal">
                    <span class="close-btn" onclick='out_modal1()'><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                    <div class="h-100 form-edit">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal_form modal_form4 prop" id="PopupLegal">
        <div class='content_modal'>
            <div class="cuerpo_modal_form">
                <div class="info_modal">
                    <span class="close-btn" onclick='out_modal4()'><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                    <div class="h-100">
                        <div class='title'>
                            <i class="fa fa-address-card" aria-hidden="true"></i>
                            <h5>Adicionar Proyecto</h5>
                        </div>                        
                        <div class='content_form'>
                            <form action="{{ route('proyectos.store') }}" method="POST" enctype="multipart/form-data">
                                <div class='form_group'>
                                    <label for="">Nombre</label>
                                    <input type="text" placeholder='Ingrese nombre' name="pnombre" value="{{ old('pnombre') }}" required>
                                </div>                               
                                <div class='form_group justify-content-end mt-3'  >
                                    <div class='d-flex'>
                                        <div class='btn button_form_close' onclick='out_modal4()'>
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                            Close
                                        </div>
                                        @csrf
                                        <button class='btn button_form_save'>
                                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                                            Save
                                        </button>
                                    </div>
                                </div>                              
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function () {
        $('.editar').click(function(e){
            e.preventDefault();
            let id = $(this).data('id');
            $_token = "{{ csrf_token() }}";
            $.ajax({
                headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
                url: "{{ route('propuestas.editarajax') }}",
                type: "POST", 
                cache: false,
                data: { 'id': id, '_token': $_token }, //see the $_token
                datatype: 'html',
                success: function (response) {
                    $('.form-edit').html(response.html);  
                    $('.modal_form3').show();                 
                },
                error: function (error) {
                    console.log(error);
                }
            });
        });       
    });
    function modalform4() {
        $('.modal_form4').show();    
    }
    function out_modal4() {
        $('.modal_form4').hide();    
    }
    </script>

@endsection     