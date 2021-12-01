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
                            <div class='back'><a href="{{ route('contratos.ver') }}"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class='row section2 int_c'>
                    <div class='content'>                       
                        <div class='col-md-12'>    
                            <div class='add_invoice' onclick='modalform()'>
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                Añadir nueva factura
                            </div> 
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
                                                    <p class='btn' onclick='modalform2()'>Ver / Editar</p>
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
                                                    <p class='btn' onclick='modalform2()'>Ver / Editar</p>
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
                                                    <p class='btn' onclick='modalform2()'>Ver / Editar</p>
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
                            <h5>Nueva factura</h5>
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