@extends('layout') 
@section('content')
    <div class='conntent_background prop'>
        <div class="content_background_gradient">
            <div class="container-fluid">
                <div class="row section1 int_c">
                    <div class='content'>
                        <div class='user'>
                            <img src="/assets/images/icon/user.png" alt="">
                            <p>Contratos</p>
                        </div>
                        <div class='item'>
                            <select>
                                <option value="" selected disabled>Cliente</option>
                                <option value="" >Cliente 1</option>
                                <option value="" >Cliente 2</option>
                            </select>
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
                    <div class='content'>
                        <div class="table-responsive">
                            <div class=''>
                                <table id="table" class="">
                                    <thead>
                                        <tr>
                                            <th>
                                                <p>
                                                Cliente
                                                </p>
                                            </th>
                                            <th>
                                                <p>
                                                País
                                                </p>
                                            </th>
                                            <th>
                                                <p>
                                                Proyecto
                                                </p>
                                            </th>
                                            <th>
                                                <p>
                                                Descripción
                                                </p>
                                            </th>
                                            <th>
                                                <p>
                                                Valor
                                                </p>
                                            </th>
                                            <th>
                                                
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td >
                                                Cliente 1                                                                  
                                            </td>
                                            <td>
                                                País 1
                                            </td>
                                            <td >
                                                <a href="#">
                                                    Proyecto 1
                                                </a>
                                            </td>
                                            <td >
                                                Descripción                                                               
                                            </td>
                                            <td>
                                                $5000
                                            </td>
                                            <td>
                                                <a href="{{ route('contratos.ver') }}">
                                                    <button type="button" name="button">Ver</button>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                Cliente 2                                                                
                                            </td>
                                            <td>
                                                País 2
                                            </td>
                                            <td >
                                                <a href="#">
                                                    Proyecto 2
                                                </a>
                                            </td>
                                            <td >
                                                Descripción                                                               
                                            </td>
                                            <td>
                                                $5000
                                            </td>
                                            <td>
                                                <a href="{{ route('contratos.ver') }}">
                                                    <button type="button" name="button">Ver</button>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                Cliente 3                                                                 
                                            </td>
                                            <td>
                                                País 3
                                            </td>
                                            <td >
                                                <a href="#">
                                                    Proyecto 3
                                                </a>
                                            </td>
                                            <td >
                                                Descripción                                                               
                                            </td>
                                            <td>
                                                $5000
                                            </td>
                                            <td>
                                                <a href="{{ route('contratos.ver') }}">
                                                    <button type="button" name="button">Ver</button>
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
    </div>
@endsection     