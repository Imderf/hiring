<!-- ============================================================== -->
<!-- footer -->
<script src="{{ URL::asset('../js/sweetalert.min.js')}}"></script>
@include('sweet::alert')
<!-- ============================================================== -->
<!-- <footer class="footer">
    © <?=date('Y')?> Clap
</footer> -->
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
<!--Custom JavaScript -->
<script src="{{ URL::asset('js/custom.js')}}"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<script src="{{ URL::asset('js/dashboard4.js')}}"></script>
<script src="{{ URL::asset('js/jo.js')}}"></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="{{ URL::asset('../assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<!-- data table / date picker -->
<script src="https://cdn.jsdelivr.net/npm/disableautofill/src/jquery.disableAutoFill.min.js"></script>
<script src='https://rawgithub.com/Mottie/tablesorter/master/js/jquery.tablesorter.js'></script>
<script src='https://rawgithub.com/Mottie/tablesorter/master/js/jquery.tablesorter.widgets.js'></script>
<script src='https://rawgithub.com/Mottie/tablesorter/master/js/widgets/widget-pager.js'></script>
<script src='https://rawgithub.com/Mottie/tablesorter/master/js/widgets/widget-cssStickyHeaders.js'></script>
<script src='https://rawgithub.com/Mottie/tablesorter/master/js/widgets/widget-columnSelector.js'></script>

<script src='https://rawgithub.com/Mottie/tablesorter/master/js/parsers/parser-date-extract.js'></script>
<script src='https://rawgithub.com/jaz303/tipsy/master/src/javascripts/jquery.tipsy.js'></script>
<script src='https://rawgithub.com/Mottie/tablesorter/master/js/widgets/widget-filter.js'></script>
<script src='https://rawgithub.com/Mottie/tablesorter/master/js/widgets/widget-columns.js'></script>
<script src='https://rawgithub.com/Mottie/tablesorter/master/js/widgets/widget-filter-formatter-jui.js'></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script>
    $( document ).ready(function() {
  var URLhash = window.location.pathname;
  // alert(URLhash);
  console.log('URLhash  '+URLhash );
  if (URLhash == "/vacante") {
    $('.select_nav:eq(0)').css('display','block')
  };
  if (URLhash == "/solicitud" || URLhash == "/solicitud_ver" || URLhash == "/solicitud_editar") {
    $('.select_nav:eq(1)').css('display','block')
  };
  if (URLhash == "/registro") {
    $('.select_nav:eq(2)').css('display','block')
  };
  /* if (URLhash == "/clientes" || URLhash == "/cliente-time" || URLhash == "/cliente-aop" || URLhash == "/cliente") {
    $('.select_nav:eq(3)').css('display','block')
  };
  if (URLhash == "/login") {
      console.log('URLhash  '+URLhash );
    $('.content_background_login').fadeOut(2000);
    $('.login_goo').fadeIn()
  } */
});

</script>

<script>
    var swiper = new Swiper('.swiper-container-h', {
        slidesPerView: 1,
        spaceBetween: 5,
        slidesPerGroup: 1,
        loop: false,
        loopFillGroupWithBlank: true,
        pagination: {
            el: '.swiper-pagination-h',
            type: 'none',
        },
        navigation: {
            nextEl: '.swiper-button-next.marcas-next',
            prevEl: '.swiper-button-prev.marcas-prev',
        },
    });
</script>
<script>
    function startx(){
        let idbarelement= document.getElementsByClassName("graficahoriz");
        let countidbarelement=idbarelement.length;
        for(var i=0; i<countidbarelement; i++){
            idbarelement[i].setAttribute("id","barID"+i)
        }
        for(var i=0; i<countidbarelement; i++){
            createbar("#barID"+i);
        }
    }startx()
    function createbar(barelement) {
        var dataWidth=[];
        var listTotal = 0;
        var porcent=0;
        //var classes=['.graficahoriz0','.graficahoriz1','.graficahoriz2','.graficahoriz3','.graficahoriz4','.graficahoriz5'];
        $(barelement + ' .barras2').each(function() {
            console.log('each');
                dataWidth.push(Number($(this).data('value')));
            });
        dataWidth.forEach (function(dataWidth) {
                listTotal += dataWidth;
            });
        for(var i = 0; i < dataWidth.length; i++){
                porcent=(dataWidth[i]/listTotal)*100;
                $(barelement + " .barras2:eq(" + i + ")").css("width", porcent + "%");
            }
        dataWidth=[];
        listTotal = 0;
        porcent=0;
    };
</script>
<script type="text/javascript">
    AmCharts.makeChart("chartdiv",
    {
        "type": "serial",
        "categoryField": "category",
        "autoMarginOffset": 40,
        "marginRight": 70,
        "marginTop": 70,
        "plotAreaBorderColor": "#707070",
        "colors": [
            "#FF395F",
            "#7B7B7B",
            "#FF395F",
            "#9B1730"
        ],
        "startDuration": 1,
        "backgroundColor": "#F7F7F7",
        "borderColor": "#707070",
        "fontSize": 13,
        "theme": "light",
        "categoryAxis": {
            "gridPosition": "start",
            "axisAlpha": 1,
            "labelOffset": -2,
            "titleFontSize": 0,
            "titleRotation": 0
        },
        "trendLines": [],
        "graphs": [
            {
                "balloonText": "[[category]]:[[value]]",
                "cornerRadiusTop": 5,
                "fillAlphas": 1,
                "fixedColumnWidth": 15,
                "fontSize": 10,
                "gapPeriod": 25,
                "id": "AmGraph-1",
                "lineAlpha": 0,
                "tabIndex": 1,                
                "type": "column",
                "color": "#FF395F",
                "labelOffset": -15,
                "labelPosition": "bottom",
                "labelText": "[[value]]",
                "valueField": "column-1"
            }
        ],
        "guides": [],
        "valueAxes": [
            {
                "axisTitleOffset": 8,
                "id": "ValueAxis-1",
                "stackType": "regular",
                "title": "",
                "titleBold": false
            }
        ],
        "allLabels": [],
        "balloon": {
            "animationDuration": 0,
            "borderThickness": 56,
            "fadeOutDuration": 0,
            "fillAlpha": 1,
            "maxWidth": 57,
            "offsetX": 55,
            "offsetY": 42,
            "pointerWidth": 3,
            "color": "#FFFFFF"
        },
        "titles": [],
        "dataProvider": [
            {
                "category": "Enero",
                "column-1": "20"
            },
            {
                "category": "Febrero",
                "column-1": "80"
            },
            {
                "category": "Marzo",
                "column-1": "50"
            },
            {
                "category": "Abril",
                "column-1": "30"
            },
            {
                "category": "Mayo",
                "column-1": "40"
            },
            {
                "category": "Junio",
                "column-1": "60"
            },
            {
                "category": "Julio",
                "column-1": "70"
            }
        ]
    }
    );
</script>
<script type="text/javascript">
    AmCharts.makeChart("chartdivx",
    {
        "type": "serial",
        "categoryField": "category",
        "rotate": true, 
        "autoMarginOffset": 40,
        "marginRight": 70,
        "marginTop": 70,
        "plotAreaBorderColor": "#707070",
        "addClassNames": true,
        "colors": [
            "#FF395F",
            "#9B1730"
        ],
        "startDuration": 1,
        "backgroundColor": "#F7F7F7",
        "borderColor": "#707070",
        "fontSize": 13,
        "theme": "light",
        "categoryAxis": {
            "gridPosition": "start",
            "axisAlpha": 1,
            "labelOffset": -2,
            "titleFontSize": 0,
            "titleRotation": 0
        },
        "chartScrollbar": {
            "enabled": true,
            "graph": "g1",
            "graphType": "line",
            "scrollbarHeight": 30
        },
        "trendLines": [],
        "graphs": [
            {
                "balloonText": "[[category]]:[[value]]",
                "columnWidth": 0,
                "cornerRadiusTop": 5,
                "fillAlphas": 1,
                "fixedColumnWidth": 12,
                "fontSize": 10,
                "gapPeriod": 25,
                "id": "AmGraph-1",
                "lineAlpha": 0,
                "labelText": "[[value]]",
                "color":"#FF395F",
                "tabIndex": 1,
                "title": "Año 1",
                "type": "column",
                "valueField": "column-1"
            },
            {
                "balloonText": "[[category]]:[[value]]",
                "cornerRadiusTop": 5,
                "fillAlphas": 1,
                "fixedColumnWidth": 12,
                "fontSize": 10,
                "gapPeriod": 25,
                "id": "AmGraph-2",
                "lineAlpha": 0,
                "labelText": "[[value]]",
                "color":"#9B1730",
                "tabIndex": 1,
                "title": "Año 2",
                "type": "column",
                "valueField": "column-2"
            }
        ],
        "guides": [],
        "valueAxes": [
            {
                "id": "ValueAxis-1",
                "title": ""
            }
        ],
        "allLabels": [],
        "balloon": {
            "animationDuration": 0,
            "borderThickness": 56,
            "fadeOutDuration": 0,
            "fillAlpha": 1,
            "maxWidth": 57,
            "offsetX": 55,
            "offsetY": 42,
            "pointerWidth": 3,
            "color": "#FFFFFF",
            "showBullet": true
        },
        "legend": {
            "enabled": true,
            "align": "center",
            "markerType": "circle"
        },
        "titles": [],
        "dataProvider": [
            {
                "category": "Total",
                "column-1": "350",
                "column-2": "260"
            },
            {
                "category": "Enero",
                "column-1": "20",
                "column-2": "50"
            },
            {
                "category": "Febrero",
                "column-1": "80",
                "column-2": "30"
            },
            {
                "category": "Marzo",
                "column-1": "50",
                "column-2": "20"
            },
            {
                "category": "Abril",
                "column-1": "30",
                "column-2": "10"
            },
            {
                "category": "Mayo",
                "column-1": "40",
                "column-2": "60"
            },
            {
                "category": "Junio",
                "column-1": "60",
                "column-2": "50"
            },
            {
                "category": "Julio",
                "column-1": "70",
                "column-2": "40"
            }
        ]
    }
    );
    AmCharts.makeChart("chartdivx1",
    {
        "type": "serial",
        "categoryField": "category",
        "rotate": true, 
        "autoMarginOffset": 40,
        "marginRight": 70,
        "marginTop": 70,
        "plotAreaBorderColor": "#707070",
        "colors": [
            "#FF395F",
            "#9B1730"
        ],
        "startDuration": 1,
        "backgroundColor": "#F7F7F7",
        "borderColor": "#707070",
        "fontSize": 13,
        "theme": "light",
        "categoryAxis": {
            "gridPosition": "start",
            "axisAlpha": 1,
            "labelOffset": -2,
            "titleFontSize": 0,
            "titleRotation": 0
        },
        "trendLines": [],
        "graphs": [
            {
                "balloonText": "[[category]]:[[value]]",
                "columnWidth": 0,
                "cornerRadiusTop": 5,
                "fillAlphas": 1,
                "fixedColumnWidth": 12,
                "fontSize": 10,
                "gapPeriod": 25,
                "id": "AmGraph-1",
                "lineAlpha": 0,
                "labelText": "[[value]]",
                "color":"#FF395F",
                "tabIndex": 1,
                "title": "Año 1",
                "type": "column",
                "valueField": "column-1"
            },
            {
                "balloonText": "[[category]]:[[value]]",
                "cornerRadiusTop": 5,
                "fillAlphas": 1,
                "fixedColumnWidth": 12,
                "fontSize": 10,
                "gapPeriod": 25,
                "id": "AmGraph-2",
                "lineAlpha": 0,
                "labelText": "[[value]]",
                "color":"#9B1730",
                "tabIndex": 1,
                "title": "Año 2",
                "type": "column",
                "valueField": "column-2"
            }
        ],
        "guides": [],
        "valueAxes": [
            {
                "id": "ValueAxis-1",
                "title": ""
            }
        ],
        "allLabels": [],
        "balloon": {
            "animationDuration": 0,
            "borderThickness": 56,
            "fadeOutDuration": 0,
            "fillAlpha": 1,
            "maxWidth": 57,
            "offsetX": 55,
            "offsetY": 42,
            "pointerWidth": 3,
            "color": "#FFFFFF",
            "showBullet": true
        },
        "legend": {
            "enabled": true,
            "align": "center",
            "markerType": "circle"
        },
        "titles": [],
        "dataProvider": [
            {
                "category": "Enero",
                "column-1": "20",
                "column-2": "50"
            },
            {
                "category": "Febrero",
                "column-1": "80",
                "column-2": "30"
            },
            {
                "category": "Marzo",
                "column-1": "50",
                "column-2": "20"
            },
            {
                "category": "Abril",
                "column-1": "30",
                "column-2": "10"
            },
            {
                "category": "Mayo",
                "column-1": "40",
                "column-2": "60"
            },
            {
                "category": "Junio",
                "column-1": "60",
                "column-2": "50"
            },
            {
                "category": "Julio",
                "column-1": "70",
                "column-2": "40"
            }
        ]
    }
    );
    AmCharts.makeChart("chartdivx2",
    {
        "type": "serial",
        "categoryField": "category",
        /* "rotate": true,  */
        "autoMarginOffset": 40,
        "marginRight": 70,
        "marginTop": 70,
        "plotAreaBorderColor": "#707070",
        "colors": [
            "#FF395F",
            "#9B1730"
        ],
        "startDuration": 1,
        "backgroundColor": "#F7F7F7",
        "borderColor": "#707070",
        "fontSize": 13,
        "theme": "light",
        "categoryAxis": {
            "gridPosition": "start",
            "axisAlpha": 1,
            "labelOffset": -2,
            "titleFontSize": 0,
            "titleRotation": 0
        },
        "trendLines": [],
        "graphs": [
            {
                "balloonText": "[[category]]:[[value]]%",
                "columnWidth": 0,
                "cornerRadiusTop": 5,
                "fillAlphas": 1,
                "fixedColumnWidth": 20,
                "fontSize": 10,
                "gapPeriod": 25,
                "id": "AmGraph-1",
                "lineAlpha": 0,
                "tabIndex": 1,
                "labelText": "[[value]]%",
                "color":"#FF395F",
                "labelOffset": -15,
			    "labelPosition": "bottom",
                "title": "MCD",
                "type": "column",
                "valueField": "column-1"
            },
            {
                "balloonText": "[[category]]:[[value]]%",
                "cornerRadiusTop": 5,
                "color":"#FFFFFF",
                "fillAlphas": 1,
                "fixedColumnWidth": 20,
                "fontSize": 10,
                "gapPeriod": 25,
                "id": "AmGraph-2",
                "lineAlpha": 0,
                "tabIndex": 1,
                "labelText": "[[value]]%",
                "color": "#9B1730",
                "labelOffset": -15,
			    "labelPosition": "bottom",
                "title": "AOP",
                "type": "column",
                "valueField": "column-2"
            }
        ],
        "guides": [],
        "valueAxes": [
            {
                "id": "ValueAxis-1",
                "title": "",
                "unit":"%"
            }
        ],
        "allLabels": [],
        "balloon": {
            "animationDuration": 0,
            "borderThickness": 56,
            "fadeOutDuration": 0,
            "fillAlpha": 1,
            "maxWidth": 57,
            "offsetX": 55,
            "offsetY": 42,
            "color": "#FFFFFF",
            "pointerWidth": 3
        },
        "legend": {
            "enabled": true,
            "align": "center",
            "markerType": "circle"
        },
        "titles": "",
        "dataProvider": [
            {
                "category": "Enero",
                "column-1": "20",
                "column-2": "50"
            },
            {
                "category": "Febrero",
                "column-1": "80",
                "column-2": "30"
            },
            {
                "category": "Marzo",
                "column-1": "50",
                "column-2": "20"
            },
            {
                "category": "Abril",
                "column-1": "30",
                "column-2": "10"
            },
            {
                "category": "Mayo",
                "column-1": "40",
                "column-2": "60"
            },
            {
                "category": "Junio",
                "column-1": "60",
                "column-2": "50"
            },
            {
                "category": "Julio",
                "column-1": "70",
                "column-2": "40"
            }
        ]
    }
    );
    
</script>
<!-- Pie Chart -->
<script type="text/javascript">
			AmCharts.makeChart("chartdiv1",
				{
					"type": "pie",
					"balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
                    "labelRadius": 0,
					"colors": [
						"#FF395F",
						"#7B7B7B",
						"#9B1730"
					],
					"titleField": "category",
					"valueField": "column-1",
                    "color": "#9B1730",
					"allLabels": [],
					"balloon": {},
					"titles": [],
					"dataProvider": [
						{
							"category": "Area 1",
							"column-1": 21
						},
						{
							"category": "Area 2",
							"column-1": 12
						},
						{
							"category": "Area 3",
							"column-1": 60
						}
					]
				}
			);
            var delay = ( function() {
                var timer = 0;
                return function(callback, ms) {
                    clearTimeout (timer);
                    timer = setTimeout(callback, ms);
                };
            })();
            delay(function(){
                console.log('ejecuta before');
                $('#chartdiv a').fadeOut(); 
                $('.amcharts-chart-div a').css('display','none');   // do stuff
            }, 300 ); // end delay
		</script>

<!-- Donut Chart -->

<script>
    /**
* Sets the donut svg component value
*/
function setDonutValue(donut, value){
    var elm=donut.querySelector('.value')
    if( !donut || !value || value < 0 || value > 100 )
        return false;
    var circleFront = donut.querySelector('.circle-front'),
        radius = circleFront.r.baseVal.value;
        dasharray   = 2 * Math.PI * radius;
    circleFront.style.strokeDashoffset = dasharray * (1 - (value/100)) + 'px';
}


</script>

<script>
    $('.picker_date').datepicker({format: 'yyyy-mm-dd'});
    $(function() {
        $('.picker_date').disableAutoFill();
    });
</script>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("filter");
  tr = table.getElementsByTagName("tr");
  console.log(tr);
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      console.log('txtValue : '+txtValue);
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<script>
    /* function myFunction() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput1");
      filter = input.value.toUpperCase();
      table = document.getElementById("filter1");
      tr = table.getElementsByTagName("li");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("p")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    } */
</script>
<script>
    function modalform(){
        $('.modal_form1').css('display','block');
    };
    function modalform_e(){
        $('.modal_form1').css('display','block');
        $('.modal_form1 .title h5').text('Editar Propuesta');
    };
    function modalform2(){
        $('.modal_form2').css('display','block');
    };
    function out_modal(){
        $('.modal_form').css('display','none');
    };
    function out_modal1(){
        $('.modal_form2').css('display','none');
    };
    function graph1(){
        $('.modal_form1').css('display','block');
        AmCharts.makeChart("chartdiv3",
				{
					"type": "pie",
					"balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
                    "labelRadius": 0,
					"colors": [
						"#FF395F",
						"#7B7B7B",
						"#9B1730"
                    ],
                    "pullOutEffect": "elastic",
                    "pullOutOnlyOne": true,
                    "depth3D": 12,
                    "labelRadius": 0,
                    "pullOutRadius": "10%",
                    "startRadius": "100%",
					"titleField": "category",
					"valueField": "column-1",
                    "color": "#9B1730",
					"allLabels": [],
					"balloon": {},
					"titles": [],
					"dataProvider": [
						{
							"category": "Proyecto 1",
							"column-1": 21
						},
						{
							"category": "Proyecto 2",
							"column-1": 12
						},
						{
							"category": "Proyecto 3",
							"column-1": 60
						}
					]
				}
			);
            $('.amcharts-chart-div a').css('display','none');
    };
    function graph2(){
        $('.modal_form2').css('display','block');
        AmCharts.makeChart("chartdiv2",
				{
					"type": "pie",
					"balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
                    "labelRadius": 0,
					"colors": [
						"#FF395F",
						"#7B7B7B",
						"#9B1730"
                    ],
                    "pullOutEffect": "elastic",
                    "pullOutOnlyOne": true,
                    "depth3D": 12,
                    "labelRadius": 0,
                    "pullOutRadius": "10%",
                    "startRadius": "100%",
					"titleField": "category",
					"valueField": "column-1",
                    "color": "#9B1730",
					"allLabels": [],
					"balloon": {},
					"titles": [],
					"dataProvider": [
						{
							"category": "Tipo de venta 1",
							"column-1": 21
						},
						{
							"category": "Tipo de venta 2",
							"column-1": 12
						},
						{
							"category": "Tipo de venta 3",
							"column-1": 60
						}
					]
				}
			);
            $('.amcharts-chart-div a').css('display','none');
    };
    function importData(n) {
        let itn="";
        if(n==0){
            itn=$('.form_group .name').val()
            $('.files_form:eq('+n+') .cont_file').append('<a href="http://www.africau.edu/images/default/sample.pdf" target="_blank" class="file" id="file_quote"><i class="fa fa-paperclip" aria-hidden="true"></i>'+itn+'</a>');
            out_modal();
            finish();
        };
        let input = document.createElement('input');
        input.type = 'file';
        input.onchange = _ => {
            // you can use this method to get file and perform respective operations
                    let files =   Array.from(input.files);
                    /* console.log(files); */
                    let x=$('.files_form:eq('+n+') a').length;
                    /* console.log(n); */
                    c=x+1;
                    
                    if(n==1){
                        itn="Reporte"
                    };
                    if(n==2){
                        itn='Certificado'
                    }
                    console.log(n);
                    $('.files_form:eq('+n+') .cont_file').append('<a href="http://www.africau.edu/images/default/sample.pdf" target="_blank" class="file" id="file_quote"><i class="fa fa-paperclip" aria-hidden="true"></i>'+itn+' '+c+'</a>');
                };
        input.click();
    };
    function show_cdo(){
        $('.cdo_c').toggleClass('itn_cdo');
        $('.cdo i').toggleClass('fa-plus-circle').toggleClass('fa-times-circle');
    };
    function show_cfo(){
        $('.cfo_c').toggleClass('itn_cfo');
        $('.cfo i').toggleClass('fa-plus-circle').toggleClass('fa-times-circle');
    }
    function show_aop(){
        $('.aop_c').toggleClass('itn_aop');
        $('.uo i').toggleClass('fa-plus-circle').toggleClass('fa-times-circle');
    }
    var delay = ( function() {
        var timer = 0;
        return function(callback, ms) {
            clearTimeout (timer);
            timer = setTimeout(callback, ms);
        };
    })();
    delay(function(){
        console.log('ejecuta before');
        $('#chartdiv a').fadeOut(); 
        $('.amcharts-chart-div a').css('display','none');   // do stuff
    }, 300 ); // end delay
</script>
<script>
    $(document).ready(function() {
        $('.file__input--file').on('change',function(event){
            var oid=$(this).attr("id");
            var oidl=oid.charAt(oid.length-1);
            var file = event.target.files;
            if (file.length > 0){
                $("<div class='file__value'><div class='file__value--text'>" + file[0].name + "</div><div class='file__value--remove' data-id='" + file[0].name + "' ></div></div>").insertAfter('#label'+oid);
            }

        });
        //Click to remove item
        $('body').on('click', '.file__value', function() {
            $(this).remove();
        });
    });
</script>
<script>
    $(document).ready(function() {
        console.log("ready");
        $("#table").DataTable({
        });
        $(".dataTables_filter input")
            .attr("placeholder", "Busque aquí...")
            .css({
            width: "300px",
            display: "inline-block"
            });
        $('.dataTables_length').css('display','none');
        $('.dataTables_info').css('display','none');
        $('.dataTables_filter').css('display','none');
        $('#table').parent().addClass('prov_table');
        $('#table').parent().removeClass('col-sm-12');
        $('#table_wrapper .row').addClass('m-0');
        $('#table')[0].style.setProperty('border-collapse','collapse','important');
        $('#table_previous a').text('').append('<i class="fa fa-chevron-left" aria-hidden="true"></i>');
        $('#table_next a').text('').append('<i class="fa fa-chevron-right" aria-hidden="true"></i>');

    });

</script>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.select2').select2();
    });
    </script> 
