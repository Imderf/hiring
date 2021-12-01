@extends('layout')
@section('content')
<section class='content_back_sol' id='solicitud_editar'>
    <div class="info_modal">
        <div class="h-100"> 
            <div class="title">
                <h5>EDITAR | Estado de solicitud</h5>
                <div class='btns_gen'>
                    <div class="back"><a href="{{ route('solicitud.index') }}"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a></div>
                    <a href="https://hiring.milenium.group/auth/logout" class="logout-btn">
                        <i class="fa fa-sign-out" aria-hidden="true" style="font-size: 4vh;"></i>
                    </a>
                </div>                
            </div>
            <div class='content_table'>
                <div class="col-md-3 content_1">
                    <div class='content_section1'>
                        <div>
                            <label for="">Fecha de Solicitud</label>
                            <input class='date_sol' type="text" value='23 JUN 2021'>
                        </div>
                        <div>
                            <label for="">Solicitado por:</label>
                            <input class='name_sol' type="text" value='Daniel'>
                        </div>
                        <div>
                            <label for="">Estado:</label>
                            <select name="" id="">
                                <option value="Abierto" Selected>Abierto</option>
                                <option value="Cerrado" disabled>Cerrado</option>
                                <option value="Cancelado" disabled>Cancelado</option>
                            </select>
                        </div>
                    </div>
                    <div class="content_section2">
                        <div>
                            <label for="">Cargo:</label>
                            <input type="text" value='Asistente Digital'>
                        </div>
                        <div>
                            <label for="">País:</label>
                            <input type="text" value='México'>
                        </div>
                        <div>
                            <label for="">Descripción del cargo:</label>
                            <textarea name="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.
                            </textarea>
                        </div>
                    </div>
                    <div class="content_section3">
                        <div>
                            <h4>Funciones:</h4>
                            <ul>
                                <li>Integer viverra dolor non.</li>
                                <li>Donec pellentesque sem</li>
                                <li>Nunc mollis neque in enim</li>
                                <li>Lorem ipsum dolor sit amet</li>
                            </ul>
                        </div>
                        <div>
                            <h4>Requisitos:</h4>
                            <ul>
                                <li>Integer viverra dolor non.</li>
                                <li>Donec pellentesque sem</li>
                                <li>Nunc mollis neque in enim</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Nunc mollis neque in enim</li>
                                <li>Lorem ipsum dolor sit amet</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class='col-md-9 content_2'>
                    <div>
                        <div class="col-md-4 content_section1">
                            <div class='item_section'>
                                <div class='col-md-8 text_item'>
                                    Candidatos
                                </div>
                                <div class="col-md-4 num_item">
                                    10
                                </div>
                            </div>
                            <div class='item_section'>
                                <div class='col-md-8 text_item'>
                                    Candidatos analizados
                                </div>
                                <div class="col-md-4 num_item">
                                    10
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='content_section2'>
                        <div class='content_thead'>
                            <table>
                                <thead>
                                    <tr>
                                        <th class='sortable'>NOMBRE</th>
                                        <th class='sortable'>PRESELECCIONADO</th>
                                        <th class='sortable'>ENTREVISTA RRHH</th>
                                        <th class='sortable'>ENTREVISTA CON LÍDER</th>
                                        <th class='sortable'>PROPUESTA</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class='content_overflow'>
                            <table id='filter'>
                                <tbody>
                                    <tr>
                                        <td>
                                            Alejandro Castillo
                                        </td>
                                        <td>
                                            <label for="">Valorar</label>
                                            <select name="" id="">
                                                <option value="">Preseleccionado</option>
                                                <option value="">No cumple</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div>
                                                <input class='custom' type="radio" name="custom" id="no_ejecutado">
                                                <label for="no_ejecutado">No Ejecutada</label>
                                            </div>
                                            <div class='ent_rh'>
                                                <input class='custom' type="radio" name="custom" id="ejecutado">
                                                <label for="ejecutado">Ejecutada</label>
                                            </div>
                                            <select name="" id="">
                                                <option value="">Apto</option>
                                                <option value="">No Apto</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div>
                                                <input class='custom' type="radio" name="custom1" id="no_ejecutado1">
                                                <label for="no_ejecutado1">No Ejecutada</label>
                                            </div>
                                            <div class='ent_lid'>
                                                <input class='custom' type="radio" name="custom1" id="ejecutado1">
                                                <label for="ejecutado1">Ejecutada</label>
                                            </div>
                                            <select name="" id="">
                                                <option value="">Apto</option>
                                                <option value="">No Apto</option>
                                            </select>                                            
                                        </td>
                                        <td>
                                            <div>
                                                <input class='custom' type="radio" name="custom2" id="ejecutado2">
                                                <label for="ejecutado2">Aceptado</label>
                                            </div>
                                            <div>
                                                <input class='custom' type="radio" name="custom2" id="no_ejecutado2">
                                                <label for="no_ejecutado2">No Aceptado</label>
                                            </div>
                                            <a class="button-view-pdf" href="#">
                                            Ver pdf
                                            </a>
                                        </td>
                                        <td>
                                            <span>...</span>
                                            <div class='content_buttons'>
                                                <a class="button_form_save" href="{{ route('solicitud.ver') }}">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                    Ver mas
                                                </a>
                                            </div>                                    
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Andrea Lopéz
                                        </td>
                                        <td>
                                            <label for="">Valorar</label>
                                            <select name="" id="">
                                                <option value="">Preseleccionado</option>
                                                <option value="">No cumple</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div>
                                                <input class='custom' type="radio" name="custom3" id="no_ejecutado01">
                                                <label for="no_ejecutado01">No Ejecutada</label>
                                            </div>
                                            <div class='ent_rh'>
                                                <input class='custom' type="radio" name="custom3" id="ejecutado01">
                                                <label for="ejecutado01">Ejecutada</label>
                                            </div>
                                            <select name="" id="">
                                                <option value="">Apto</option>
                                                <option value="">No Apto</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div>
                                                <input class='custom' type="radio" name="custom11" id="no_ejecutado11">
                                                <label for="no_ejecutado11">No Ejecutada</label>
                                            </div>
                                            <div class='ent_lid'>
                                                <input class='custom' type="radio" name="custom11" id="ejecutado11">
                                                <label for="ejecutado11">Ejecutada</label>
                                            </div>
                                            <select name="" id="">
                                                <option value="">Apto</option>
                                                <option value="">No Apto</option>
                                            </select>                                            
                                        </td>
                                        <td>
                                            <div>
                                                <input class='custom' type="radio" name="custom21" id="ejecutado21">
                                                <label for="ejecutado21">Aceptado</label>
                                            </div>
                                            <div>
                                                <input class='custom' type="radio" name="custom21" id="no_ejecutado21">
                                                <label for="no_ejecutado21">No Aceptado</label>
                                            </div>
                                            <a class="button-view-pdf" href="#">
                                            Ver pdf
                                            </a>
                                        </td>
                                        <td>
                                            <span>...</span>
                                            <div class='content_buttons'>
                                                <a class="button_form_save" href="{{ route('solicitud.ver') }}">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                    Ver mas
                                                </a>
                                            </div>                                    
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Diana Ramiréz
                                        </td>
                                        <td>
                                            <label for="">Valorar</label>
                                            <select name="" id="">
                                                <option value="">Preseleccionado</option>
                                                <option value="">No cumple</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div>
                                                <input class='custom' type="radio" name="custom4" id="no_ejecutado02">
                                                <label for="no_ejecutado02">No Ejecutada</label>
                                            </div>
                                            <div class='ent_rh'>
                                                <input class='custom' type="radio" name="custom4" id="ejecutado02">
                                                <label for="ejecutado02">Ejecutada</label>
                                            </div>
                                            <select name="" id="">
                                                <option value="">Apto</option>
                                                <option value="">No Apto</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div>
                                                <input class='custom' type="radio" name="custom12" id="no_ejecutado12">
                                                <label for="no_ejecutado12">No Ejecutada</label>
                                            </div>
                                            <div class='ent_lid'>
                                                <input class='custom' type="radio" name="custom12" id="ejecutado12">
                                                <label for="ejecutado12">Ejecutada</label>
                                            </div>
                                            <select name="" id="">
                                                <option value="">Apto</option>
                                                <option value="">No Apto</option>
                                            </select>                                            
                                        </td>
                                        <td>
                                            <div>
                                                <input class='custom' type="radio" name="custom22" id="ejecutado22">
                                                <label for="ejecutado22">Aceptado</label>
                                            </div>
                                            <div>
                                                <input class='custom' type="radio" name="custom22" id="no_ejecutado22">
                                                <label for="no_ejecutado22">No Aceptado</label>
                                            </div>
                                            <a class="button-view-pdf" href="#">
                                            Ver pdf
                                            </a>
                                        </td>
                                        <td>
                                            <span>...</span>
                                            <div class='content_buttons'>
                                                <a class="button_form_save" href="{{ route('solicitud.ver') }}">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                    Ver mas
                                                </a>
                                            </div>                                    
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Otro
                                        </td>
                                        <td>
                                            <label for="">Valorar</label>
                                            <select name="" id="">
                                                <option value="">Preseleccionado</option>
                                                <option value="">No cumple</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div>
                                                <input class='custom' type="radio" name="custom5" id="no_ejecutado03">
                                                <label for="no_ejecutado03">No Ejecutada</label>
                                            </div>
                                            <div class='ent_rh'>
                                                <input class='custom' type="radio" name="custom5" id="ejecutado03">
                                                <label for="ejecutado03">Ejecutada</label>
                                            </div>
                                            <select name="" id="">
                                                <option value="">Apto</option>
                                                <option value="">No Apto</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div>
                                                <input class='custom' type="radio" name="custom13" id="no_ejecutado13">
                                                <label for="no_ejecutado13">No Ejecutada</label>
                                            </div>
                                            <div class='ent_lid'>
                                                <input class='custom' type="radio" name="custom13" id="ejecutado13">
                                                <label for="ejecutado13">Ejecutada</label>
                                            </div>
                                            <select name="" id="">
                                                <option value="">Apto</option>
                                                <option value="">No Apto</option>
                                            </select>                                            
                                        </td>
                                        <td>
                                            <div>
                                                <input class='custom' type="radio" name="custom23" id="ejecutado23">
                                                <label for="ejecutado23">Aceptado</label>
                                            </div>
                                            <div>
                                                <input class='custom' type="radio" name="custom23" id="no_ejecutado23">
                                                <label for="no_ejecutado23">No Aceptado</label>
                                            </div>
                                            <a class="button-view-pdf" href="#">
                                            Ver pdf
                                            </a>
                                        </td>
                                        <td>
                                            <span>...</span>
                                            <div class='content_buttons'>
                                                <a class="button_form_save" href="{{ route('solicitud.ver') }}">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                    Ver mas
                                                </a>
                                            </div>                                    
                                        </td>
                                    </tr>
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
<div class="modal_form modal_form1 vac edit" id="PopupLegal">
    <div class='content_modal'>
        <div class="cuerpo_modal_form">
            <div class="info_modal">
                <span class="close-btn" onclick='out_modal()'><i class="fa fa-times-circle " aria-hidden="true"></i></span>
                <div class="h-100">
                    <div class='col-md-12 mt-2 mb-2'>
                    <h3 >CALIFICACIÓN ENTREVISTA RRHH</h3>
                        <form method="post">
                            <div class="form_group">
                                <label for="">Validar Experiencia</label>
                                <input type="text" name="" id="">

                            </div>
                            <div class="form_group">
                                <label for="">Interés</label>
                                <input type="text" name="" id="">
                            </div>
                            <div class="form_group">
                                <label for="">Afinidad con la labor</label>
                                <input type="text" name="" id="">
                            </div>
                            <div class='form_group'>
                                <label for="">Proactividad</label>
                                <input type="text" value=''>
                            </div>  
                            <div class="form_group">
                                <label for="">URL Prueba (opcional)</label>
                                <input type="text" name="" id="">
                            </div>   
                            <div class="solicitud-lider-form-group">
                                <label for="">Adjuntar Prueba (opcional)</label>
                                <input type="file" name="avatar" accept="image/png, image/jpeg">
                            </div>                           
                            <div class="form_group justify-content-end mt-4 border-none">
                                <div class="d-flex">
                                    <a class="button_form_close btn" onclick="out_modal()">
                                        <i class="fa fa-times-circle" aria-hidden="true"></i>
                                        NO APTO
                                    </a>
                                    <a class="button_form_save btn" onclick="out_modal()">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                        APTO
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal_form modal_form2 vac edit" id="PopupLegal">
    <div class='content_modal'>
        <div class="cuerpo_modal_form">
            <div class="info_modal">
                <span class="close-btn" onclick='out_modal()'><i class="fa fa-times-circle " aria-hidden="true"></i></span>
                <div class="h-100">
                    <div class='col-md-12 mt-2 mb-2'>
                    <h3 >CALIFICACIÓN ENTREVISTA LÍDER</h3>
                        <form method="post">
                            <div class="solicitud-lider-form-group">
                                <label for="">Comentarios</label>
                                <textarea name="" id="" rows="5">
                                </textarea>
                            </div>         
                            <div class="form_group">
                                <label for="">URL Prueba (opcional)</label>
                                <input type="text" name="" id="">
                            </div>   
                            <div class="solicitud-lider-form-group">
                                <label for="">Adjuntar Prueba (opcional)</label>
                                <input type="file" name="avatar" accept="image/png, image/jpeg">
                            </div>  
                                          
                            <div class="form_group justify-content-end mt-4 border-none">
                                <div class="d-flex">
                                    <a class="button_form_close btn" onclick="out_modal()">
                                        <i class="fa fa-times-circle" aria-hidden="true"></i>
                                        NO APTO
                                    </a>
                                    <a class="button_form_save btn" onclick="out_modal()">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                        APTO
                                    </a>
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
   function sortTable(selector, compFunc) {
      var mySelector = '.sortable';
      var myCompFunc = function($td1, $td2, isAsc) {
        var v1 = $.trim($td1.text()).replace(/,|\s+|%/g, '');
        var v2 = $.trim($td2.text()).replace(/,|\s+|%/g, '');
        var pattern = /^\d+(\.\d*)?$/;
        if (pattern.test(v1) && pattern.test(v2)) {
          v1 = parseFloat(v1);
          v2 = parseFloat(v2);
        }

        return isAsc ? v1 > v2 : v1 < v2;
      };

      var doSort = function($tbody, index, compFunc, isAsc)
      {
        var $trList = $tbody.find("tr");
        var len = $trList.length;
        for(var i=0; i<len-1; i++) {
          for(var j=0; j<len-i-1; j++) {
            var $td1 = $trList.eq(j).find("td").eq(index);
            var $td2 = $trList.eq(j+1).find("td").eq(index);

            if (compFunc($td1, $td2, isAsc)) {
              var t = $trList.eq(j+1);
              $trList.eq(j).insertAfter(t);
              $trList = $tbody.find("tr");
            }
          }
        }
      }

      var init = function() {
        var $th = $("th" + selector);
        this.$table = $('#filter');
        var that = this;
        console.log(that);
        $th.click(function(){
          var index = $(this).index();
          var asc = $(this).attr('data-asc');
          isAsc = asc === undefined ? true : (asc > 0 ? true : false);
          console.log(that);
          doSort(that.$table.find("tbody"), index, compFunc, isAsc);

          $(this).attr('data-asc', 1 - (isAsc ? 1 : 0));
        });

        $th.css({'cursor': 'pointer'});
           /* .attr('title', 'Haga clic para ordenar')
           .append('&nbsp;<i class="fa fa-long-arrow-down" style="color:#2196F3" aria-hidden="true"></i><i class="fa fa-long-arrow-up" style="color:#2196F3" aria-hidden="true"></i>'); */
      };


      selector = selector || mySelector;
      compFunc = compFunc || myCompFunc;

      init();
    };
    sortTable();
</script>
<script>
    $('.ent_rh').on('click', function(){
        $('.modal_form1').show();
    });
    $('.ent_lid').on('click', function(){
        $('.modal_form2').show();
    });
    $('.left-sidebar .logout-btn').hide();
</script>
@endsection     