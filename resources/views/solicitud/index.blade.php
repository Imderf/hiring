@extends('layout')
@section('content')
<section class='content_back_sol'>
    <div class="info_modal">
        <div class="h-100"> 
            <div class="title">
                <h5>Empleos publicados</h5>
                <div class="filter_table text-right"> 
                    <!-- <span>Search:</span> -->
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Búsqueda por palabra clave" title="Type in a name">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>
            </div>
            <div class='content_table'>
                <div class=''>
                    <div class='content_thead'>
                        <table>
                            <thead>
                                <tr>
                                    <th class='sortable'></th>
                                    <th class='sortable'></th>
                                    <th class='sortable'>Estado</th>
                                    <th class='sortable'>País</th>
                                    <th class='sortable'>Mes/Año</th>
                                    <th class='sortable'></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class='content_overflow'>
                        <table id='filter'>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="{{ asset('assets/images/icon/sol_MG.png') }}" alt="">
                                    </td>
                                    <td>
                                        <h4>Asistente Digital</h4>
                                        <p>MileniumGroup</p>
                                        <p>Guadalajara Jalisco, México</p>
                                        <p>Publicado hace 6 días</p>
                                    </td>
                                    <td>
                                        Activo
                                    </td>
                                    <td>
                                        <div class='col-md-6 text-right name_country'>
                                            México
                                        </div>
                                        <div class='col-md-6 text-left img_country'>
                                            <img src="{{ asset('assets/images/icon/sol_mex.png') }}" alt="">
                                        </div>
                                    </td>
                                    <td>
                                        JUN 2021
                                    </td>
                                    <td>
                                        <a class="button_form_save" href="{{ route('solicitud.editar') }}">
                                            Editar / Ver
                                        </a>                            
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('assets/images/icon/sol_MG.png') }}" alt="">
                                    </td>
                                    <td>
                                        <h4>Asistente de Cuenta</h4>
                                        <p>MileniumGroup</p>
                                        <p>Ciudad de México, México</p>
                                        <p>Publicado hace 2 semanas</p>
                                    </td>
                                    <td>
                                        Activo
                                    </td>
                                    <td>
                                        <div class='col-md-6 text-right name_country'>
                                            México
                                        </div>
                                        <div class='col-md-6 text-left img_country'>
                                            <img src="{{ asset('assets/images/icon/sol_mex.png') }}" alt="">
                                        </div>
                                    </td>
                                    <td>
                                        JUN 2021
                                    </td>
                                    <td>
                                        <a class="button_form_save" href="{{ route('solicitud.editar') }}">
                                            Editar / Ver
                                        </a> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('assets/images/icon/sol_MG.png') }}" alt="">
                                    </td>
                                    <td>
                                        <h4>Consultor/a Junior de Comunicaciones y Prensa</h4>
                                        <p>MileniumGroup</p>
                                        <p>Santiago, Región Metropolitana de Santiago, Chile</p>
                                        <p>Publicado hace 4 semanas</p>
                                    </td>
                                    <td>
                                        Activo
                                    </td>
                                    <td>
                                        <div class='col-md-6 text-right name_country'>
                                            Chile
                                        </div>
                                        <div class='col-md-6 text-left img_country'>
                                            <img src="{{ asset('assets/images/icon/sol_chi.png') }}" alt="">
                                        </div>
                                    </td>
                                    <td>
                                        MAY 2021
                                    </td>
                                    <td>
                                        <a class="button_form_save" href="{{ route('solicitud.editar') }}">
                                            Editar / Ver
                                        </a> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('assets/images/icon/sol_MG.png') }}" alt="">
                                    </td>
                                    <td>
                                        <h4>Ejecutivo de cuentas</h4>
                                        <p>MileniumGroup</p>
                                        <p>Guadalajara Jalisco, México</p>
                                        <p>Publicado hace 1 mes</p>
                                    </td>
                                    <td class='cerrado'>
                                        Cerrado
                                    </td>
                                    <td>
                                        <div class='col-md-6 text-right name_country'>
                                            México
                                        </div>
                                        <div class='col-md-6 text-left img_country'>
                                            <img src="{{ asset('assets/images/icon/sol_mex.png') }}" alt="">
                                        </div>
                                    </td>
                                    <td>
                                        MAY 2021
                                    </td>
                                    <td>
                                        <a class="button_form_save" href="{{ route('solicitud.editar') }}">
                                            Editar / Ver
                                        </a> 
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
@endsection     