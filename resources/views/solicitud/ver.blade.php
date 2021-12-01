@extends('layout')
@section('content')
<section class='content_back_sol' id='solicitud_ver'>
    <div class="info_modal">
        <div class="h-100"> 
            <div class="title">
                <h5>VER | Estado de solicitud</h5>
                <div class='btns_gen'>
                    <div class="back"><a href="{{ route('solicitud.editar') }}"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a></div>
                    <a href="https://hiring.milenium.group/auth/logout" class="logout-btn">
                        <i class="fa fa-sign-out" aria-hidden="true" style="font-size: 4vh;"></i>
                    </a>
                </div>
            </div>
            <div class='content_table'>
                <div class="col-md-4 content_1">
                    <div class='content_section1'>
                        <h2>HOJA DE VIDA DEL CANDIDATO</h2>
                        <img src="{{ asset('assets/images/icon/img2.png') }}" alt="alt"/>
                        <span>DESCARGAR <i class="fa fa-download" aria-hidden="true"></i></span>
                    </div>
                    <div class="content_section2">
                        <div class='title'>
                            <h4>Comentarios de Entrevista RRHH</h4>
                            <!-- <span onclick='modalform()'><i class="fa fa-plus-circle" aria-hidden="true"></i></span> -->
                        </div>
                        <div class='content_info'>
                            <h5>Validar Experiencia</h5>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <h5>Interés</h5>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <h5>Afinidad con la labor</h5>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <h5>Proactividad</h5>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <h5>Comentarios</h5>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                    <div class="content_section2">
                        <div class='title'>
                            <h4>Comentarios de Entrevista Líder</h4>
                            <!-- <span onclick='modalform2()'><i class="fa fa-plus-circle" aria-hidden="true"></i></span> -->
                        </div>
                        <div class='content_info'>
                            <h5>Comentarios</h5>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>                    
                </div>
                <div class='col-md-8 content_2'>
                    <div class='step_time'>
                        <div class="barlat">
                            <div class="cotentbar">
                                <div class="barl"></div>
                                <div class='info_bar'>
                                    <span>24/06/2021</span>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    <div>
                                        <img class='select_nav' src="{{ asset('assets/images/menu-nav/select_nav.png') }}" alt="">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class='content_card'>
                            <div class='card_info'>
                                <h3>Se envió propuesta económica</h3>
                                <a href="">Ver propuesta <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                <div class='d-flex align-items-center'>
                                    <label for="">Realizada por:</label>
                                    <input class='date_sol' type="text" value='Lorem Ipsum'>
                                </div>
                                <div class='d-flex align-items-center'>
                                    <label for="">Fecha:</label>
                                    <input class='date_sol' type="text" value='18 / 06 / 2021'>
                                </div>
                                <div class='d-flex align-items-center'>
                                    <label for="">Resultados:</label>
                                    <p>ACEPTADA</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class='step_time'>
                        <div class="barlat">
                            <div class="cotentbar">
                                <div class="barl"></div>
                                <div class='info_bar'>
                                    <span>16/06/2021</span>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    <div>
                                        <img class='select_nav' src="{{ asset('assets/images/menu-nav/select_nav.png') }}" alt="">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class='content_card'>
                            <div class='card_info'>
                                <h3>Se realizó Entrevista Líder</h3>
                                <div class='d-flex align-items-center'>
                                    <label for="">Realizada por:</label>
                                    <input class='date_sol' type="text" value='Lorem Ipsum'>
                                </div>
                                <div class='d-flex align-items-center'>
                                    <label for="">Fecha:</label>
                                    <input class='date_sol' type="text" value='16/06/2021'>
                                </div>
                                <div class='d-flex align-items-center'>
                                    <label for="">Resultados:</label>
                                    <p>APTO</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='step_time'>
                        <div class="barlat">
                            <div class="cotentbar">
                                <div class="barl"></div>
                                <div class='info_bar'>
                                    <span>14/06/2021</span>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    <div>
                                        <img class='select_nav' src="{{ asset('assets/images/menu-nav/select_nav.png') }}" alt="">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class='content_card'>
                            <div class='card_info'>
                                <h3>Se realizó Entrevista RRHH</h3>
                                <div class='d-flex align-items-center'>
                                    <label for="">Realizada por:</label>
                                    <input class='date_sol' type="text" value='Lorem Ipsum'>
                                </div>
                                <div class='d-flex align-items-center'>
                                    <label for="">Fecha:</label>
                                    <input class='date_sol' type="text" value='14/06/2021'>
                                </div>
                                <div class='d-flex align-items-center'>
                                    <label for="">Resultados:</label>
                                    <p>APTO</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='step_time'>
                        <div class="barlat">
                            <div class="cotentbar">
                                <div class="barl"></div>
                                <div class='info_bar'>
                                    <span>10/06/2021</span>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    <div>
                                        <img class='select_nav' src="{{ asset('assets/images/menu-nav/select_nav.png') }}" alt="">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class='content_card'>
                            <div class='card_info'>
                                <h3>Alejandro Castillo Envío Solicitud</h3>
                                <div class='d-flex align-items-center'>
                                    <label for="">Fecha:</label>
                                    <input class='date_sol' type="text" value='10/06/2021'>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <div class="modal_form modal_form1 vac edit" id="PopupLegal">
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
                                <select name="" id="">
                                    <option value="" selected disabled>Seleccionar</option>
                                    <option value="">Option 1</option>
                                    <option value="">Option 2</option>
                                </select>
                            </div>
                            <div class="form_group">
                                <label for="">Interés</label>
                                <input type="text" name="" id="">
                            </div>
                            <div class="form_group">
                                <label for="">Afinidad con la labor</label>
                                <select name="" id="">
                                    <option value="" selected disabled>Seleccionar</option>
                                    <option value="">Option 1</option>
                                    <option value="">Option 2</option>
                                </select>
                            </div>
                            <div class='form_group'>
                                <label for="">Proactividad</label>
                                <input type="text" value=''>
                            </div>                            
                            <div class="form_group justify-content-end mt-4 border-none">
                                <div class="d-flex">
                                    <a class="button_form_close" onclick="modalform3()">
                                        <i class="fa fa-times-circle" aria-hidden="true"></i>
                                        NO APTO
                                    </a>
                                    <a class="button_form_save" onclick="modalform3()">
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
                            <div class="form_group">
                                <label for="">Validar Experiencia</label>
                                <select name="" id="">
                                    <option value="" selected disabled>Seleccionar</option>
                                    <option value="">Option 1</option>
                                    <option value="">Option 2</option>
                                </select>
                            </div>
                            <div class="form_group">
                                <label for="">Interés</label>
                                <input type="text" name="" id="">
                            </div>
                            <div class="form_group">
                                <label for="">Afinidad con la labor</label>
                                <select name="" id="">
                                    <option value="" selected disabled>Seleccionar</option>
                                    <option value="">Option 1</option>
                                    <option value="">Option 2</option>
                                </select>
                            </div>
                            <div class='form_group'>
                                <label for="">Proactividad</label>
                                <input type="text" value=''>
                            </div>                            
                            <div class="form_group justify-content-end mt-4 border-none">
                                <div class="d-flex">
                                    <a class="button_form_close" onclick="modalform3()">
                                        <i class="fa fa-times-circle" aria-hidden="true"></i>
                                        NO APTO
                                    </a>
                                    <a class="button_form_save" onclick="modalform3()">
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
</div> -->
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
    $('.left-sidebar .logout-btn').hide();
</script>
@endsection     