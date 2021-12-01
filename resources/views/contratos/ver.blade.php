@extends('layout') 
@section('content')
<div class='conntent_background contr'>
        <div class="content_background_gradient">
            <div class="container-fluid">
                <div class="row section1 int_c">
                    <div class='content'>
                        <div class='user'>
                            <img src="/assets/images/icon/user.png" alt="">                            
                            <p>Nombre del Cliente</p>
                            <div class='back'><a href="{{ route('contratos.index') }}"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class='row section2 int_c'>
                    <div class='content'>
                        <div class='col-md-6'>
                            <div class='col-md-12'>
                                <div class='form_section'>
                                    <div class='content_form'>
                                        <form action="">
                                            <div class='form_group'>
                                                <label for="">Proyecto</label>
                                                <input type="text" name="" id="" value='Fee Comunicaciones Internas' disabled>
                                            </div>
                                            <div class='form_group'>
                                                <label for="">Descripción</label>
                                                <input type="text" name="" id="" value='PR + Social Media+ Creatividad' disabled>
                                            </div>
                                            <div class='form_group'>
                                                <label for="">País</label>
                                                <input type="text" name="" id="" value='Colombia' disabled>
                                            </div>
                                            <div class='form_group'>
                                                <label for="">Duración</label>
                                                <input class='double_input picker_date' type="text" name="" id="" value='Inicio' disabled>
                                                <input class='double_input picker_date' type="text" name="" id="" value='Fin' disabled>
                                            </div>
                                            <div class='form_group col-md-6'>
                                                <label for="">Fuente</label>
                                                <input type="text" name="" id="" value='Cliente Actual' disabled>
                                            </div>
                                            <div class='form_group col-md-6'>
                                                <label for="">Moneda</label>
                                                <input type="text" name="" id="" value='Pesos Colombianos' disabled>
                                            </div>
                                            <div class='form_group col-md-6'>
                                                <label for="">Valor Neto</label>
                                                <input type="text" name="" id="" value='$200.000.000' disabled>
                                            </div>
                                            <div class='form_group col-md-6'>
                                                <label for="">Valor Total</label>
                                                <input type="text" name="" id="" value='$219.000.000' disabled>
                                            </div>
                                            
                                            <div class='form_group'>
                                                <label for="">Tipo Venta</label>
                                                <input type="text" name="" id="" value='Contrato Inicial' disabled>
                                            </div>                                            
                                            <div class='form_group'>
                                                <label for="">Contrato / PO Nro</label>
                                                <div class='files_form justify-content-between'>
                                                    <div class='d-flex flex-wrap cont_file'>
                                                        <a href='http://www.africau.edu/images/default/sample.pdf' target='_blank' class='file' id='file_quote'>
                                                            <i class="fa fa-paperclip" aria-hidden="true"></i>PO 1
                                                        </a>
                                                        <a href='http://www.africau.edu/images/default/sample.pdf' target='_blank' class='file' id='file_quote'>
                                                            <i class="fa fa-paperclip" aria-hidden="true"></i>PO 2
                                                        </a>
                                                    </div>                                                    
                                                    <div class='d-flex align-items-center add_file btn p-0' >
                                                        <i class="fa fa-plus-circle" aria-hidden="true" onclick='modalform()'></i>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class='form_group'>
                                                <label for="">Condiciones de Facturación</label>
                                                <textarea  name="" id="" value='' disabled>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s</textarea>
                                            </div>
                                            <div class='form_group'>
                                                <label for="">Condiciones de Pago</label>
                                                <input type="text" name="" id="" value='Número días' disabled>
                                            </div>
                                            <div class='form_group'>
                                                <label for="">Reportes</label>
                                                <div class='files_form justify-content-between'>
                                                    <div class='d-flex flex-wrap cont_file'>
                                                        <a href='http://www.africau.edu/images/default/sample.pdf' target='_blank' class='file' id='file_quote'>
                                                            <i class="fa fa-paperclip" aria-hidden="true"></i>Reporte 1
                                                        </a>
                                                        <a href='http://www.africau.edu/images/default/sample.pdf' target='_blank' class='file' id='file_quote'>
                                                            <i class="fa fa-paperclip" aria-hidden="true"></i>Reporte 2
                                                        </a>
                                                    </div>                                                    
                                                    <div class='d-flex align-items-center add_file btn p-0' >
                                                        <i class="fa fa-plus-circle" aria-hidden="true" onclick="importData(1)"></i>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class='form_group'>
                                                <label for="">Certificados</label>
                                                <div class='files_form justify-content-between'>
                                                    <div class='d-flex flex-wrap cont_file'>
                                                        <a href='http://www.africau.edu/images/default/sample.pdf' target='_blank' class='file' id='file_quote'>
                                                            <i class="fa fa-paperclip" aria-hidden="true"></i>Certificado 1
                                                        </a>
                                                        <a href='http://www.africau.edu/images/default/sample.pdf' target='_blank' class='file' id='file_quote'>
                                                            <i class="fa fa-paperclip" aria-hidden="true"></i>Certificado 2
                                                        </a>
                                                    </div>
                                                    <div class='d-flex align-items-center add_file btn p-0' >
                                                        <i class="fa fa-plus-circle" aria-hidden="true" onclick="importData(2)"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class='graph_section'>
                                <div class='col-md-4'>
                                    <div id="canvas-holder">
                                        <canvas id="chart" data-value='64'></canvas>
                                        <h3>Ejecutado</h3>
                                    </div>
                                </div>
                                <div class='col-md-4'>
                                    <div id="canvas-holder">
                                        <canvas id="chart1" data-value='20'></canvas>
                                        <h3>Facturado</h3>
                                    </div>
                                </div>
                                <div class='col-md-4'>
                                    <div id="canvas-holder">
                                        <canvas id="chart2" data-value='50'></canvas>
                                        <h3>Pagado</h3>
                                    </div>
                                </div>
                            </div>
                            <a class='title_section btn' href="{{ route('contratos.facturas') }}">
                                <p>
                                    Ver detalle de facturación y pagos
                                </p>                                
                            </a>
                            <div class="table-responsive">
                                <div class=''>
                                    <table id="table" class="">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <p>
                                                    Fechas Factura
                                                    </p>
                                                </th>
                                                <th>
                                                    <p>
                                                    Nro Factura
                                                    </p>
                                                </th>
                                                <th>
                                                    <p>
                                                    Valor
                                                    </p>
                                                </th>
                                                <th>
                                                    <p>
                                                    Facha de Pago
                                                    </p>
                                                </th>
                                                <th>                                                    
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td >
                                                    19-jan-2020                                                                 
                                                </td>
                                                <td>
                                                    500
                                                </td>
                                                <td >
                                                    $100.000.000
                                                </td>
                                                <td >
                                                    19-jan-2020                                                              
                                                </td>
                                                <td>
                                                    <p class='btn' onclick='modalform2()'>Editar</p>
                                                </td>
                                            </tr>
                                            <tr>
                                            <td >
                                                    19-jan-2020                                                                 
                                                </td>
                                                <td>
                                                    500
                                                </td>
                                                <td >
                                                    $100.000.000
                                                </td>
                                                <td >
                                                    19-jan-2020                                                              
                                                </td>
                                                <td>
                                                    <p class='btn' onclick='modalform2()'>Editar</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td >
                                                    19-jan-2020                                                                 
                                                </td>
                                                <td>
                                                    500
                                                </td>
                                                <td >
                                                    $100.000.000
                                                </td>
                                                <td >
                                                    19-jan-2020                                                              
                                                </td>
                                                <td>
                                                    <p class='btn' onclick='modalform2()'>Editar</p>
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
        </div>
    </div>
    <div class="modal_form modal_form1 prop" id="PopupLegal">
        <div class='content_modal'>
            <div class="cuerpo_modal_form">
                <div class="info_modal">
                    <span class="close-btn" onclick='out_modal()'><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                    <div class="h-100">
                        <div class='title'>
                            <i class="fa fa-book" aria-hidden="true"></i>
                            <h5>Adicionar Contrato / PO Nro</h5>
                        </div>                        
                        <div class='content_form'>
                            <form action="">
                                <div class='form_group'>
                                    <label for="">Nombre del archivo</label>
                                    <input class='name' type="text" data-value='name' placeholder='Ingrese nombre'>
                                </div>
                                <div class='form_group'>
                                    <label for="">Contrato PO</label>
                                    <input type="text" placeholder='Ingrese Contrato PO'>
                                </div>
                                <div class='form_group'>
                                    <label for="">Año</label>
                                    <input type="text" placeholder='Ingrese año'>
                                </div> 
                                <div class='form_group'>
                                    <label for="">Contrato PO</label>
                                    <input type="file" placeholder='Cargue un archivo'>
                                </div>                               
                                <div class='form_group justify-content-end'  >
                                    <div class='d-flex'>
                                        <div class='btn button_form_close' onclick='out_modal()'>
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                            Close
                                        </div>
                                        <div class='btn button_form_save' onclick="importData(0)">
                                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                                            Save
                                        </div>
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
                            <i class="fa fa-book" aria-hidden="true"></i>
                            <h5>Editar</h5>
                        </div>                        
                        <div class='content_form'>
                            <form action="">
                                <div class='form_group'>
                                    <label for="">Fechas factura</label>
                                    <input type="text" placeholder='Ingrese una fecha'>
                                </div>
                                <div class='form_group'>
                                    <label for="">Nro factura</label>
                                    <input type="text" placeholder='Ingrese Nro factura'>
                                </div>
                                <div class='form_group'>
                                    <label for="">Valor</label>
                                    <input type="text" placeholder='Ingrese valor'>
                                </div> 
                                <div class='form_group'>
                                    <label for="">Fecha de pago</label>
                                    <input type="text" placeholder='Ingrese una fecha'>
                                </div>                               
                                <div class='form_group justify-content-end'  >
                                    <div class='d-flex'>
                                        <div class='btn button_form_close' onclick='out_modal()'>
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                            Close
                                        </div>
                                        <div class='btn button_form_save'">
                                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                                            Save
                                        </div>
                                    </div>
                                </div>                              
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection     