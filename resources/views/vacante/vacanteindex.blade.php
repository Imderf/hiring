@extends('layout')
{{-- @section('content') --}}
<div align="center">
    <div class="applications-container">
        <div class="applications-container">
            <div class="applications-main-content">
                <h1>WORK WITH US</h1>
                <div class="applications-job-container">
                    <div class="application-job-container">
                        <h3>DESCRIPTION <span onclick="toggleDescription()" type="button" id="description-arrow" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" class="fa fa-chevron-right collapsed" style="transform: rotateZ(0deg);"></span></h3>
                        <div class="collapse" id="collapseExample" aria-expanded="false" style="height: 0px;">
                            <h4>Descripción del cargo</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                <br><br>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                            </p>
                            <div class="application-functions-container">
                                <div class="application-functions-title">
                                    <img class="application-desktop-icon" src="https://stag.milenium.group/wp-content/themes/twentytwentyone/assets/images/desktop-icon.png">
                                    <h4>Funciones</h4>
                                </div>
                                <ol class="row">
                                    <li class="col-12 col-sm-6 col-md-4 applications-item-container">
                                        <div class="application-list-items">
                                            <span>
                                                .
                                            </span>
                                            Integer viverra dolor non.
                                        </div>
                                    </li>
                                    <li class="col-12 col-sm-6 col-md-4 applications-item-container">
                                        <div class="application-list-items">
                                            <span>
                                                .
                                            </span>
                                            Integer viverra dolor non.
                                        </div>
                                    </li>
                                    <li class="col-12 col-sm-6 col-md-4 applications-item-container">
                                        <div class="application-list-items">
                                            <span>
                                                .
                                            </span>
                                            Integer viverra dolor non.
                                        </div>
                                    </li>
                                    <li class="col-12 col-sm-6 col-md-4 applications-item-container">
                                        <div class="application-list-items">
                                            <span>
                                                .
                                            </span>
                                            Integer viverra dolor non.
                                        </div>
                                    </li>
                                    <li class="col-12 col-sm-6 col-md-4 applications-item-container">
                                        <div class="application-list-items">
                                            <span>
                                                .
                                            </span>
                                            Integer viverra dolor non.
                                        </div>
                                    </li>
                                    <li class="col-12 col-sm-6 col-md-4 applications-item-container">
                                        <div class="application-list-items">
                                            <span>
                                                .
                                            </span>
                                            Integer viverra dolor non.
                                        </div>
                                    </li>
                                </ol>
                            </div>
                            <div class="application-functions-container">
                                <div class="application-functions-title">
                                    <img class="application-file-icon" src="https://stag.milenium.group/wp-content/themes/twentytwentyone/assets/images/file-icon.png">
                                    <h4>Requisitos</h4>
                                </div>
                                <ol class="row">
                                    <li class="col-12 col-sm-6 col-md-4 applications-item-container">
                                        <div class="application-list-items">
                                            <span>
                                                .
                                            </span>
                                            Integer viverra dolor non.
                                        </div>
                                    </li>
                                    <li class="col-12 col-sm-6 col-md-4 applications-item-container">
                                        <div class="application-list-items">
                                            <span>
                                                .
                                            </span>
                                            Integer viverra dolor non.
                                        </div>
                                    </li>
                                    <li class="col-12 col-sm-6 col-md-4 applications-item-container">
                                        <div class="application-list-items">
                                            <span>
                                                .
                                            </span>
                                            Integer viverra dolor non.
                                        </div>
                                    </li>
                                    <li class="col-12 col-sm-6 col-md-4 applications-item-container">
                                        <div class="application-list-items">
                                            <span>
                                                .
                                            </span>
                                            Integer viverra dolor non.
                                        </div>
                                    </li>
                                    <li class="col-12 col-sm-6 col-md-4 applications-item-container">
                                        <div class="application-list-items">
                                            <span>
                                                .
                                            </span>
                                            Integer viverra dolor non.
                                        </div>
                                    </li>
                                    <li class="col-12 col-sm-6 col-md-4 applications-item-container">
                                        <div class="application-list-items">
                                            <span>
                                                .
                                            </span>
                                            Integer viverra dolor non.
                                        </div>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="applications-form-container">
                    <h2>SUBMIT YOUR APPLICATION</h2>
                    <form>
                        <div class="applications-form-section-1">
                            <div class="row">
                                <div class="col-md-4 left">
                                    <label>Full name</label>
                                    <input class="form-control" type="text" placeholder="Full name*">
                                </div>
                                <div class="col-md-4 right">
                                    <label>Phone</label>
                                    <input class="form-control" type="text" placeholder="phone*">
                                </div>
                                <div class="col-md-4 left">
                                    <label>Email</label>
                                    <input class="form-control" type="email" placeholder="email*">
                                </div>
                                <div class="col-md-4 right">
                                    <label>Date of Birth</label>
                                    <input class="form-control" type="text" placeholder="AAA/MM/DD*">
                                </div>
                                <div class="col-md-4 left">
                                    <label>Country</label>
                                    <select class="form-control">
                                        <option>Colombia</option>
                                        <option>Argentina</option>
                                        <option>Brasil</option>
                                    </select>
                                </div>
                                <div class="col-md-4 right">
                                    <label>City</label>
                                    <input class="form-control" type="text" placeholder="City*">
                                </div>
                                <label>Documento de identificación</label>
                                <input class="form-control col-6" type="number" placeholder="Documento*">
                                <label>Address</label>
                                <input class="form-control col-12" type="text" placeholder="Address*">
                            </div>
                        </div>
                        <hr>

                        <div class="applications-form-section-2">
                            <div class="applications-form-section-2-top">
                                <div class="applications-form-row-1" id="studies-container">
                                    <div class="hiring-experiencia">
                                        <label>AÑOS DE EXPERIENCIA</label>
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>+ 10</option>
                                        </select>
                                    </div>
                                    <div class="hiring-pregrado">
                                        <label>Estudio de Pregrado</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="study-container">
                                        <div>
                                            <label>STUDIES / DEGREE</label>
                                            <select class="form-control">
                                                <option>estudio 1</option>
                                                <option>estudio 2</option>
                                                <option>estudio 3</option>
                                            </select>
                                        </div>
                                        <div class="applications-other">
                                            <label>other</label>
                                            <input class="form-control" type="text" placeholder="OTHER (escribir)">
                                        </div>
                                        <div>
                                            <span onclick="deleteStudy(this)" class="fa fa-trash delete-study-button"></span>
                                        </div>
                                    </div>
                                    <button type="button" onclick="addStudy()" id="add-study-button"><span class="fa fa-plus"></span>Agregar estudio</button>
                                </div>
                                <div class="applications-form-row-2">
                                    <div class="">
                                        <label>LANGUAGE</label>
                                        <select class="form-control">
                                            <option>Español</option>
                                            <option>Portugués</option>
                                            <option>Inglés</option>
                                        </select>
                                    </div>
                                    <div class=" other-form">
                                        <label>other</label>
                                        <input class="form-control" type="text" placeholder="OTHER (escribir)">
                                    </div>
                                </div>
                                <div class="applications-form-row-3">
                                    <div class="">
                                        <label>Attach Resume/CV</label>
                                        <div class="form-control attach-cv">
                                            <input type="file" id="cv" name="cv">
                                            <button>Subir <span class="fa fa-upload"></span></button>
                                        </div>
                                    </div>
                                    <div class="">
                                        <label>Url del perfil en lN</label>
                                        <input class="form-control" type="text" placeholder="Url del perfil en lN">
                                    </div>
                                </div>
                            </div>
                            <label>ADDITIONAL INFORMATION</label>
                            <textarea type="text" placeholder="Add a cover letter or anything else you want to share*" rows="7"></textarea>
                            <div class="applications-contact-radio">
                                <p>MileniumGroup can contact me about future job opportunities for up to 3 years
                                </p>
                                <div class="row">
                                    <div class="col-6 applications-radio-element">
                                        <input type="radio" id="age1" name="age" value="30">
                                        <label for="age1">YES</label>
                                    </div>
                                    <div class="col-6 applications-radio-element">
                                        <input type="radio" id="age1" name="age" value="30">
                                        <label for="age1">NO</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="hiring-send-form-button" type="submit">Enviar</button>
                    </form>
                </div>
            </div>
            <footer>
                <h3>¡Sé parte de nuestro equipo!</h3>
                <div class="row">
                    <a class="col-sm-6"><span class="fa fa-chevron-left"></span>Our people Culture</a>
                    <button class="col-sm-6">Ver vacantes disponibles <span class="fa fa-chevron-right"></span></button>
                </div>
            </footer>
        </div>
    </div>
</div>
{{-- @endsection    --}}