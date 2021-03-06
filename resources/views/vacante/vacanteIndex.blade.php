@extends('layout')
@section('content')
<section class='content_back_vac'>
    <div class="info_modal">
        <div class="h-100"> 
            <div class="title">
                <h5>Solicitar Vacante</h5>
            </div>
            <div class="content_form">
                <form method="post" action="{{ URL::action('VacantesController@store') }}" enctype=multipart/form-data>
                    @csrf
                    <div class="form_group">
                        <label for="">Solicitado por</label>
                        <select id="users" name="users" onchange="userFunc();" required>
                            <option value="" selected disabled>Seleccionar</option>
                            @foreach ($users as $u)
                                <option value="{{ $u->id }}" {{-- selected --}}>
                                    {!! $u->name !!}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form_group">
                        <label for="">e-mail</label>
                        <div id="list_email" name="list_email" required {{-- style="width:400px; --}}></div>
                    </div>
                    <div class="form_group">
                        <label for="">Posición a solicitar </label>
                        <select id="id_cargo" name="id_cargo" onchange="changeFunc(); cargo_descripcion();" required>
                            <option value="" selected disabled>Seleccionar</option>
                            @foreach ($cargos as $c)
                                <option value="{{ $c->id }}" {{-- selected --}}>
                                   {!! $c->nombre !!}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class='provisional'>
                        <label for="">Cargo:</label>
                        <div contenteditable="true" id="cargo_fx"></div>
                        {{-- <input type="text" name="name_cargo" id="name_cargo"> --}} {{-- value='Nombre del cargo' --}}
                        <label for="">Descripción del cargo:</label>
                        <div contenteditable="true" id="descripcion_cargo_fx" readonly></div>
                        {{-- <textarea name="description_cargo" id="description_cargo" cols="30" rows="10"></textarea> --}}
                        <div class=fun_req>
                            <div class="col-md-3 content_title">
                                <div class="col-md-4 p-0">
                                    <img src="{{ asset('assets/images/icon/desktop.png') }}" alt="">
                                </div>
                                <div class="col-md-8 p-0">
                                    <h4>Funciones</h4>
                                </div> 
                            </div>
                            <div class="col-md-9 content_list">
                                <div class="p-3">
                                    <ul class="vacante-funciones-list" id="vacante-funciones-list">
                                                
                                        {{-- <li class="vacante-function-item"> --}}
                                            {{-- <p contenteditable="true" id="list_fx" name="list_fx[]" class="listasprinc"></p> --}}
                                            <input type="hidden" onclick="" />
                                            <div id="list_fx" name="list_fx" class="listasprinc"></div>
                                        
                                            {{-- <span onclick="deleteFunction(this)" class="fa fa-trash delete-function-button"></span> --}}
                                        {{-- </li> --}}
                                          
                                    </ul>
                                    {{-- <button class="add-function-button" onclick="addFunction()" type="button">Agregar función<span class="fa fa-plus"></span></button> --}}
                                    <div class="col-md-10">
                                        <BR><BR><BR></BR></BR></BR>
                                        <table class="table">
                                            <tr>
                                                 <th><label for="">Funciones Nuevas</label>
                                                    <input type="text" name="horario_nuevo" id="horario_nuevo" placeholder="" class="form-control" />
                                                    <div  id="errorhora" style="display:none;color:#CC0000;font-size: 13px">Valor obligatorio.</div>
                                                 </th>
                                                 <th>
                                                     <label for="" style="color:white"></label>
                                                    <button type="button" name="add" id="add" class="btn-success2"><span class="fa fa-plus" style="color:white"></span></button>
                                                </th>
                                            </tr>
                                        </table>
                                        {{-- <div  id="errorFormatoHora" style="display:none;color:#CC0000">La Hora ingresada no es correcta</div> --}}
                                    </div>

                                    <div class="row">
                                        <div class="col-md-1"></div>
                                            <div class="col-md-10">
                                                <table class="table" id="dynamicTable">
                                                    <tr bgcolor="#fb8668">
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                </table>
                                            </div>
                                            {{-- <div class="col-md-4"></div> --}}
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class=fun_req>
                            <div class="col-md-3 content_title">
                                <div class="col-md-4 p-0">
                                    <img src="{{ asset('assets/images/icon/file.png') }}" alt="">
                                </div>
                                <div class="col-md-8 p-0">
                                    <h4>Requisitos</h4>
                                </div>
                            </div>
                            <div class="col-md-9 content_list">
                                <div class="p-3">
                                    <ul class="vacante-requisitos-list" id="vacante-requisitos-list">
                                        {{-- <li class="vacante-function-item"> --}}
                                            <input type="hidden" onclick="" />
                                            <p id="list_requisitos" name="list_requisitos" class="listasprinc2"></p>
                                       {{--  </li> --}}
                                    </ul>
                                    <div class="col-md-10">
                                        <BR><BR><BR></BR></BR></BR>
                                        <table class="table">
                                            <tr>
                                                 <th><label for="">Requisitos Nuevos</label>
                                                    <input type="text" name="horario_nuevo2" id="horario_nuevo2" placeholder="" class="form-control" />
                                                    {{-- <div  id="errorhora" style="display:none;color:#CC0000;font-size: 13px">Valor obligatorio.</div> --}}
                                                 </th>
                                                 <th>
                                                     <label for="" style="color:white"></label>
                                                    <button type="button" name="add2" id="add2" class="btn-success2"><span class="fa fa-plus"></span></button>
                                                </th>
                                            </tr>
                                        </table>
                                        {{-- <div  id="errorFormatoHora" style="display:none;color:#CC0000">La Hora ingresada no es correcta</div> --}}
                                </div>
                                {{-- <BR><BR><BR></BR> --}}
                                <div class="row">
                                        <div class="col-md-1"></div>
                                            <div class="col-md-10">
                                                <table class="table" id="dynamicTable2">
                                                    <tr bgcolor="#fb8668">
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                </table>
                                            </div>
                                            {{-- <div class="col-md-4"></div> --}}
                                    </div>
                                    {{-- <button class="add-requisitos-button" onclick="addRequisito()" type="button">Agregar requisito<span class="fa fa-plus"></span></button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form_group">
                        <label for="">País</label>
                        <select id="pais" name="pais">
                            <option value="" selected disabled>Seleccionar</option>
                            @foreach ($paises as $p)
                                <option value="{{ $p->id }}">
                                    {!! $p->pnombre !!}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form_group justify-content-end mt-4">
                        <div class="d-flex">
                            <!-- <a class="button_form_close" onclick="modalform()">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                Editar
                            </a> -->
                            {{-- <a class="button_form_save" onclick="modalform2()">
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                Enviar
                            </a> --}}
                            <button class="button_form_save" onclick="modalform3()">
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                Enviar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<div class="modal_form modal_form2 vac" id="PopupLegal">
    <div class='content_modal'>
        <div class="cuerpo_modal_form">
            <div class="info_modal">
                <span class="close-btn" onclick='out_modal()'><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                <div class="h-100">                    
                    <div class='col-md-12 mt-2 mb-2'>
                        <img src="{{ asset('assets/images/icon/check.png') }}" alt="">
                        <p><strong>Su solicitud se ha guardo con éxito</strong> y enviado a People Operations</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal_form modal_form3 vac" id="PopupLegal">
    <div class='content_modal'>
        <div class="cuerpo_modal_form">
            <div class="info_modal">
                <span class="close-btn" onclick='out_modal()'><i class="fa fa-times-circle " aria-hidden="true"></i></span>
                <div class="h-100">
                    <div class='col-md-12 mt-2 mb-2'>
                        <img src="{{ asset('assets/images/icon/check.png') }}" alt="">
                        <p>Su solicitud ha sido editada correctamente</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal_form modal_form4 vac edit" id="PopupLegal">
    <div class='content_modal'>
        <div class="cuerpo_modal_form">
            <div class="info_modal">
                <span class="close-btn" onclick='out_modal4()'><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                <div class="h-100">
                    <div class='title'>
                        <i class="fa fa-address-card" aria-hidden="true"></i>
                        <h5>Adicionar Función</h5>
                    </div>                        
                    <div class='content_form'>
                        <form action="{{ route('proyectos.store') }}" method="POST" enctype="multipart/form-data">
                            <div class='form_group'>
                                <label for="">Digite la función</label>
                                <input type="text" placeholder='Ingrese función' name="pnombre" value="{{ old('pnombre') }}" required>
                            </div>                               
                            <div class='form_group justify-content-end mt-3 border-none'  >
                                <div class='d-flex'>
                                    <div class='btn button_form_close' onclick='out_modal4()'>
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                        Close
                                    </div>
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
<div class="modal_form modal_form5 vac edit" id="PopupLegal">
    <div class='content_modal'>
        <div class="cuerpo_modal_form">
            <div class="info_modal">
                <span class="close-btn" onclick='out_modal5()'><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                <div class="h-100">
                    <div class='title'>
                        <i class="fa fa-address-card" aria-hidden="true"></i>
                        <h5>Adicionar Requisitos</h5>
                    </div>                        
                    <div class='content_form'>
                        <form action="{{ route('proyectos.store') }}" method="POST" enctype="multipart/form-data">
                            <div class='form_group'>
                                <label for="">Digite el requisito</label>
                                <input type="text" placeholder='Ingrese el requisito' name="pnombre" value="{{ old('pnombre') }}" required>
                            </div>                               
                            <div class='form_group justify-content-end mt-3 border-none'  >
                                <div class='d-flex'>
                                    <div class='btn button_form_close' onclick='out_modal5()'>
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                        Close
                                    </div>
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
    function modalform3() {
        $('.modal_form2').show(); 
        $("#PopupLegal").delay("slow").delay( 800 ).fadeIn( 400 );
       /*  $( ".modal_form2" ).slideUp( 300 ).delay( 800 ).fadeIn( 400 ); */
        
           
    }
    function out_modal() {
        $('.modal_form2').show();    
    }
    /* function modalform4() {
        $('.modal_form4').show();    
    }
    function out_modal4() {
        $('.modal_form4').hide();    
    }
    function modalform5() {
        $('.modal_form5').show();    
    }
    function out_modal5() {
        $('.modal_form5').hide();    
    } */
</script>

<script>
//tabla dinamica para funciones nuevas
    var i = 0;
    $("#add").click(function(){
        ++i;
				var hora_nueva=$('#horario_nuevo').val();
                console.log(hora_nueva,'entro');
				
                $("#dynamicTable").append('<tr><td><input type="text" name="addmorefunction['+i+'][name]" id="hora" value="'+hora_nueva+'" placeholder="Funciones" class="form-control" readonly /></td><td><span class="fa fa-trash remove-tr"></span></td></tr>');
                $('#horario_nuevo').val('');
								
				
		});
    $(document).on('click', '.remove-tr', function(){
         $(this).parents('tr').remove();
				 if ( $('#control').val()==1) {
				 	$('#control').val("");
				}else {
					$('#control').val($('#control').val()-1);
				}
    });

//tabla dinamica para requisitos nuevos
    var j = 0;
    $("#add2").click(function(){
        ++j;
				var hora_nueva2=$('#horario_nuevo2').val();
                console.log(hora_nueva2,'entro');
				
                $("#dynamicTable2").append('<tr><td><input type="text" name="addmorerequirements['+j+'][name]" id="hora" value="'+hora_nueva2+'" placeholder="Requisitos" class="form-control" readonly /></td><td><span class="fa fa-trash remove-tr"></span></td></tr>');
                $('#horario_nuevo2').val('');
								
				
		});
    $(document).on('click', '.remove-tr', function(){
         $(this).parents('tr').remove();
				 if ( $('#control').val()==1) {
				 	$('#control').val("");
				}else {
					$('#control').val($('#control').val()-1);
				}
    });


    const addFunction = () => {
        var newFunction = `<li class="vacante-function-item">
                                            <p contenteditable="true" id="funciones" name="funciones[]">Funciones</p>
                                            <span onclick="deleteFunction(this)" class="fa fa-trash delete-function-button"></span>
                                        </li>`;
        $('#vacante-funciones-list').append(newFunction);
    }
    const addRequisito = () => {
        var newRequisito = `<li class="vacante-requisitos-item">
                                            <p contenteditable="true" id="requisitos" name="requisitos[]">Requisitos</p>
                                            <span onclick="deleteRequisito(this)" class="fa fa-trash delete-requisitos-button"></span>
                                        </li>`;
        $('#vacante-requisitos-list').append(newRequisito);
    }
    
    function deleteFunction(item) {
        item.closest('.vacante-function-item').remove()
    }

    function deleteRequisito(item) {
        item.closest('.vacante-requisitos-item').remove()
    }
</script>

<script>

function deleteFunction(item) {
        console.log(item);
        item.closest('.vacante-function-item').remove()
    }

    function deleteRequisito(item) {
        item.closest('.vacante-requisitos-item').remove()
    }

$('#users').on('select2:select', function (e){
    userFunc();
});

$('#id_cargo').on('select2:select', function (e) {
    cargo_descripcion();

    changeFunc();
});


$('#users').on('change', () => {
   $('#email').remove();
  
});

//al cambiar el select de posicion a seleccionar hace una limpieza de campos
$('#id_cargo').on('change', () => {
   $('#cargo_fx').text('');
   $('#descripcion_cargo_fx').text('');

   $('#funciones').remove();
   $('#requisitos').remove();
  
});


    function cargo_descripcion(callback){
        
    
        var selectBox = document.getElementById("id_cargo");
        var id_selectedValue = selectBox.options[selectBox.selectedIndex].value;

        var inputName = $(this).attr('name'); //solo se puede usar una name 
        
        $.ajax({
			            type: "get",
			            url: "/vacantes/cargos/"+id_selectedValue,
			            success: function( respuesta ){
			            	//Si existe seteamos los datos
                        
                            $("#cargo_fx").append(
                                $('<input>', {
                                    type: 'text',
                                    val: respuesta.nombre,
                                    name: 'cargo'
                                })
                            );
                            
                            var des = '<textarea name="descripcion" id="descripcion">'+respuesta.descripcion+'</textarea>'
                            $("#descripcion_cargo_fx").append(des);

                            /* $("#descripcion_cargo_fx").append(
                                $('<input>', {
                                    type: 'text',
                                    val: respuesta.descripcion,
                                    name2: 'descripcion'
                                })
                            ); */

                               
	                	}
	            });

    }

    function userFunc(callback){
    
        var selectBox = document.getElementById("users");
        var id_selectedValue = selectBox.options[selectBox.selectedIndex].value;
        
        $.ajax({
			            type: "get",
			            url: "/vacantes/user/"+id_selectedValue,
			            success: function( respuesta ){
			            	//Si existe seteamos los datos
                            console.log(respuesta)
                            
                            /* $("#list_email").append("<input text value=" + respuesta.email + " name="+'email'+">"); */

                            var correo = '<input type="email" name="email" size="50" id="email" value="'+respuesta.email+'" class="form-control" readonly/>'

                            $("#list_email").append(correo);
                          

	                	}
	                });

    }


    function changeFunc(callback){
        $('ul li').remove();//limpia los ul li 
        $('#funciones').text('');
        var selectBox = document.getElementById("id_cargo");
        var id_selectedValue = selectBox.options[selectBox.selectedIndex].value;


        $.ajax({
			            type: "get",
			            url: "/vacantes/"+id_selectedValue,
			            success: function( respuesta ){
			            	//Si existe seteamos los datos
                            var inputName = $(this).attr('name');
                            $.each(respuesta.funciones, function (key, value) {
                            /* $("#list_fx").append("<input text value=" + value.nombre  + " name="+'funciones[]'+">"); */
                            /* $('#list_fx').append('<input type="text" value='+ value.nombre+ '>'); */

                            /* $("#list_fx").append(
                                $('<input>', {
                                    type: 'text',
                                    val: value.nombre,
                                    name: 'funciones[]'
                                })
                            ); */

                            /* var des = '<input class="vacante-function-item" style="color:#ffffff" text name="funciones[]" value="'+value.nombre+'" id="funciones"> &nbsp<span onclick="deleteFunction(this)" class="fa fa-trash delete-function-button"></span> </input>'
                            $("#list_fx").append(des);   posta2 */
                            var des = '<input class="vacante-function-item" style="color:#ffffff" text name="funciones[]" value="'+value.nombre+'" id="funciones"> </input>'
                            $("#list_fx").append(des);   

                            /* `<li class="vacante-function-item">
                                            <p contenteditable="true">Integer viverra dolor non.</p>
                                            <span onclick="deleteFunction(this)" class="fa fa-trash delete-function-button"></span>
                                        </li>` */
                            /* $("#list_email").append("<input text value=" + respuesta.email + " name="+'email'+">"); */
                            
                        });
                            
                        changeReq();
							
							




	                	}
	                });

    }

    function changeReq(callback){
        var selectBox = document.getElementById("id_cargo");
        var id_selectedValue = selectBox.options[selectBox.selectedIndex].value;
        

        $.ajax({
			            type: "get",
			            url: "/vacantes/"+id_selectedValue,
			            success: function( respuesta ){
			            	//Si existe seteamos los datos
                            var inputName = $(this).attr('name');
                            $.each(respuesta.requisitos, function (key, value) {
                            
                           /* $("#list_requisitos").append(
                                $('<input>', {
                                    type: 'text',
                                    val: value.nombre,
                                    name: 'requisitos[]'
                                })
                            ); */
                            
                            /* var req = '<input class="requisitos-function-item" text name="requisitos[]" id="requisitos">'+value.nombre+' &nbsp<span onclick="deleteFunction(this)" class="fa fa-trash delete-function-button"></span> </input>'  postaa */

                            /*var req = '<input class="vacante-function-item" style="color:#ffffff" text name="requisitos[]" value="'+value.nombre+'" id="requisitos"> &nbsp<span onclick="deleteFunction(this)" class="fa fa-trash delete-function-button"></span> </input>'  posta2
                            $("#list_requisitos").append(req);*/
                            var req = '<input class="vacante-function-item" style="color:#ffffff" text name="requisitos[]" value="'+value.nombre+'" id="requisitos"> </input>'  
                            $("#list_requisitos").append(req);

                            /* var req = '<input class="vacante-function-item" text name="requisitos[]" value="'+value.nombre+'" id="requisitos" <span onclick="deleteFunction(this)" class="fa fa-trash delete-function-button"></span> </input>'
                            $("#list_requisitos").append(req);  este elimina al tocar el componente*/

                            });

	                	}
	                });

    }

    

    
</script>
<style>
    .table {
    width: 100%;
    margin-bottom: 1rem;
    color: #ffffff !important;
    }
    
    .btn-success2 {
    background: none;
    border: 0;
    color: white;
    font-size: 1.3rem;
    }

   /*  button.add-function-button, button.add-function-button span, button.add-requisitos-button, button.add-requisitos-button span {
    background: none;
    border: 0;
    color: white;
    font-size: 1.3rem; */
}

</style>

@endsection     