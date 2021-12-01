@extends('layout') 
@section('content')
    <div class='conntent_background time'>
        <div class="content_background_gradient">
            <div class="container-fluid">
                <div class="row section1 int_c">
                    <div class='content'>
                        <div class='user'>
                            <img src="/assets/images/icon/user.png" alt="">
                            <p>Clientes</p>
                            <div class='back'><a href="{{ route('clientes.cliente') }}"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a></div>
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
                    <div class='content mt-5'>
                        <div class='col-md-6'>
                            <div class='col-md-12'>
                                <div class='form_section'>
                                    <div class='content_form'>
                                        <form action="">
                                            <div class='form_group'>
                                                <label for="">Cliente</label>
                                                <select name="" id="">
                                                    <option value="" selected disabled>Nombre de Cliente</option>
                                                    <option value="">Cliente 1</option>
                                                    <option value="">Cliente 2</option>
                                                    <option value="">Cliente 3</option>
                                                </select>                                                
                                            </div>
                                            <div class='form_group'>
                                                <label for="">Mes</label>
                                                <div class='mult_slt'>
                                                    <select class='col-12' name="" id="">
                                                        <option value="" selected disabled>Seleccione proyecto</option>
                                                        <option value="">Proyecto 1</option>
                                                        <option value="">Proyecto 2</option>
                                                        <option value="">Proyecto 3</option>
                                                    </select>
                                                    <select class='col-6 month' name="" id="">
                                                        <option value="" selected disabled>Mes</option>
                                                        <option value="">Mes 1</option>
                                                        <option value="">Mes 2</option>
                                                        <option value="">Mes 3</option>
                                                    </select>
                                                    <select class='col-6 year' name="" id="">
                                                        <option value="" selected disabled>Año</option>
                                                        <option value="">Año 1</option>
                                                        <option value="">Año 2</option>
                                                        <option value="">Año 3</option>
                                                    </select>
                                                </div>                                                
                                            </div>
                                            <div class='form_group'>
                                                <label for="">País</label>
                                                <select class='' name="" id="">
                                                    <option value="" selected disabled>Nombre de País</option>
                                                    <option value="">País 1</option>
                                                    <option value="">País 2</option>
                                                    <option value="">País 3</option>
                                                </select>                                               
                                            </div>                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-12 ctn_grph mt-2 mb-2'>
                                <div id="chartdiv" style=' '></div>
                            </div>
                            <div class='d-flex justify-content-center'>
                                <div class="title_section">
                                    <p>Horas dedicadas por actividad</p>                                                                    
                                </div>
                            </div>
                            <div class='col-md-12 ctn_grph_pie mt-2 mb-2'>
                                <div class='chartdiv' id="chartdiv1" style=' '></div>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class='d-flex justify-content-center'>
                                <div class="title_section">
                                    <p>Horas reportadas por Persona</p>                                                                   
                                </div>
                            </div>
                            <div class='col-md-12 ctn_grphx mt-2 mb-2'>
                                <div class='chartdivx' id="chartdivx" style=' '></div>
                            </div>
                            <div class='d-flex justify-content-center'>
                                <div class="title_section">
                                    <p>Horas dedicadas por tareas</p> 
                                </div>
                            </div>
                            <div class='col-md-12 ctn_grphx mt-2 mb-2'>
                                <div class='chartdivx' id="chartdivx1" style=' '></div>
                            </div>
                        </div>
                       <!--  <img src="/assets/images/time.png" alt="" style='    width: 95%;'>    -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.left-sidebar .logout-btn').remove();
    </script>
@endsection     