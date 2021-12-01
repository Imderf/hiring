@extends('layout') 
@section('content')
    <div class='conntent_background client'>
        <div class="content_background_gradient">
            <div class="container-fluid">
                <div class="row section1 int_c">
                    <div class='content'>
                        <div class='user'>
                            <img src="/assets/images/icon/user.png" alt="">
                            <p>Clientes</p>
                            <div class='back'><a href="{{ route('clientes.index') }}"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a></div>
                            <a href="{{ url('auth/logout') }}" class="logout-btn">
                                <i class="fa fa-sign-out" aria-hidden="true" style="font-size: 4vh;"></i>
                            </a>
                        </div>
                        <a href="{{ route('clientes.aop') }}" class='item'>
                            <img src="/assets/images/icon/aop.png" alt="">
                            <p>AOP</p>
                        </a>
                        <a href="{{ route('clientes.time') }}" class='item'>
                            <img src="/assets/images/icon/time.png" alt="">
                            <p>TIMESHEET</p>
                        </a>
                    </div>
                </div>
                <div class='row section2 int_c'>
                    <div class='content'>
                        <div class='col-md-6'>
                            <div class='form_section'>
                                <div class='content_form'>
                                    <form action="">
                                        <div class='info_main'>
                                            <div class='form_group'>
                                                <label for="">Estado</label>
                                                <input type="text" name="" id="" value='' disabled>
                                            </div>
                                            <div class='form_group'>
                                                <label for="">Países</label>
                                                <input type="text" name="" id="" value='' disabled>
                                            </div>
                                            <div class='form_group'>
                                                <label for="">Fuente</label>
                                                <input type="text" name="" id="" value='' disabled>
                                            </div>
                                        </div>
                                        <div class='info_contact'>
                                            <div class='title'>
                                                <label for="">Contactos Cliente</label>
                                                <div onclick='modalform()'>
                                                    <div class='btn'>Agregar/ Editar contacto</div>
                                                </div>                                                
                                            </div>
                                            <div class='data'>
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                Nombre
                                                            </th>
                                                            <th>
                                                                Cargo
                                                            </th>
                                                            <th>
                                                                Mail
                                                            </th>
                                                            <th>
                                                                País
                                                            </th>
                                                            <th>
                                                                Teléfono
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class='title'>
                                                <label for="">Contactos MG</label>
                                                <div onclick='modalform()'>
                                                    <div class='btn'>Agregar/ Editar contacto</div>
                                                </div>                                                
                                            </div>
                                            <div class='data'>
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                Nombre
                                                            </th>
                                                            <th>
                                                                Cargo
                                                            </th>
                                                            <th>
                                                                Mail
                                                            </th>
                                                            <th>
                                                                País
                                                            </th>
                                                            <th>
                                                                Teléfono
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>      
                        <div class='content_div col-md-6 d-flex justify-content-end flex-wrap'>
                            <div class='col-4'>
                                <div class='div_b'>
                                <p>Propuestas presentadas</p>
                                </div>
                            </div>
                            <div class='col-4'>
                                <div class='div_b'>
                                <p>Cantidad</p>
                                </div>
                            </div>
                            <div class='col-4'>
                                <div class='div_b'>
                                <p>$</p>
                                </div>
                            </div>
                            <div class='col-4'>
                                <div class='div_b'>
                                <p>Propuestas Ganadas</p>
                                </div>
                            </div>
                            <div class='col-4'>
                                <div class='div_b'>
                                <p>Cantidad</p>
                                </div>
                            </div>
                            <div class='col-4'>
                                <div class='div_b'>
                                <p>$</p>
                                </div>
                            </div>
                            <div class='col-8'>
                                <div class='div_b'>
                                <p>Efectividad</p>
                                </div>
                            </div>
                            <div class='col-4'>
                                <div class='div_b'>
                                <p>%</p>
                                </div>
                            </div>
                            <div class='col-8'>
                                <div class='div_b'>
                                <p>AOP - PROYECTO 1</p>
                                </div>
                            </div>
                            <div class='col-4'>
                                <div class='div_b y_b'>
                                <p>YELLOW</p>
                                </div>
                            </div>
                            <div class='col-8'>
                                <div class='div_b'>
                                <p>AOP - PROYECTO 2</p>
                                </div>
                            </div>
                            <div class='col-4'>
                                <div class='div_b y_b'>
                                <p>YELLOW</p>
                                </div>
                            </div>
                            <div class='col-8'>
                                <div class='div_b'>
                                <p>AOP - PROYECTO 3</p>
                                </div>
                            </div>
                            <div class='col-4 '>
                                <div class='div_b y_b'>
                                <p>YELLOW</p>
                                </div>
                            </div>
                            <div class='col-6 mt-5'>
                                <div class='div_b'>
                                <p>HORAS DEDICADAS</p>
                                </div>
                            </div>
                            <div class='col-2 mt-5'>
                                <div class='div_b'>
                                <p>2020</p>
                                </div>
                            </div>
                            <div class='col-4 mt-5'>
                                <div class='div_b'>
                                <p>00:00:00</p>
                                </div>
                            </div>
                            <div class='col-2'>
                                <div class='div_b'>
                                <p>2021</p>
                                </div>
                            </div>
                            <div class='col-4'>
                                <div class='div_b'>
                                <p>00:00:00</p>
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
                            <i class="fa fa-address-card" aria-hidden="true"></i>
                            <h5>Agregar contacto</h5>
                        </div>                        
                        <div class='content_form'>
                            <form action="">
                                <div class='form_group'>
                                    <label for="">Nombre</label>
                                    <input type="text" placeholder='Ingrese nombre'>
                                </div>
                                <div class='form_group'>
                                    <label for="">Cargo</label>
                                    <input type="text" placeholder='Ingrese cargo'>
                                </div>
                                <div class='form_group'>
                                    <label for="">Mail</label>
                                    <input type="email" placeholder='Ingrese correo electrónico'>
                                </div>
                                <div class='form_group'>
                                    <label for="">País</label>
                                    <select>
                                        <option value="" selected disabled>Seleccione País</option>
                                        <option value="" >País 1</option>
                                        <option value="" >País 2</option>
                                    </select>
                                </div>
                                <div class='form_group'>
                                    <label for="">Teléfono</label>
                                    <input type="number" placeholder='Ingrese número telefónico'>
                                </div>                                
                                <div class='form_group justify-content-end'  >
                                    <div class='d-flex'>
                                        <div class='btn button_form_close' onclick='out_modal()'>
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
        $('.left-sidebar .logout-btn').remove();
    </script>
@endsection     