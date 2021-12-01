@extends('layout') 
@section('content')
    <div class='conntent_background aop'>
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
                        <div class='item'>
                            <img src="/assets/images/icon/country.png" alt="">
                            <select>
                                <option value="" selected disabled>País</option>
                                <option value="" >País 1</option>
                                <option value="" >País 2</option>
                            </select>
                        </div>
                        <div class='item'>
                            <img src="/assets/images/icon/project.png" alt="">
                            <select>
                                <option value="" selected disabled>Proyecto</option>
                                <option value="" >Proyecto 1</option>
                                <option value="" >Proyecto 2</option>
                            </select>
                        </div>
                        <div class='item swiper-container swiper-container-h' style=''>
                            <div class="swiper-wrapper" name="" id="">
                                <div class="swiper-slide">Year</div>
                                <?php $year = 2018; while($year <= date('Y')): ?>
                                <div class="swiper-slide" data-year="<?=$year?>"><?=$year?></div>
                                <?php $year++; endwhile; ?>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination-h"></div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next marcas-next"></div>
                            <div class="swiper-button-prev marcas-prev"></div>
                        </div>
                    </div>
                </div>
                <div class='row section2 int_c'>
                    <div class='content mt-5' style='    width: 60%;'>
                       <!--  <div class='item'>
                            <p>AOP Tool</p>  
                        </div>
                        <div class='item'>
                            <p>Account Operational Profitability</p>  
                        </div> -->
                        <div class='col-md-12 mt-4'>
                            <div class='form_section'>
                                <div class='content_form'>
                                    <form action="">
                                        <div class='form_group'>
                                            <label class='d-flex align-items-center' for="">Cliente</label>
                                            <div class='mult_slt'>
                                                <select class='col-12' name="" id="">
                                                    <option value="" selected disabled>LINIO</option>
                                                    <option value="">Opcion 1</option>
                                                    <option value="">Opcion 2</option>
                                                    <option value="">Opcion 3</option>
                                                </select>
                                                <select class='col-12 mt_4px' name="" id="">
                                                    <option value="" selected disabled>Seleccionar Proyecto</option>
                                                    <option value="">Proyecto 1</option>
                                                    <option value="">Proyecto 2</option>
                                                    <option value="">Proyecto 3</option>
                                                </select>
                                            </div>                                                                                           
                                        </div>
                                        <div class='form_group'>
                                            <label for="">Año</label>
                                            <select class='' name="" id="">
                                                <option value="" selected disabled>Seleccionar año</option>
                                                <option value="">año 1</option>
                                                <option value="">año 2</option>
                                                <option value="">año 3</option>
                                            </select>       
                                        </div>
                                        <div class='form_group'>
                                            <label for="">Mes</label>
                                            <div class='mult_slt'>
                                                <select class='col-6 bg_g1 pr-2' name="" id="">
                                                    <option value="" selected disabled>Mes</option>
                                                    <option value="">Mes 1</option>
                                                    <option value="">Mes 2</option>
                                                    <option value="">Mes 3</option>
                                                </select>
                                                <input class='col-6 bg_g1 pl-2' type="text" disabled value='YTD AUG 2020'>                                                
                                            </div>                                                
                                        </div>
                                        <div class='form_group'>
                                            <label for="">Facturación</label>
                                            <div class='mult_slt'>
                                                <input class='col-3 bg_g2' type="text" value='2.700' disabled>
                                                <input class='col-3 bg_r1' type="text" value='% Ventas' disabled>
                                                <input class='col-3 bg_g2' type="text" value='23.700' disabled>
                                                <input class='col-3 bg_r1' type="text" value='% Ventas' disabled>
                                            </div>                                                  
                                        </div>     
                                        <div class='form_group'>
                                            <label for="">Corporativo</label>
                                            <div class='mult_slt'>
                                                <input class='col-3 bg_g2' type="text" value='499' disabled>
                                                <input class='col-3 bg_g3' type="text" value='18%' disabled>
                                                <input class='col-3 bg_g2' type="text" value='3.052' disabled>
                                                <input class='col-3 bg_g3' type="text" value='13%' disabled>
                                            </div>                                                  
                                        </div>   
                                        <div class='form_group'>
                                            <label for="" class='cdo position-relative'>CDO
                                                <i class="btn fa fa-plus-circle" aria-hidden="true" onclick='show_cdo()'></i>
                                            </label>                                            
                                            <div class='mult_slt'>
                                                <input class='col-3 bg_g2' type="text" value='1.716' disabled>
                                                <input class='col-3 bg_g3' type="text" value='64%' disabled>
                                                <input class='col-3 bg_g2' type="text" value='12.179' disabled>
                                                <input class='col-3 bg_g3' type="text" value='51%' disabled>
                                            </div>                                                  
                                        </div>
                                        <div class='form_group cdo_c itn_cdo'>
                                            <label class='bdr_none' for="">Gerencia de cuentas</label>
                                            <div class='mult_slt'>
                                                <input class='col-3' type="text" value='91' disabled>
                                                <input class='col-3' type="text" value='3%' disabled>
                                                <input class='col-3' type="text" value='1.670' disabled>
                                                <input class='col-3' type="text" value='7%' disabled>
                                            </div>                                                  
                                        </div>
                                        <div class='form_group cdo_c itn_cdo'>
                                            <label class='bdr_none' for="">Coordinación de Cuentas</label>
                                            <div class='mult_slt'>
                                                <input class='col-3' type="text" value='447' disabled>
                                                <input class='col-3' type="text" value='17%' disabled>
                                                <input class='col-3' type="text" value='3.202' disabled>
                                                <input class='col-3' type="text" value='14%' disabled>
                                            </div>                                                  
                                        </div>
                                        <div class='form_group cdo_c itn_cdo'>
                                            <label class='bdr_none' for="">Ejecutivos de Cuenta</label>
                                            <div class='mult_slt'>
                                                <input class='col-3' type="text" value='579' disabled>
                                                <input class='col-3' type="text" value='21%' disabled>
                                                <input class='col-3' type="text" value='3.085' disabled>
                                                <input class='col-3' type="text" value='13%' disabled>
                                            </div>                                                  
                                        </div>
                                        <div class='form_group cdo_c itn_cdo'>
                                            <label class='bdr_none' for="">Contenido</label>
                                            <div class='mult_slt'>
                                                <input class='col-3' type="text" value='111' disabled>
                                                <input class='col-3' type="text" value='4%' disabled>
                                                <input class='col-3' type="text" value='933' disabled>
                                                <input class='col-3' type="text" value='4%' disabled>
                                            </div>                                                  
                                        </div>
                                        <div class='form_group cdo_c itn_cdo'>
                                            <label class='bdr_none' for="">Digital/ Investigación</label>
                                            <div class='mult_slt'>
                                                <input class='col-3' type="text" value='206' disabled>
                                                <input class='col-3' type="text" value='8%' disabled>
                                                <input class='col-3' type="text" value='819' disabled>
                                                <input class='col-3' type="text" value='3%' disabled>
                                            </div>                                                  
                                        </div>
                                        <div class='form_group cdo_c itn_cdo'>
                                            <label class='bdr_none' for="">Creatividad y Diseño</label>
                                            <div class='mult_slt'>
                                                <input class='col-3' type="text" value='0' disabled>
                                                <input class='col-3' type="text" value='0%' disabled>
                                                <input class='col-3' type="text" value='0' disabled>
                                                <input class='col-3' type="text" value='0%' disabled>
                                            </div>                                                  
                                        </div>
                                        <div class='form_group cdo_c itn_cdo'>
                                            <label class='bdr_none' for="">Desarrollo</label>
                                            <div class='mult_slt'>
                                                <input class='col-3' type="text" value='0' disabled>
                                                <input class='col-3' type="text" value='0%' disabled>
                                                <input class='col-3' type="text" value='0' disabled>
                                                <input class='col-3' type="text" value='0%' disabled>
                                            </div>                                                  
                                        </div>
                                        <div class='form_group cdo_c itn_cdo'>
                                            <label class='bdr_none' for="">Terceros</label>
                                            <div class='mult_slt'>
                                                <input class='col-3' type="text" value='281' disabled>
                                                <input class='col-3' type="text" value='10%' disabled>
                                                <input class='col-3' type="text" value='2.469' disabled>
                                                <input class='col-3' type="text" value='10%' disabled>
                                            </div>                                                  
                                        </div>
                                        <div class='form_group'>
                                            <label for="">MCD</label>
                                            <div class='mult_slt mcdcol'>
                                                <input class='col-3 bg_g2' type="text" value='485' disabled>
                                                <input class='col-3 bg_g2' type="text" value='18%' disabled>
                                                <input class='col-3 bg_g2' type="text" value='8.470' disabled>
                                                <input class='col-3 bg_g2' type="text" value='36%' disabled>
                                            </div>                                                  
                                        </div>
                                        <div class='form_group cfo'>
                                            <label class='position-relative' for="">CFO
                                                <i class="btn fa fa-plus-circle" aria-hidden="true" onclick='show_cfo()'></i>
                                            </label>
                                            <div class='mult_slt'>
                                                <input class='col-3 bg_g2' type="text" value='211' disabled>
                                                <input class='col-3 bg_g2' type="text" value='8%' disabled>
                                                <input class='col-3 bg_g2' type="text" value='2.646' disabled>
                                                <input class='col-3 bg_g2' type="text" value='11%' disabled>
                                            </div>                                                  
                                        </div>
                                        <div class='form_group cfo_c itn_cfo'>
                                            <label class='bdr_none' for="">Administrativos</label>
                                            <div class='mult_slt'>
                                                <input class='col-3' type="text" value='211' disabled>
                                                <input class='col-3' type="text" value='8%' disabled>
                                                <input class='col-3' type="text" value='2.565' disabled>
                                                <input class='col-3' type="text" value='11%' disabled>
                                            </div>                                                  
                                        </div>
                                        <div class='form_group cfo_c itn_cfo'>
                                            <label class='bdr_none' for="">Gastos de venta</label>
                                            <div class='mult_slt'>
                                                <input class='col-3' type="text" value='211' disabled>
                                                <input class='col-3' type="text" value='8%' disabled>
                                                <input class='col-3' type="text" value='2.565' disabled>
                                                <input class='col-3' type="text" value='11%' disabled>
                                            </div>                                                  
                                        </div>
                                        <div class='form_group'>
                                            <label for="">TOTAL COSTOS</label>
                                            <div class='mult_slt'>
                                                <input class='col-3 bg_g2' type="text" value='2.427' disabled>
                                                <input class='col-3 bg_g2' type="text" value='90%' disabled>
                                                <input class='col-3 bg_g2' type="text" value='17.876' disabled>
                                                <input class='col-3 bg_g2' type="text" value='75%' disabled>
                                            </div>                                                  
                                        </div>
                                        <div class='form_group'>
                                            <label for="">AOP                                                
                                            </label>
                                            <div class='mult_slt aopcol'>
                                                <input class='col-3 bg_g2' type="text" value='273' disabled>
                                                <input class='col-3 bg_g2' type="text" value='10%' disabled>
                                                <input class='col-3 bg_g2' type="text" value='5.824' disabled>
                                                <input class='col-3 bg_g2' type="text" value='25%' disabled>
                                            </div>                                                  
                                        </div>
                                        <div class='form_group aop_c itn_aop'>
                                            <label class='bdr_none' for="">Costos Financieros</label>
                                            <div class='mult_slt'>
                                                <input class='col-3' type="text" value='0' disabled>
                                                <input class='col-3' type="text" value='0%' disabled>
                                                <input class='col-3' type="text" value='0' disabled>
                                                <input class='col-3' type="text" value='0%' disabled>
                                            </div>                                                  
                                        </div>
                                        <div class='form_group uo'>
                                            <label class='position-relative' for="">UO
                                                <i class="btn fa fa-plus-circle" aria-hidden="true" onclick='show_aop()'></i>
                                            </label>
                                            <div class='mult_slt'>
                                                <input class='col-3 bg_g2' type="text" value='273' disabled>
                                                <input class='col-3 bg_g2' type="text" value='10%' disabled>
                                                <input class='col-3 bg_g2' type="text" value='5.824' disabled>
                                                <input class='col-3 bg_g2' type="text" value='25%' disabled>
                                            </div>                                                  
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class='col-md-12 ctn_grphx mt-5 mb-2'>
                            <div class='chartdivx position-relative'>
                                <div class='inf_data'>
                                    <label for="">Clasificación</label>
                                    <input type="text" disabled value='Yellow'>
                                </div>
                                <div class='title_data'><p>MCD y AOP</p></div>
                                <div class='chartdivx' id="chartdivx2" style=' '></div>
                            </div>
                            
                        </div>
                        <!-- <img src="/assets/images/aop.png" alt="" style='    width: 80%;    margin-bottom: 2vh;'>
                        <img src="/assets/images/aop1.png" alt="" style='width: 95%;'> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.left-sidebar .logout-btn').remove();
    </script>
@endsection     