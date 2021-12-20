@extends('layout')
@section('content')
<section class='content_back_sol' id="registros_section">
    <div class="info_modal">
        <div class="h-100"> 
            <div class="title">
                <h5>Registros</h5>
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
                                    <th class='sortable'>Nombre y apellido</th>
                                    <th class='sortable'>Estado</th>
                                    <th class='sortable'>Correo</th>
                                    <th class='sortable'></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class='content_overflow'>
                        <table id='filter'>
                            <tbody>
                                @foreach($users as $u)
                                <tr>
                                    <td>
                                        <h4>{{$u->name}}</h4>
                                        @foreach($u->vacantes as $nc)
                                            <p>{{$nc->nombre_cargo_modificado}}</p>
                                        @endforeach
                                        <p>Pregrado</p>
                                        <p>Registrado en {{$u->created_at->format('d.m.Y')}}</p>
                                        {{-- <p>Registrado en 05/09/2021</p> --}}
                                    </td>
                                    <td>
                                        @if($u->estado == 'A')
                                        Aprobado
                                        @elseif($u->estado == 'I')
                                        Invalidado
                                        @endif
                                    </td>
                                    <td>
                                        <span>{{$u->email}}</span>
                                    </td>
                                    @if($u->estado == 'A')
                                        <td>
                                            <a class="button_form_save" href="{{ URL::action('UserController@status_invalid', $u->id) }}">
                                                Denegar
                                            </a>
                                                                        
                                        </td>
                                    @elseif($u->estado == 'I')
                                    <td>
                                        <a class="button_form_save" href="{{ URL::action('UserController@status_approved', $u->id) }}">
                                            Aprobar
                                        </a>
                                                                    
                                    </td>
                                    @endif
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