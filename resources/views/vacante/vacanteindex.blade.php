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
                    <a class="col-sm-8"><span class="fa fa-chevron-left"></span>Our people Culture</a>
                    <button class="col-sm-8">Ver vacantes disponibles <span class="fa fa-chevron-right"></span></button>
                </div>
            </footer>
        </div>
    </div>
</div>
{{-- @endsection    --}}


<style>
.applications-main-content h1 {
    color: #0093c5;
    font-size: 4rem;
    font-weight: 700;
    text-align: left;
}

.applications-page {
  background-color: #F6F6F6;
}

.applications-container {
  background-color: #fff;
  margin: auto;
  max-width: 80%;
  position: relative;
  top: -70px;
}

.applications-main-content {
  padding: 3rem;
}

.applications-main-content h1 {
  color: #0093c5;
  font-size: 4rem;
  font-weight: 700;
  text-align: left;
}

.applications-job-container {
  border-radius: 14px;
  box-shadow: 0 2px 3px 0 rgba(151, 151, 151, 0.472);
  margin-top: 5rem;
  padding: 3rem;
}

.applications-job-container #description-arrow {
  cursor: pointer;
  transition: all 200ms ease-in-out;
}

.hiring-send-form-button {
  background-color: #0093c5 !important;
  border: 0 !important;
  color: white !important;
  margin-top: 2rem;
  padding: 0.5rem 1rem;
  font-size: 2rem;
  font-weight: 600;
  transition: 200ms ease opacity;
}

.hiring-send-form-button:hover {
  opacity: 0.8;
}

.applications-job-container #description-arrow:hover {
  opacity: 0.8;
}

.applications-job-container form {
  display: grid;
  gap: 20px;
  grid-template-columns: 38% 38%;
  margin-bottom: 3rem;
}

.applications-main-content input, .applications-main-content select {
  border: 1px solid rgba(189, 189, 189, 0.37);
  border-radius: 18px;
  width: 100%;
}

.applications-main-content .dropdown-toggle {
  align-items: center;
  border: none;
  border-radius: 18px;
  display: flex;
  justify-content: space-between;
  width: 100%;
}

.applications-main-content .dropdown-toggle:hover {
  background-color: rgba(160, 160, 160, 0.198);
  color: black;
}

.applications-main-content .dropdown-toggle span {
  color: #0093c5;
}

.applications-job-container h4 {
  margin: 2rem 0;
}

.applications-job-container h3, .applications-main-content h2 {
  color: #0093c5;
  font-weight: 600;
  margin-top: 0;
}

.application-functions-container {
  margin-bottom: 2rem;
  margin-top: 2rem;
}

.application-functions-container, .application-requirements-container {
  align-items: center;
  background-color: #0093c5;
  border-radius: 15px;
  color: white;
  display: flex;
  min-height: 140px;
  padding: 2rem;
}

.application-functions-container ol, .application-requirements-container ol {
  margin: auto;
  padding: 0;
}

.applications-item-container {
  display: flex;
  gap: 4px;
  margin-bottom: 1.5rem;
}

.application-list-items {
  align-items: center;
  display: flex;
  gap: 10px;
  line-height: 1.5rem;
  list-style: none;
}

.applications-item-container span {
  bottom: 6px;
  display: block;
  font-weight: 900;
  position: relative;
}

.application-functions-title {
  border-right: 1px solid rgba(231, 231, 231, 0.438);
  display: flex;
  max-width: 180px;
  padding: 2rem 3rem 2rem 0;
  width: 100%;
}

.application-functions-title h4 {
  font-size: 1.6rem;
  font-weight: 700;
}

.application-file-icon, .application-desktop-icon {
  height: 54px;
  margin-right: 12px;
  width: 50px;
}

.application-file-icon {
  height: 64px;
  width: 50px;
}

.applications-form-container {
  border-radius: 14px;
  box-shadow: 0 2px 3px 0 rgba(151, 151, 151, 0.472);
  margin-top: 5rem;
  padding: 3rem;
}

.applications-form-container hr {
  border-top: 1px solid #0093c5;
}

.applications-form-section-1 {
  max-width: 800px;
}

.applications-form-section-2 {
  padding: 1rem 0;
}

.applications-form-section-2-top {
  max-width: 800px;
}

.applications-form-row-1 .study-container {
  align-items: center;
  display: grid;
  grid-template-columns: 47% 47% 25% 2%;
  gap: 30px;
}

.hiring-experiencia {
  max-width: 200px;
}

#add-study-button {
  border: 0;
  margin-bottom: 20px;
}

#add-study-button:hover {
  border: 0;
  opacity: 0.8;
}

.delete-study-button {
  color: #FD224D;
  cursor: pointer;
  font-size: 2rem;
  padding: 5px;
  position: relative;
  top: 5px;
}

.delete-study-button:hover {
  opacity: 0.8;
}

#add-study-button span {
  margin-right: 10px;
}

.applications-other label {
  color: transparent !important;
}

.applications-form-row-2 {
  display: grid;
  grid-template-columns: 48% 38%;
  gap: 30px;
}

.applications-form-row-3 {
  display: grid;
  grid-template-columns: 48% 48%;
  gap: 30px;
}

.applications-main-content h2 {
  color: #0093c5;
  font-size: 2rem;
  font-weight: 600;
  margin-bottom: 3rem;
  margin-top: 0;
}

.applications-form-container label {
  color: gray;
  font-size: 1.5rem;
  font-weight: 400;
  margin-left: 17px;
}

.applications-form-container .form-control {
  height: 40px;
  margin: 0;
  margin-bottom: 1.5rem;
  padding: 1.3rem 1.7rem;
  width: 100%;
}

.applications-form-container select.form-control {
  height: 40px;
  margin: 0;
  margin-bottom: 1.5rem;
  padding: 0 1.7rem;
  position: relative;
  width: 100%;
}

.applying-for-select {
  height: 100%;
}

.applications-form-container .dropdown-toggle {
  border: 1px solid rgba(209, 209, 209, 0.307);
  height: 40px;
  margin: 0;
  padding: 1.3rem 1.7rem;
  position: relative;
  width: 100%;
}

.applications-form-container input,
.dropdown {
  max-width: 100%;
}

.applications-form-container .col-12 {
  margin-right: 0;
  width: 100%;
}

.applications-form-section-1 .left {
  /* padding: 0 rem; */
  padding-left: 0;
}

.applications-form-section-1 .right {
  padding-right: 0;
}

.applications-form-section-1 .row, .applications-form-section-2 .row {
  margin: 0;
}

.form-top-row {
  display: grid;
  gap: 30px;
  grid-template-columns: 383px 383px auto;
}

.other-studies {
  left: 415px;
  max-width: 180px;
  position: absolute;
  top: 0;
  width: 100%;
}

.other-studies label {
  color: transparent !important;
}

.applications-form-section-2 textarea {
  border: 1px solid rgba(189, 189, 189, 0.37);
  border-radius: 15px;
  resize: none;
  width: 100%;
}

.attach-cv {
  border: 1px solid rgba(189, 189, 189, 0.37);
  border-radius: 18px;
  position: relative;
  width: 100%;
}

.attach-cv input {
  height: inherit;
  opacity: 0;
  position: relative;
  top: -14px;
  border: 0;
}

.attach-cv button {
  align-items: center;
  background: rgb(197, 197, 197) !important;
  color: white !important;
  border-radius: 25px;
  display: flex;
  height: 15px;
  justify-content: center;
  position: absolute;
  pointer-events: none;
  right: 16px;
  top: 0;
  width: 90px;
}

.attach-cv button span {
  margin-left: 3px;
}

.applications-contact-radio {
  margin-top: 3rem;
}

.applications-contact-radio input {
  height: 20px;
  width: 20px;
}

.applications-contact-radio input:checked {
  border: 1px solid rgba(189, 189, 189, 0.37);
}

.applications-radio-element {
  display: inline;
  margin-right: 30px;
}

.applications-radio-element label {
  font-size: 1.3rem !important;
  margin: 0;
  margin-top: 5px;
  padding-left: 5px !important;
}

.applications-container footer {
  background-color: #0093c5;
  color: white;
  padding: 3rem 3rem 9rem;
}

.applications-container footer h3 {
  width: 100%;
  font-size: 4rem;
  font-weight: 700;
  margin: 0;
  margin-bottom: 4rem;
  text-align: left;
}

.applications-container footer div {
  align-items: center;
  display: flex;
  max-width: 500px;
  width: 100%;
}

.applications-container footer a {
  color: white;
  opacity: 0.8;

  transition: 200 ms ease all;
}

.applications-container footer a:hover {
  text-decoration: none;
  opacity: 0.6;
}

.applications-container footer a span {
  color: white;
  margin-right: 5px;
  opacity: 0.8;
}


.applications-container footer button {
  align-items: center;
  color: #0093c5 !important;
  display: flex;
  font-weight: 600;
  gap: 1rem;
  justify-content: space-between;
  max-width: 260px;
  padding: 1rem 2rem;
  width: 100%;

  transition: 200ms ease all;
}

.applications-container footer button:hover {
  background-color: white;
  color: #0093c5 !important;
  opacity: 0.8;
}

.applications-container footer button span {
  font-size: 3rem;
}

.other-form {
  max-width: 320px;
}

.other-form label {
  color: transparent !important;
}

@media (max-width: 1460px) {

  .applications-form-row-1 {
    grid-template-columns: 50% auto;
    row-gap: 0;
  }

  .applications-form-row-2 {
    grid-template-columns: 50% auto;
  }

  .applications-form-row-3 {
    grid-template-columns: 50% auto;
  }

  .applications-other {
    left: 107.5%;
    max-width: 320px;
    position: relative;
  }


}

@media (max-width: 991px) {

  .info_contact .row {
    display: block;
  }

  .contact-banner header {
    height: 100% !important;
    padding: 5rem 0;
  }

  .contact-banner h1 {
    font-size: 30px !important;
    text-align: left !important;
  }

  .contact-banner p {
    text-align: left !important;
  }

  .contact-banner .txt_contact {
    font-size: 30px !important;
    text-align: center !important;
    padding: 0 3rem;
  }


  .applications-form-section-1 .left {
    padding-right: 0;
  }

  .applications-form-row-1, .applications-form-row-2, .applications-form-row-3 {
    grid-template-columns: 100%;
    row-gap: 0;
  }

  .applications-other {
    left: 0;
  }

  .applications-form-section-1 .right {
    padding: 0;
  }

  .applications-other label {
    display: none;
  }

  .other-form label {
    display: none;
  }

  .applications-main-content {
    padding: 1.5rem;
  }
}


@media screen and (max-height: 450px) {
  .sidenav {
    padding-top: 15px;
  }

  .sidenav a {
    font-size: 18px;
  }
}

.nav_mobile {
  background: #0093c5;
  padding: 1.5vh 2vh;
}

.logo_mobile img {
  max-width: 84%;
}

.nav_icon {
  text-align: right;
}

.nav_icon span {
  color: #fff;
  line-height: 7vh;
}

@media (max-width: 800px) {

  .services.services_about .container .text_service p.description_service {
    margin: 0;
  }

  .register-form {
  border: 0;
  margin-bottom: 15px;
}

.register-form input, .register-form input, .register-form textarea {
  font-weight: 600;
  margin-bottom: 2.5rem !important;
}

.register-form textarea {
  resize: none;
}

.register-dropdown button {
  border: 0;
  border-radius: 0;
  width: 100%;
  text-align: left;
}

.register-dropdown button:before {
  background-color: white;
  color: black !important;
  width: 100%;

  transition: none;
}

.register-dropdown button:hover {
  color: black !important;
}

.register-dropdown button:focus {
  background-color: white;
  color: black !important;
}

.register-send-button {
  background-color: #FD224D !important;
  border-radius: 10px;
  border: 0 !important;
  color: white !important;
  float: right;
  font-size: 2rem;
  font-weight: 600;
  height: auto !important;
  margin-top: 1rem;
  padding: 0.2rem 2rem;
  text-align: center;

  transition: 200ms ease all;
}

.register-send-button:hover {
  border: 0 !important;
  opacity: 0.8;
}

body, h1, h2, h3, h4, a, p, span, li, strong, span, li, ol, ul, table, div, section, button{
  font-family: 'Montserrat', sans-serif;
}
.menu-item-43 {
  border-left: solid #ffffff6e 1px;
}
.menu-item-43 a,.menu-item-45 a,.menu-item-46 a{
  color: transparent!important;
}
#mobmenuright li a{
  position: relative;
}
span.dropdown-icon.close {
    color: #333233!important;
    text-shadow: none!important;
}
span.dropdown-icon.close svg.svg-icon {
    color: #fff!important;
}
.menu-item-43 a::before{
  content: url('../images/spain.png');
  display: block;
  width: 80%;
  height: 80%;
  position: absolute;
  transform: scale(0.4);
  top: -2px;
  left: -2px;
}
.menu-item-45 a::before{
  content: url('../images/united-states-of-america.png');
  display: block;
  width: 80%;
  height: 80%;
  position: absolute;
  transform: scale(0.4);
  top: -2px;
  left: -2px;
}
.menu-item-46 a::before{
  content: url('../images/brasil.png');
  display: block;
  width: 80%;
  height: 80%;
  position: absolute;
  transform: scale(0.4);
  top: -2px;
  left: -2px;
}
.sub-menu-toggle{
  display: none!important;
}
.primary-navigation a:hover{
  text-decoration: none !important;
  text-decoration-style: unset !important;
}
.banner.page-section{
  position: relative;
  z-index: 5;
}
.modal_credenciales {
    display: block;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
    height: 100%;
    background: #0000007d;
}
.body_modal {
    position: absolute;
    width: 55%;
    left: 0;
    right: 0;
    margin: 0 auto;
    /* background: #0093c5;
    border-radius: 21px; */
    top: 11vw;
    text-align: center;
}

.body_modal span {
    background: #fff;
    position: absolute;
    right: 0;
    font-weight: bold;
    padding: 5px 10px;
    border-radius: 21px;
    font-size: 17px;
    cursor: pointer;
}
.body_modal iframe {
    width: 100%;
    padding: 0vw 2vw;
    height: 34vw;
    background: #0093c5;
    border-radius: 15px;
}
.header {
    -webkit-box-align: center;
    align-items: center;
    background-image: url('../images/banner-startups.webp');
    background-size: cover;
    background-position: center;
    display: -webkit-box;
    display: flex;
    height: 120vh;
    position: relative;
    overflow: hidden;
    -webkit-box-pack: center;
    justify-content: start;
    width: 100vw;
    position: relative;
    /* background-size: 100% 100%; */
    background-repeat: no-repeat;
    /* background-attachment: fixed; */
    max-width: 100%!important;
}

.header-container {
  color: #055A67;
  margin-left: 60%;
  margin-right: 0;
  margin-top: 5rem;
  max-width: 412px;
}


.header-container h1 {
  font-size: 4rem;
  font-weight: 700;
  text-align: left!important;
  width: 100%;
}

.header-container h1 span {
  display: block;
  font-size: 3rem;
}

.header-container p {
  font-size: 1.6rem;
  font-weight: 500;
  line-height: 1.9rem;
}

.header-container p span {
  font-weight: 700;
}

.header-unicornio {
  color: white;
  font-size: 7rem !important;
  font-weight: 700 !important;
}

.header-container button {
  background-color: #E18BFF !important;
  border: none;
  border-radius: 20px;
  color: white !important;
  font-weight: 600;
  margin-top: 2rem;
  padding: 1rem 1.5rem;

  transition: 300ms ease opacity;
}

.header-container button:hover {
  border: none;
  opacity: 0.8;
}

.services.services_about .code:nth-child(1) {
    margin-top: 0;
}
.services.services_about .code:nth-child(4) {
    margin-bottom: 5rem !important;
}
.services.services_about .container .text_service {
    padding: 28vh 3vh;
}

.services_mobile {
  display: none;
}

.banner-12 {
    background-image: url(../images/products-xpace-banner.png)!important;
}
span.line_11 {
    text-align: center;
    font-size: 4vh;
    font-weight: bold;
    margin-top: -8vh;
}

span.line_22 {
  display: block;
  margin-top: 4rem;
    text-align: center;
}
.video_xpace {
    text-align: center;
    margin-bottom: 8vh;
}
.xpace_video iframe {
    width: 100%;
}

.title_xpace p {
  font-size: 45px;
  font-weight: bold;
  color: #333333;
  line-height: 48px;
  margin-bottom: 6vh;
}
.xpace_text{
  background: #EFEFEF;
  padding: 5vh 0;
}
.xpace_text .container{
  display: flex;
  justify-content: center;
}
.xpace_text .container ul{
  width: 80%;
}
.xpace_text .container ul li{
  list-style: none;
  display: flex;
  align-items: center;
  margin-bottom: 4vh;
}
.xpace_text .container ul li:last-child{
  margin-bottom: 0vh;
}
.xpace_text .container ul li img{
  padding-right: 1vw;
}
.xpace_text .container ul li p{
  margin: 0;
  font-size: 25px;
  line-height: 29px;
}
.xpace_link{
  display: flex;
  justify-content: center;
}
.xpace_link a{
  background: #28ECCF;
  color: white;
  font-size: 25px;
  padding: 15px 30px;
  border-radius: 58px;
  margin: 4vh 0 10vh;
}

.video_xpace {
  margin: 4rem auto;
  width: 85%;
}

.title_xpace p span {
  display: block;
  font-weight: 500;
  color: #000;
}

.xpace_container {
  align-items: center;
  display: flex;
  gap: 30px;
}

.xpace-text-container {
  text-align: left;
}

.xpace-text-container p {
  color: #333333;
  font-size: 20px;
  font-weight: 500;
}

.xpace-text-container a {
  background-color: #9BDC2A;
  border-radius: 20px;
  color: white;
  font-weight: 500;
  margin-top: 4rem;
  padding: 0.5rem 1rem;

  transition: 200ms ease opacity;
}

.xpace-text-container a:hover {
  opacity: 0.8;
  text-decoration: none;
}

.xpace-text-container span {
  margin-right: 10px;
}

.banner_about .header .heading span.line_1 {
    font-size: 30px;
    font-weight: 500;
    text-align: center;
}
.services.services_about {
    z-index: 999;
    position: relative;
}
.banner_about .header {
    background-image: url(../images/banner-about.webp);
}
.banner.banner_about .heading.rellax {
    top: 48vh;
}

.banner_about .about-banner-span {
  display: block;
  font-size: 60px;
  font-weight: 700;
  line-height: 80px;
}

.services_about .code {
  padding-left: 15% !important;
  padding-right: 15% !important;
}

.home-services-container {
  padding-top: 4rem;
}

@media (max-width: 800px) {
  .home-services-container {
    overflow-x: hidden;
    padding: 4rem 1rem;
  }

  .pc3-container .pc3 {
    flex-direction: column-reverse;
}

.pc3 p {
  /* font-size: 15px !important; */
  text-align: center !important;
}

  .logos_smart {
    /* display: flex; */
  }


  #bannerx .heading_2 {
    bottom: 5vh;
    max-width: 70%;
  }

  .services_about .code {
    padding-left: 0 !important;
    padding-right: 0 !important;
  }

  .services_about .code .image_service {
    align-items: center;
    border-radius: 15px;
    display: flex;
    height: 170px;
    justify-content: center;
    margin: 0 auto 2rem;
    max-width: 340px;
    overflow: hidden;
  }

  .services_about .code .col-md-5 {
    width: 100%;
  }

  .services_about .code .col-md-7 {
    padding: 0;
  }



  .about-header .txt_banner {
    margin-top: auto;
    z-index: 1;
  }

  .banner_about .header .heading span.line_1 {
    text-align: left;
  }

  .banner_about .about-banner-span {
    font-size: 34px;
    line-height: 35px;
    margin-bottom: 1rem;
  }
  
}

.read_more {
    margin-top: 4vh;
    text-align: end;
}
.w-4{
  width: 40%;
}
.w-6{
  padding-left: 5vw;
  width: 60%;
}
.w-7{
  width: 70%;
  padding-left: 20vw;
  text-align: start;
}

.banner.page-section .w-3 .read_more a {
  background-color: #333333;
  border: none !important;
}

.read_more a {
    color: #fff;
    border: solid 1px #fff;
    padding: 9px 23px;
    border-radius: 29px;
    font-weight: 400;
    text-decoration: none;
    font-size: 18px;
}
.txt_botton {
  position: absolute;
  bottom: 0;
  background: #00000069;
  width: 100%;
  text-align: center;
  padding: 6vh 0vh;
  margin-top: -28.5vh;
  display: flex;
}
.txt_botton p {
    margin: 0;
}
.txt_botton p:nth-child(1) {
    color: #fff;
    font-size: 3.5vh;
    font-weight: 200;
    line-height: 2vw;
    margin-bottom: 0;
    width: 88%;
}
li.espa img, li.english img, li.espa img, li.portugues img {
    max-width: 3.9vh;
    padding: 3px;
}
.borderpais{
  border: solid 1px #ffffff;
  border-radius: 27px;
}
li.espa, li.english, li.portugues {
  padding: 0vh 0.5vh!important;
}

li.espa {
  margin-left: 4vh;
  position: relative;
}

li.espa:before {content: " ";border-left: solid #ffffff6e 1px;position: absolute;left: -3vh;top: 1.5vh;height: 38px;}
.txt_botton p:nth-child(2) {
    color: #717171;
    font-size: 3.5vh;
    line-height: 2vw;
    padding-bottom: 24px;
    font-weight: bold;
/*    font-size: 3vh;*/
    color: white;
}
.read_more a i.fa {
    font-size: 12px;
    background: #fff;
    padding: 9px 7px 6px 10px;
    border-radius: 19px;
    color: #333333;
    margin: 0;
    margin-right: 10px;
}
.heading {
  color: white;
  line-height: 1;
  margin: 0 auto;
  right: 0;
  left: 0;
  bottom: 11vh;
  text-align: left;
  padding: 0vh 10%;
  display: flex;
  flex-wrap: wrap;
  margin-bottom: 0;
  width: 100%;
  /* position: relative; */
}
.line_x0{
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  width: 80%;
  left: 50%;
}
.heading span.line_1 {
    display: block;
    font-size: 3vh;
    text-align: end;
    font-weight: 600;
}
.heading span.line_2 {
    display: block;
    font-size: 12vh;
    text-align: end;
    line-height: 13vh;
    color: #FED078;
}
.heading span.line_3 {
  font-size: 3.2vh;
  text-align: end;
  width: 100%;
  display: block;
  line-height: 3vh;
}
.content {
  position: relative;
}
.flexiblexs{
  display: none;
}
.title_being {
    text-align: center;
    padding-top: 10vh;
    padding: 3vh 0;
}

.title_being p {
    margin: 0;
    color: #454545;
}

.title_being p:nth-child(1) {
    font-size: 9vh;
    font-weight: 400;
}

.title_being p:nth-child(2) {
    font-size: 4vh;
    line-height: 4vh;
}
.zoom {
    overflow: hidden;
    padding-bottom: 28vh;
    position: relative;
    width: 100%;
    margin: 0 auto;
    text-align: center;
}
.zoom img{
	position: relative;
	margin-top: 20vh;
	max-width: 200%;
	width: 7%;
	transform: translateX(-50%);
	top: 0;
}
.nav {
    position: absolute;
    top: 0;
    z-index: 9;
    width: 100%;
    background: #0093c5;
    padding: 1vh 0vh;
}
.nav li {
    display: inline-block;
    padding: 0vh 2vh;
    font-size: 2.2vh;
}
.nav li a {
    color: #fff;
    margin:  0;
    font-weight: 300;
    text-decoration: none;
}

.nav .row {
    width: 100%;
}
.logo {
  margin-top: 4%;
    padding-left: 2vh;
}
.nav ul {
    margin: 0;
    text-align: right;
    line-height: 7vh;
}
.logo img {
    width: 19vh;
}
.showing {
  height: 100vh;
  display: none;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  flex-direction: column;
  -webkit-box-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  align-items: center;
  opacity: 0;
}
.showing {
  opacity: 1;
  display: -webkit-box;
  display: flex;
}

@-webkit-keyframes nameEnter {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  15% {
    -webkit-transform: scale(0.92);
    transform: scale(0.92);
  }
  25% {
    -webkit-transform: scale(1.2);
    transform: scale(1.2);
  }
  90% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}
@keyframes nameEnter {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  15% {
    -webkit-transform: scale(0.92);
    transform: scale(0.92);
  }
  25% {
    -webkit-transform: scale(1.2);
    transform: scale(1.2);
  }
  90% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}
h1 {
  margin: 0;
  font-size: 2rem;
  font-weight: 300;
  text-align: center;
}
h1 span.title {
  display: block;
}
header#header ul {
  list-style: none;
  padding: 0;
  margin: 0;
  overflow: hidden;
  width: 100%;
}
header#header ul {
  list-style: none;
  padding: 0;
  margin: 0;
  overflow: hidden;
  width: 100%;
}
header#header li {
  font-size: .6rem;
  min-height: 100vh;
  width: 100%;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  flex-direction: column;
  flex-shrink: 0;
  -webkit-box-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  align-items: center;
  display: -webkit-box;
  display: flex;
}
header#header li a {
  opacity: 0;
  color: #fafafa;
  pointer-events: none;
  text-decoration: none;
}
#header{
  background-color: white;
}
li.showing a {
  opacity: 1;
  pointer-events: auto;
}

a.email-showing {
  opacity: 1;
  pointer-events: auto;
}
span.name img {
    width: 65vh;
}
.nav {
    position: absolute;
    top: 0;
    z-index: 9;
    width: 100%;
    background: #0093c5;
    padding: 1vh 0vh;
}
.nav li {
    display: inline-block;
    padding: 0vh 1.5vh;
    font-size: 2vh;
}
.nav li a {
    color: #fff;
    margin:  0;
    font-weight: 300;
    text-decoration: none;
}
.nav .row {
    width: 100%;
}
.logo {
    padding-left: 2vh;
}
.nav ul {
    margin: 0;
    text-align: right;
    line-height: 7vh;
    padding:0;
}
.logo img {
    width: 19vh;
}
.banner_2 img {
    max-width: 100%!important;
    width: 100%;
    position: relative;
}
#banner_2 {
  background: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(../images/home-flexible-banner.webp);
  background-repeat: no-repeat;
  background-attachment: fixed !important;
  background-size: cover !important;
  background-position: center top !important;
  color: #fff;
  padding:0 0 0 0 !important;
  position: relative;
  z-index: -1;
}

.home-banner-text {
    position: fixed;
    top: 38vh;
    margin: auto;
    font-size: 3.5vw;
    width: 100%;
    text-align: center;
}

.home-banner-text-small {
  color: white;
}

.home-banner-text .line-1 {
  font-size: 10vw;
  font-weight: 700;
}

#banner_2xs{
  display: none;
}
.banner_2xs{
  display: none;
}
.banner_2{
  position: fixed;
  width: 100%;
  min-height: 100%;
  text-align: center;
  top: 0%;
  opacity: 0;
  font-size: 30px;
}
.banner_2 p {
  text-align: center;
  color: #454545;
  padding-bottom: 41vh;
}
.banner_2 span {
  display: block;
  margin: 0;
  text-align: center;
  font-size: 11vh;
  line-height: 9vh;
}
.banner_2 span:nth-child(2) {
    font-size: 5vh;
}

/* Palette generated by Material Palette - materialpalette.com/indigo/pink */
/* Base16 Atelier Sulphurpool Dark - Theme */
/* by Bram de Haan (https://atelierbram.github.io/syntax-highlighting/atelier-schemes/sulphurpool) */
/* Original Base16 color scheme by Chris Kempson (https://github.com/chriskempson/base16) */
/* Atelier-Sulphurpool Comment */
.hljs-comment {
  color: #898ea4;
}
/* Atelier-Sulphurpool Red */
.hljs-variable, .hljs-tag, .hljs-regexp, .hljs-name, .ruby .hljs-constant, .xml .hljs-tag .hljs-title, .xml .hljs-pi, .xml .hljs-doctype, .html .hljs-doctype, .css .hljs-id, .css .hljs-class, .css .hljs-pseudo {
  color: deepskyblue;
}
.hljs-attribute {
  color: lightskyblue;
}
/* Atelier-Sulphurpool Orange */
.hljs-number, .hljs-preprocessor, .hljs-built_in, .hljs-literal, .hljs-params, .hljs-constant {
  color: #c76b29;
}
/* Atelier-Sulphurpool Yellow */
.ruby .hljs-class .hljs-title, .css .hljs-rule .hljs-attribute {
  color: #c08b30;
}
/* Atelier-Sulphurpool Green */
.hljs-string, .hljs-value, .hljs-inheritance, .hljs-header, .ruby .hljs-symbol, .xml .hljs-cdata {
  color: darkorange;
}
/* Atelier-Sulphurpool Aqua */
.hljs-title, .css .hljs-hexcolor {
  color: #22a2c9;
}
/* Atelier-Sulphurpool Blue */
.hljs-function, .python .hljs-decorator, .python .hljs-title, .ruby .hljs-function .hljs-title, .ruby .hljs-title .hljs-keyword, .perl .hljs-sub, .javascript .hljs-title, .coffeescript .hljs-title {
  color: #3d8fd1;
}
/* Atelier-Sulphurpool Purple */
.hljs-keyword, .javascript .hljs-function {
  color: #6679cc;
}
.hljs {
  display: block;
  overflow-x: auto;
  background: #202746;
  color: #979db4;
  padding: 0.5em;
  -webkit-text-size-adjust: none;
}
.coffeescript .javascript, .javascript .xml, .tex .hljs-formula, .xml .javascript, .xml .vbscript, .xml .css, .xml .hljs-cdata {
  opacity: 0.5;
}

body {
  font-family: Helvetica,Tahoma;
  margin: 0;
  padding: 0;
  overflow-x: hidden;
}

*, *:before, *:after {
  box-sizing: border-box;
}

a {
  color: #FF4081;
  display: inline-block;
  text-decoration: none;
}

/**
 * Backgrounds
 */
.backgrounds {
  width: 100%;
  height: 100%;
  position: fixed;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  z-index: -1;
}

.backgrounds .background {
  width: 100%;
  height: 100%;
  background-size: cover;
  position: absolute;
  left: 0;
  top: 0;
  background-attachment: fixed;
}

.overlay:after {
  content: '';
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  background: #3F51B5;
  opacity: 0.8;
}

/**
 * Hero
 */
.hero {
  width: 100%;
  height: 100vh;
  position: relative;
  overflow: hidden;
  color: #FFF;
  text-align: center;
}

.hero-center {
  width: 100%;
  position: absolute;
  top: 40%;
  left: 0;
  -webkit-transform: translate(0, -50%);
  -ms-transform: translate(0, -50%);
  transform: translate(0, -50%);
}

.hero__logo {
  font-size: 60px;
  color: rgba(0, 0, 0, 0.5);
}

.hero__text {
  font-weight: normal;
  opacity: 0.8;
}

.hero__scroll {
  position: absolute;
  bottom: 60px;
  width: 200px;
  margin: auto;
  display: block;
  cursor: pointer;
  padding-bottom: 40px;
  left: 0;
  right: 0;
  text-transform: uppercase;
}

.hero__scroll .chevron {
  margin-top: 20px;
  display: block;
  -webkit-animation: pulse 2s infinite;
  animation: pulse 2s infinite;
  color: #FF4081;
}

@-webkit-keyframes pulse {
  0% {
    -webkit-transform: translate(0, 0);
    transform: translate(0, 0);
  }
  50% {
    -webkit-transform: translate(0, 10px);
    transform: translate(0, 10px);
  }
  100% {
    -webkit-transform: translate(0, 0);
    transform: translate(0, 0);
  }
}
@keyframes pulse {
  0% {
    -webkit-transform: translate(0, 0);
    transform: translate(0, 0);
  }
  50% {
    -webkit-transform: translate(0, 10px);
    transform: translate(0, 10px);
  }
  100% {
    -webkit-transform: translate(0, 0);
    transform: translate(0, 0);
  }
}
.octocat {
  position: absolute;
  top: 20px;
  right: 20px;
  width: 80px;
}

.octocat img {
  display: block;
  width: 100%;
}

.chevron::before {
  border-style: solid;
  border-width: 0.25em 0.25em 0 0;
  content: '';
  display: inline-block;
  height: 20px;
  position: relative;
  -webkit-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  transform: rotate(-45deg);
  vertical-align: top;
  width: 20px;
}

.chevron.right:before {
  left: 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}

.chevron.bottom:before {
  top: 0;
  -webkit-transform: rotate(135deg);
  -ms-transform: rotate(135deg);
  transform: rotate(135deg);
}

.chevron.left:before {
  left: 0.25em;
  -webkit-transform: rotate(-135deg);
  -ms-transform: rotate(-135deg);
  transform: rotate(-135deg);
}

/**
 * Sections
 */
.section {
  width: 100%;
  float: left;
}

.section-title {
  text-align: center;
  color: #FFF;
  text-transform: uppercase;
  font-weight: normal;
  padding: 30px 0;
  border-top: 1px solid rgba(255, 255, 255, 0.3);
  border-bottom: 1px solid rgba(255, 255, 255, 0.3);
  width: 100%;
  clear: both;
}

.container {
  width: 89%;
  margin: 0 auto;
  max-width: 90%;
  -webkit-transform: translateZ(1000px);
  transform: translateZ(1000px);
}
.containerx{
  width: 86%;
  margin: 0 auto;
  max-width: 90%;
  -webkit-transform: translateZ(1000px);
  transform: translateZ(1000px);
}
.code {
  width: 40%;
  clear: both;
  height: 200px;
  background: #FFF;
  border-radius: 2px;
  margin: 12vh 0;
  padding: 10px;
}

.code pre, .code code {
  height: 100%;
  margin: 0;
}

.code code {
  padding: 20px 0 0 20px;
}

.code--small code {
  padding-top: 75px;
}

.code--left {
  float: left;
}

.code--right {
  float: right;
}

.code--wider {
  width: 60%;
}

.code--wider code {
  padding-top: 60px;
}

.section--more {
  color: #FFF;
  background: #0E0F34;
  padding: 20px 0 40px 0;
}

.section-group {
  border-bottom: 1px solid rgba(255, 255, 255, 0.2);
  padding: 30px 0;
}

.section-group h3 {
  margin: 0 0 20px 0;
  text-transform: uppercase;
}

.section-group h4 {
  font-weight: normal;
  color: rgba(255, 255, 255, 0.6);
}

.section-group code {
  padding: 20px;
  font-size: 1.2em;
}

.section-group .btn {
  margin-right: 20px;
}

.btn {
  padding: 10px 20px;
  border: 1px solid #FF4081;
  display: inline-block;
  position: relative;
  -webkit-transition: all 0.2s ease;
  transition: all 0.2s ease;
  overflow: hidden;
}

.btn:before {
  content: '';
  position: absolute;
  left: 0;
  right: 0;
  width: 1px;
  top: 0;
  bottom: 0;
  margin: auto;
  background: #FF4081;
  -webkit-transition: -webkit-transform 0.2s ease;
  transition: transform 0.2s ease;
  z-index: 0;
  opacity: 0;
}

.btn span {
  position: relative;
  z-index: 5;
}

.btn:hover {
  color: #FFF;
}

.btn:hover:before {
  -webkit-transform: scaleX(200);
  -ms-transform: scaleX(200);
  transform: scaleX(200);
  opacity: 1;
}
.services .code {
    width: 100%;
    margin-bottom: 0vh!important;
    margin-top: 0vh!important;
    padding: 0vh 8vh;
    height: auto;
    padding-bottom: 9vh;
}
.services.page-section .container .row{
  align-items: center;
  display: flex;
}
.image_service img {
    max-width: 100%;
    padding: 0 5%;
}
.content-img-servxs{
  display: none;
}
.title_service p {
    font-size: 4.7vh;
    color: #454545;
    line-height: 51px;
}
p.description_service {
    font-size: 2vh;
    color: #454545;
    padding:0;
}
p.description_services {
  font-size: 2vh;
  color: #454545;
  display: none;
}

.read-more {
    position: relative;
    padding: 0;
}
.read-more a {
    padding: 0.8vh 2.5vh;
    border-radius: 18px;
    color: white;
    display: inline-block;
    background: #fff;
    z-index: 99;
    position: relative;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
}

.services.services_about .code:nth-child(1) .read-more a {
  background-color: #FD224D;
}

.services.services_about .code:nth-child(2) .read-more a {
  background-color: #FEA528;
}

.services.services_about .code:nth-child(3) .read-more a {
  background-color: #FAE332;
}

.services.services_about .code:nth-child(4) .read-more a {
  background-color: #9BDC2A;
}

.services.services_about .code .row {
  align-items: center;
  display: flex;
}

@media (max-width: 800px) {
  .title_descr p:nth-child(1) {
    font-size: 13px;
  }
  .services.services_about .code .row {
    align-items: center;
    display: initial;
  }

  .services.services_about .code--right .row {
    align-items: center;
    display: flex;
    flex-direction: column;
  }

  .services.services_about .code--right .col-md-7 {
    order: 2;
  }

  .services.services_about .code--right .col-md-5 {
    padding: 0 30px;
  }



  .top-category-title {
    font-size: 18px !important;
    position: relative;
      top: -40px;
  }

  .content-countries {
    display: initial !important;
  }

  .text-contries p {
    margin-top: 0;
  }
}



.read-more a i{
  font-size: 2vh;
  padding-right: 0.5vw;
}
.read-more p {
  border: solid #000 1px;
  padding: 0.8vh 2.5vh;
  border-radius: 18px;
  color: #000;
  display: inline-block;
  /* background: #fff; */
  z-index: 99;
  position: relative;
  text-decoration: none;
  margin: 0;
  cursor: pointer;
}
/*
.read-more:before {
    content: "";
    position: absolute;
    width: 100%;
    border: solid 1px #000;
    top: 50%;
}*/
.read-more hr {
  content: "";
  position: absolute;
  width: 100%;
  border: solid 1px #000;
  top: 50%;
  margin: 0;
  display: none;
}
.code--right .read-more:before {left: 0;}

.code--right .read-more {
    /* text-align: left; */
    width: 100%;
}

.banner_3 {
  -webkit-box-align: center;
  align-items: center;
  background-image: url(../images/about-contact-webp.png);
  background-size: cover;
  background-position: center;
  display: -webkit-box;
  display: flex;
  height: 100%;
  position: relative;
  overflow: hidden;
  -webkit-box-pack: center;
  justify-content: center;
  width: 100vw;
  position: relative;
  background-repeat: no-repeat;
  /* background-attachment: fixed; */
  max-width: 100%!important;
}
.heading_1 span.line_2 {
  display: block;
  font-size: 55px;
  font-weight: 700;
  line-height: 30px;
}
.heading_1 span.line_1 {
  display: block;
  font-size: 54px;
  font-weight: 400;
  margin-bottom: 2rem;
}
.heading_1 {
  color: white;
  line-height: 1;
  margin: 0;
  position: absolute;
  right: 0;
  left: 0;
  top: 15vh;
  text-align: left;
  padding: 0vh 10%;
}
.space-white{
  height: 4vh;
  background-color: white;
}
.banner_4 {
  -webkit-box-align: center;
  align-items: center;
  background-image: url(../images/home-banner-3.webp);
  background-size: cover;
  background-position: left;
  display: -webkit-box;
  display: flex;
  height: 65vh;
  position: relative;
  overflow: hidden;
  -webkit-box-pack: center;
  justify-content: center;
  width: 100vw;
  position: relative;
  background-repeat: no-repeat;
  /* background-attachment: fixed; */
  max-width: 100%!important;
}
.heading_2 span.line_2 {
  display: block;
  font-size: 3vh;
  font-weight: 700;
  line-height: 30px;
}
.heading_2 span.line_1 {
  display: block;
  font-size: 58px;
  margin-top: 30vh;
  margin-bottom: 1vh;
}
.heading_2 {
  color: white;
  line-height: 1;
  position: absolute;
  right: 0;
  left: 0;
  text-align: left;
  /* padding: 0vh 8vh; */
  margin-left: 250px;
  max-width: 51%;
  /* margin-right: 8vh; */
  /* background-color: #00000099; */
  height: 100%;
  bottom: 10vh;
}

.banner_4 a {

    float: left !important;
}

.animate__animated.animate__bounce {
  text-align: start;

  -webkit-animation: fadein 3s; /* Safari, Chrome and Opera > 12.1 */
     -moz-animation: fadein 3s; /* Firefox < 16 */
      -ms-animation: fadein 3s; /* Internet Explorer */
       -o-animation: fadein 3s; /* Opera < 12.1 */
          animation: fadein 3s;
}

@keyframes fadein {
  from { opacity: 0; }
  to   { opacity: 1; }
}

/* Firefox < 16 */
@-moz-keyframes fadein {
  from { opacity: 0; }
  to   { opacity: 1; }
}

/* Safari, Chrome and Opera > 12.1 */
@-webkit-keyframes fadein {
  from { opacity: 0; }
  to   { opacity: 1; }
}

/* Internet Explorer */
@-ms-keyframes fadein {
  from { opacity: 0; }
  to   { opacity: 1; }
}

/* Opera < 12.1 */
@-o-keyframes fadein {
  from { opacity: 0; }
  to   { opacity: 1; }
}
.great{
  height: 40vh;
  position: relative;
  z-index: 2;
}
.title_great{
  text-align: center;
  padding-top: 10vh;
}
.title_great p:nth-child(1) {
  font-size: 9vh;
  font-weight: 600;
}
.title_great p:nth-child(2) {
  font-size: 6vh;
  font-weight: 500;
  line-height: 16px;
}
.form_services{
  height: 20vh;
  width: 100%;
  position: absolute;
  top: 35vh;
  left: 0;
  display: flex;
}
.label_form{
  width: 85%;
  padding-left: 8%;
  display: flex;
}
.send_form{
  /* display: flex; */
  /* align-items: center; */
  padding-top: 27px;
}
.name_form{
  width: 35%;
  height: 100%;
}
.name_form input{
  width: 90%;
  height: 50px;
  border-radius: 25px;
  border: 1px #ccc solid;
}
.name_form img{
  height: 2vh;
  margin-right: 1vw;
}
.name_form label{
  color: white;
  font-weight: 600;
  font-size: 2vh;
  margin-left: 2rem;
}

.button_send{
  height: 6vh;
  width: 6vh;
  background-color: #3192c5;
  border-radius: 50%;
  font-size: 1.5vh;
}
.button_send:active{
  outline: none;
  -webkit-box-shadow: 1px 1px 5px 0px rgba(50, 50, 50, 0.75);
  -moz-box-shadow:    1px 1px 5px 0px rgba(50, 50, 50, 0.75);
  box-shadow:         1px 1px 5px 0px rgba(50, 50, 50, 0.75);
}
.button_send:hover{
  outline: none;
  background-color:#519dc5;
}
.button_send:focus{
  outline: none;
}
.button_send nobr {
    color: white;
    margin-left: -15px;
}
header.banner_3 form {
    width: 100%;
}
.marcas{
  background-color: #2DB1E0;
  height: auto;
  padding: 4vh 3%;
  position: relative;
  z-index: 2;
  /* display: flex; */
  /* align-items: center; */
}

.categoria{
  display: none;
}
.categoria1{
  display: block;
}
#categoria1{
  display: block;
}
.conte_slide0{
  display: none;
}
.description{
  background-color: #2DB1E0;
  color: white;
  height: auto;
  margin: 0;
  padding: 5vh 20vh 4vh 20vh;
  position: relative;
  top: -1px;
  z-index: 1;
}
.title_descr p:nth-child(1){
  color: white;
    font-size: 19px;
    font-weight: 600;
    line-height: 25px;
    margin-bottom: 0;
    padding-bottom: 3vh;
}
.title_descr p:nth-child(2){
  font-size: 2.2vh;
}
.title_descr p:nth-child(3){
  font-size: 2.2vh;
  display: none;
}
.read-more-descr{
  position: relative;
  margin: 4vh 10% 10vh;
}
/*.read-more-descr:before{
  content: "";
  position: absolute;
  width: 100%;
  border: 1px #3192c5 solid;
  top: 50%;
}*/
.read-more-descr hr{
  content: "";
  position: absolute;
  width: 100%;
  border: 1px #3192c5 solid;
  top: 50%;
  margin: 0;
  display: none;
}
.read-more-descr p {
  border: solid #3192c5 1px;
  padding: 0.8vh 2.5vh;
  border-radius: 18px;
  color: #3192c5;
  display: inline-block;
  background: #fff;
  z-index: 99;
  position: relative;
  text-decoration: none;
  margin-left: 4vh;
  display:flex;
  align-items: center;
  width: 15%;
  cursor: pointer;
}
.read-more-descr p i.fa.fa-chevron-circle-up{
  font-size: 3vh;
  margin-right: 1vw;
}
.read-more-descr p i.fa.fa-chevron-circle-down{
  font-size: 3vh;
  margin-right: 1vw;
}
.knowledge{
  height: auto;
  background:white;
  padding-bottom: 0;
}
.knowledge.page-section {
  z-index: 2;
  position: relative;
}



.w-3{
  flex: 0 0 33.333333%;
  max-width: 33.333333%;
}
.knowledge .w-3 .card{
  border-radius: 20px;
  background: #F2F2F2;
}
.knowledge .w-3 .card .img_content{
  height: 24vh;
  overflow-y: hidden;
  border-top-left-radius: 20px;
  border-top-right-radius: 20px;
}
.knowledge .w-3 .card .img_content img{
  width: 100%;
  height: auto !important;
}
.knowledge .w-3 .card .text_content{
  height: 15vh;
  padding: 2vh 2vw;
  overflow: hidden;
  text-overflow: ellipsis;
}
.read_more.text-align-start{
  text-align: start;
}
.knowledge .w-3 .card .text_content h3{
  font-size: 2.9vh;
  font-weight: bold;
}
.knowledge .w-3 .card .text_content p{
  font-size: 2vh;
  font-weight: 500;
  line-height: 2.2vh;
}
.knowledge .w-3 .card .button_content{
  padding: 3vh;
  position: relative;
  z-index: 50;
}
.knowledge .w-3 .card .button_content .read_more{
  margin: 0;
  text-align: start;
}
.knowledge .w-3 .card .button_content .read_more a{
  background-color: #333333;
  transition: 200ms ease opacity;
}

.knowledge .w-3 .card .button_content .read_more a:hover {
  opacity: 0.8;
}

.w-10{
  padding: 5vh 0 0;
  text-align: center;
}
.w-10 span:nth-child(1){
  display: block;
  font-size: 64px;
  font-weight: bold;
  line-height: 8vh;
}
.w-10 span:nth-child(2){
  color: #333333;
  display: block;
  font-size: 36px;
  font-weight: 500;
  line-height: 5vh;
}
.title_know{
  padding: 6vh 10%;
}
.title_know .line_1{
  font-size: 48px;
  font-weight: 500;
display: block;
}
.title_know .line_2{
  font-size: 48px;
  font-weight: bold;
  display: block;
  line-height: 15px;
}
.slide{
  width: 100%;
  height: 100%;
}
/* SLIDE MARCAS */

.marcas .top-slide .swiper-pagination {
  align-items: center;
  display: flex;
  /* right: 26vw !important; */
  top: 20px;
  gap: 10px;
  justify-content: center;
}

.marcas .slide {
  height: 130px !important;
}

.marcas .swiper-slide {
  height: 130px !important;
}

.marcas .top-slide .swiper-pagination .swiper-pagination-bullet {
  background-color: white;
  height: 15px;
  width: 15px;
}


.top-category-title {
  color: white !important;
  font-size: 40px;
  font-weight: 700;
  margin-bottom: 0;
}

.industria-logos-row {
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
    justify-content: center;
}

.industria-logos-row:before, .industria-logos-row:after {
  content: none !important;
}

.marcas .swiper-wrapper {
  transition: transform 1ms ease !important;
}

.conte_slide0{
  margin: auto;
  width: 80%;
  position: relative;
  height: auto;
}

.industria-logo-item {
  display: flex;
    align-items: center;
}
.conte_slide0 img{
  /* max-width: 10vw; */
}
.slide img{
  max-width: 12vw;
}

@media (min-width: 1200px) and (max-width: 1600px) {
  .conte_slide0 img {
    max-width: 6vw !important;
}
}
.swiper-container {
  width: 100%;
  height: 100%;
}
.swiper-slide {
  text-align: center;
  font-size: 18px;
  background: transparent;

  /* Center slide text vertically */
  display: -webkit-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  -webkit-justify-content: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  -webkit-align-items: center;
  align-items: center;
}
.swiper-containe {
  width: 100%;
  height: 100%;
}
.swiper-button-next:focus{
  outline: none;
}
.swiper-button-prev:focus{
  outline: none;
}
.galery_know{
  display: flex;
  margin: 0 10%;
  padding-bottom: 0;
  position: relative;
  z-index: 1;
}
.mediahub-mobile {
  display: none;
}
.galery_cotent1{
  width: 50%;
  height: 100%;
}
.galery_cotent2{
  width: 50%;
  display: flex;
  height: 100%;
  flex-wrap: wrap;
}
.galery_content21{
width: 50%;
}
.galery_content22{
  width: 50%;
}
.galery_space1, .collage_space1{
  position: relative;
}
.galery_space1{
  margin-bottom: 1vh;
}
.galery_space1 img{
  width: 99%;
  margin-bottom: 1vh;
}
.galery_space2{
  position: relative;
}
.galery_space3{
  position: relative;
}
.galery_space2 img{
  width: 99%;
  border-radius: 1vh;
}
.galery_space3 img{
  width: 99%;
  border-radius: 1vh;
}
.galery_space4{
  width: 50%;
}
.galery_space5 img{
  width: 99%;
  margin-bottom: 1vh;
}
.galery_space7 img{
  width: 99%;
}
.galery_content23{
  width: 100%;
  display: flex;
  margin-top: 1vh;
}
.galery_content24{
  width: 100%;
  display: flex;
}
.galery_space6{
width: 99%;
height: 50%;
background: black;
border-radius: 1vh;
color: white;
padding: 4vh 4vh;
}
.galery_space6 p:nth-child(1){
  font-size: 3vh;
  font-weight: bold;
}
.galery_space8{
   margin-top: 1vh;
}
.galery_space8 img{
  max-width: 100%;
  height: 100%;
}
.galery_bock1{
  background-color: #3192c5;
  border-radius: 1vh;
  height: 100%;
  width: 99%;
  color: white;
  padding: 4vh 5vh;
  position: relative;
}
.galery_bock1 p:nth-child(1){
  line-height: 3vh;
}
.galery_bock1 p:nth-child(2){
  font-size: 18vh;
  text-align: end;
  position: absolute;
  bottom: 0%;
  left: 10%;
}
.galery_bock1 p:nth-child(3){
  font-size: 2.3vh;
  text-align: end;
  position: absolute;
  bottom: 10%;
  left: 55%;
}
.galery_space7{
  width: 50%;
}
.galery_space7{
  width: 100%;
}
footer{
  padding: 3vh 10%;
  background-color: #3192c5;
  display: flex;
  flex-wrap: wrap;
}
.img_footer_social{
  width: 18%;
}
.div_footer{
  width: 33.33%;
  margin: auto;
  text-align: center;
}
.img_footer_logo{
  width: 78%;
}
.div_footer p{
  color: white;
}
.div_footer_social{
  padding: 8vh 0vh 8vh 15vw;
}
.space1_text{
  display: block;
  position: absolute;
  bottom: 3%;
  left: 6%;
  color: white;
  background-color: #000000eb;
  padding: 3vh 4vh;
  width: 50%;
  height: auto;
}
.space1_text p:nth-child(1){
  font-size: 2.3vh;
  line-height: 2.3vh;
  font-weight: bold;
}
.space1_text p:nth-child(2){
  font-size: 1.7vh;
  line-height: 1.7vh;
}
.space2_text{
  display: none;
  position: absolute;
  bottom: 0%;
  left: 6%;
  color: white;
  background-color: #000000eb;
  padding: 5vh 4vh;
  width: 50%;
  height: auto;
}
.space2_text p:nth-child(1){
  font-size: 2.5vh;
  line-height: 2.5vh;
  font-weight: bold;
}
.space3_text p:nth-child(2){
  line-height: 3vh;
}
.space3_text{
  display: none;
  position: absolute;
  bottom: 0%;
  left: 6%;
  color: white;
  background-color: #000000eb;
  padding: 3vh 2vh;
  width: 75%;
  height: auto;
}
.space3_text p:nth-child(1){
  font-size: 2.3vh;
  line-height: 2.3vh;
  font-weight: bold;
}
.space3_text p:nth-child(2){
  line-height: 2vh;
  font-size: 1.5vh;
}
.space4_text p:nth-child(2){
  line-height: 3vh;
}
.space4_text{
  display: none;
  position: absolute;
  bottom: 0%;
  left: 6%;
  color: white;
  background-color: #000000eb;
  padding: 3vh 2vh;
  width: 55%;
  height: auto;
}
.space4_text p:nth-child(1){
  font-size: 2.3vh;
  line-height: 2.3vh;
  font-weight: bold;
}
.space4_text p:nth-child(2){
  line-height: 2vh;
  font-size: 1.5vh;
}
.services.services_about .code:nth-child(1) .container .text_service {
    text-align: left;
}
.services.services_about .code:nth-child(2) .container .text_service {
    text-align: right;
}
.services.services_about .code:nth-child(3) .container .text_service {
    text-align: left;
}
.services.services_about .code:nth-child(4) .container .text_service {
    text-align: right;
      margin-bottom: 0px;
}
.services.services_about .container .text_service .title_service p {
    font-size: 5.7vh;
    font-weight: 600;
}
.services.services_about .container .text_service p.description_service {
    font-size: 3.6vh;
}
#countries{
  align-items: center;
  display: flex;
  height: 110vh;
  position: relative;
  z-index: 2;
}
.content-countries{
  height: 80vh;
    background-image: url(../images/retos-locales-bg.png);
    background-size: cover;
    -webkit-box-pack: center;
    justify-content: center;
    width: 70%;
    position: relative;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
  /* height: 80vh;
  background-image:url(../images/utilidad-pais_01.png) ;
  background-size: 100% 100%;
  -webkit-box-pack: center;
  justify-content: center;
  width: 100%;
  position: relative;
  background-repeat: no-repeat;
  background-attachment: fixed; */
}
.content-countries .countries{
  background-color: #FEA528;
  border-radius: 50%;
  color:white;
  width: 80vh;
  height: 80vh;
  position: absolute;
  right: -40vh;
  top: 0;
  align-items: center;
  display: flex;
}
.info-country{
  margin: auto;
}

.info-country h1{
  font-size: 8vh;
  font-weight: 500;
  text-align: left;
}
.info-country h3{
  font-size: 5vh;
  font-weight: 500;
  margin-bottom: 0;
}
.info-country p:nth-child(3){
  font-size: 3vh;
  margin-bottom: 0;
}
.info-country p:nth-child(4){
  font-size: 2.5vh;
}
.text-contries{
  color: white;
  position: relative;
  /* bottom: 24%; */
  left: -8vw;
  max-width: 34vw;
  z-index: 20;
}
.text-contries h1{
  font-size: 79px;
  font-weight: 700;
  line-height: 6vh;
  letter-spacing: -0.4vh;
  text-align: left;
}
.text-contries h3{
  margin: 0;
  font-size: 67px;
  font-weight: 700;
}
.text-contries p{
  font-size: 41px;
  font-weight: 500;
  line-height: 40px;
  margin-top: 2rem;
}
.country{
  position: absolute;
  width: 8vh;
  height: 8vh;
  border: 0.1vh solid #3192c5;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #3192c5;
  font-size: 2.5vh;
  cursor: pointer;
}
.country_1{
  right: 21%;
  top: -7%;
}
.country_2{
  right: 8%;
  top: 2%;
}
.country_3{
  right: -4%;
  top: 15%;
}
.country_4{
  right: -11%;
  top: 30%;
}
.country_5{
  right: -13%;
}
.country_6{
  right: -11%;
  top: 60%;
}
.country_7{
  right: -4%;
  top: 75%;
}
.country_8{
  right: 8%;
  top: 88%;
}
.country_9{
  right: 21%;
  top: 97%;
}
.menu{
	position: sticky;
  top: 0;
  z-index: 100;
}
.menu__list{
	box-sizing: border-box;
	padding: 20px 3rem;
	position: absolute;
	top: 0;
	right: 0;
	display: flex;
  justify-content: center;
  list-style: none;
}

.menu__link{
	color: inherit;
	font-size: 1.8rem;
}
.nav-btn {
  position: relative;
  overflow: hidden;
  width: 1em;
  height: 1em;
  margin-bottom: 0.5em;
  border: 0.12em solid #000000;
  border-radius: 50%;
  cursor: pointer;
  -webkit-transition: border-color, -webkit-transform 0.3s;
  transition: border-color, -webkit-transform 0.3s;
  transition: border-color, transform 0.3s;
  transition: border-color, transform 0.3s, -webkit-transform 0.3s;
  will-change: border-color, transform;
}
.menu__link:after {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  -webkit-transform: translateX(-50%) translateY(-50%) scale(0.3);
  transform: translateX(-50%) translateY(-50%) scale(0.3);
  background-color: #fd224d;
  opacity: 0;
  -webkit-transition: opacity 0.3s, -webkit-transform;
  transition: opacity 0.3s, -webkit-transform;
  transition: transform, opacity 0.3s;
  transition: transform, opacity 0.3s, -webkit-transform;
  will-change: transform, opacity;
}
.menu__link:after {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
}
.menu__link.active:after,.nav-btn:hover:after {
  -webkit-transform: translateX(-50%) translateY(-50%) scale(0.7);
  transform: translateX(-50%) translateY(-50%) scale(0.7);
  opacity: 1;
  border-color: #3bc2ff;
}
.nav-btn:hover {
  border-color: #3bc2ff;
  -webkit-transform: scale(1.2);
  transform: scale(1.2);
}
.info-country{
  display: none;
}
.countryUsa{
  display: block;
}
.country_0{
  display: none;
}

/*Services*/

.imagen_service_1{
  max-width: 50%;
}

.title_service{
  display: block;
  text-align: left;
}

.description_services_1{
  font-family: 'Montserrat', sans-serif;
  display: block;
  margin: auto;
  text-align: center;
  font-size: 25px;
  margin-top: 8vh;
  margin-bottom: 8vh;
  max-width: 1100px;
}

.cf_b2_secction{
  background-color: #454545;
  color:#ffffff;
  padding-top: 5vh;
  padding-bottom: 5vh;
}

.cf_b2_secction p{
  color:#ffffff;
  font-family: 'Montserrat', sans-serif;
  font-weight: medium;
}

.cf_co_secction h3{
  margin-top: 10vh;
  font-size: 41.39px;
  font-family: 'Montserrat', sans-serif;
  font-weight: bold;
}
.cf_co_secction p{
  margin-bottom: 10vh;
  font-size: 14.39px;
  font-family: 'Montserrat', sans-serif;
  font-weight: medium;
  text-align: justify;
}

.cf_b2_secction h3{
  font-size: 41.39px;
  font-family: 'Montserrat', sans-serif;
  font-weight: bold;
}

.invert p{
  background-color: #454545;
  border-color: #ffffff;
}
/*Collage*/

.college_cotent1{
  width:55%;
}

.collage_cotent2{
  width: 25%;
}
.collage_content11{
  width: 50%;
}

.small_section, .mini{
  display: flex;
  flex-wrap: wrap;
}


.collage_content12{
  width: 50%;

}
.collage_content13{
  width: 50%;
  padding-right: 3vh;

}

.collage_content14{
  width: 50%;

}

.collage_space5 img{
  width: 99%;
  padding-bottom: 1vh;
  padding-top: 1vh;
}

.collage_space6{
  width: 99%;
  height: auto;
  background: black;
  color: white;
  padding: 4vh 4vh;
  }

.collage_space6 p:nth-child(1){
  font-size: 3vh;
  font-weight: bold;
}

.collage_space1, .collage_space3{
  position: relative;
  padding-bottom: 3vh;
}

.collage_space2{
  position: relative;
  padding-right: 3vh;
}

.space1_text_c{
  color: white;
  background-color: #000000a6;
  padding: 2vh 2vh;
  width: 22rem;
  height: auto;
}
.space1_text_c p:nth-child(1){
  font-size: 2.4vh;
  font-weight: bold;
}
.space1_text_c p:nth-child(2){
  font-size: 1.5vh;
}

.space2_text_c{
  margin-top: 5%;
  color: white;
  background-color: #000000;
  padding: 2vh 4vh;
  width: 100%;
  height: auto;
}
.space2_text_c p:nth-child(1){
  font-size: 2.4vh;
  font-weight: bold;
}
.space2_text_c p:nth-child(2){
  font-size: 1.5vh;
}

.collage{
  margin-top: 3rem;
}

.feature_text{
  /*bottom: 61%;
  left: 4%;
  padding: 2vh 4vh;
  width: 30%;
  height: 20%;*/
  color: white;
  background-color: #000000a6;
  padding-bottom: 2%;
}
.feature_text p:nth-child(1){
  font-size: 5.3vh;
  font-weight: bold;
  font-family: 'Montserrat', sans-serif;
}
.feature_text p:nth-child(2){
  font-size: 2.5vh;
  font-weight: medium;
  font-family: 'Montserrat', sans-serif;
}
.feature_img {
  width:80%;
}
.feature_c {
  margin-top: 3vh;
  margin-bottom: 3vh;
}
.vertical-align{
  display: -webkit-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  -webkit-justify-content: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  -webkit-align-items: center;
  align-items: center;
}
.flex-container{
  width: 70%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
  display: flex;
  flex-wrap: wrap;
  flex-flow: column wrap;
}
.objRelative-r{
  position: relative;
  z-index: -1;
  right: 5%;
}
.objRelative-l{
  position: relative;
  z-index: -1;
  left: 5%;
}
.objAbsolute-l{
  position: absolute;
  top: 20%;
  width: 50%;
  left: 5%;
}
.objAbsolute-r{
  position: absolute;
  top: 20%;
  width: 50%;
  left: 40%;
}
.description-b{
  padding: 5vh 5vh 5vh 5vh;
}
.marcas-b{
  height: 25vh;
  padding: 0 10vh;
  border-top: 0.2vh #ccc solid;
  border-bottom: 0.2vh #ccc solid;
  display: flex;
  align-items: center;
  margin-top: 10%;
}
.imgRelative{
  position: relative;
}
.textAbsolute{
  position: absolute;
  bottom: 0;
  left: 3rem;
  z-index: 10;
}
.imgAbsolute-1{
  position: absolute;
  top: 114%;
  left: 5%;
}
.imgAbsolute-2{
  position: absolute;
  top: 115%;
  right: 5%;
}
/*Smart service*/
.banner_10 {
  -webkit-box-align: center;
  align-items: center;
  background-image: url(../images/our-products-banner.webp);
  background-size: 100% 80%;
  display: -webkit-box;
  display: flex;
  height: 80vh;
  position: relative;
  overflow: hidden;
  -webkit-box-pack: center;
  justify-content: center;
  width: 100vw;
  position: relative;
  background-repeat: no-repeat;
  background-attachment: fixed;
  max-width: 100%!important;
  margin-bottom: 5vh;
}

.smart span.line_2 {
  text-align: center;
  display: block;
  font-size: 4vh;
  font-weight: 700;
  line-height: 40px;
}
.smart span.line_1 {
  text-align: center;
  display: block;
  font-size: 7vh;
  margin-bottom: 1rem;
  font-weight: bold;
}

.smart {
  color: white;
  line-height: 1;
  margin: 0;
  right: 0;
  left: 0;
  text-align: left;
}

.smart-video-container h3 {
  font-size: 40px;
  font-weight: 700;
}

.smart-video-container p {
  color: #333333;
    font-size: 25px;
    font-weight: 500;
    line-height: 30px;
    margin-top: 3rem;
}

#xpace .smart {
  top: 24vh !important;
}

#xpace .smart .line_11 {
  margin-bottom: 3vh;
}

.logo-texto img{
  width: 62%;
  text-align: center;
  display: block;
  margin: auto;
}

.smart-logo-mobile {
  display: none;
}

.logo-texto p{
  font-size: 24px;
  text-align: center;
  display: block;
  margin-top: 3vh;
  margin-bottom: 8vh;
}

.pc1{
  margin-bottom: 10vh;
}

.pc1 p{
  font-size: 18px;
  text-align: left;
  display: block;
}

.banner_11 {
  -webkit-box-align: center;
  align-items: center;
  background-image: url(../images/banner-11.png);
  background-size: cover;
  background-position: center;
  display: -webkit-box;
  display: flex;
  height: 64vh;
  position: relative;
  overflow: hidden;
  -webkit-box-pack: center;
  justify-content: center;
  width: 100vw;
  position: relative;
  background-repeat: no-repeat;
  max-width: 100%!important;
  margin-bottom: 5vh;
}

.mediaticas {
  height: 54vh;
}

.mediaticas .smart {
  top: 18vh !important;
  z-index: 2;
}

#bannerx .pc2 p {
  line-height: 42px;
}

.pc2{
  margin-top: 8vh;
}
.pc2 p{
  font-size: 30px;
  text-align: left;
  font-weight: bold;
  display: block;
}
.features_smart img {
  /* width: 50%; */
  text-align: center;
  display: block;
  margin: auto;
  max-height: 14vh;
}

.features_smart p{
  font-size: 14px;
  text-align: center;
  display: block;
  margin-top: 3vh;
  color: #333333;
  font-weight: 700;
  line-height: 20px;

}

#bannerx .see_action a {
  background-color: #333333;
    color: white;
    float: none;
    padding: 0.5rem 1rem;
    border-radius: 15px;
    text-decoration: none;
    font-size: 14px;
}

.features_general{
  margin-top: 8vh;
}

.banner_13 {
  -webkit-box-align: center;
  align-items: center;
  background-image: url(../images/banner-13.png);
  background-size: cover;
  background-position: center;
  display: -webkit-box;
  display: flex;
  height: 49vh;
  position: relative;
  overflow: hidden;
  -webkit-box-pack: center;
  justify-content: center;
  width: 100vw;
  position: relative;
  background-repeat: no-repeat;
  max-width: 100%!important;
  margin-bottom: 5vh;
}

.banner_13 .smart {
  margin: auto;
  top: 18vh !important;
  max-width: 85%;
}

.pc3-container {
  display: none;
  margin: auto;
  max-width: 1200px;
  width:85%;
}

@media (min-width: 801px) {
  .pc3-container {
    display: block;
  }
}

.pc3-mobile {
  display: none;
}

@media (max-width: 800px) {
  .pc3-mobile {
    display: block;
  }
}

.pc3-container .pc3 {
  align-items: center;
  display: flex;
}

.pc3-container .col-md-8 .container {
  margin: 0;
  padding: 0;
}

.pc3 .col-md-8 img {
  height: 64px;
  max-width: 145px;
  width: 100%;
}

.pc3 .col-md-4 img {
  width: 100%;
}


.pc3 img{
  width: 50%;
  margin: auto;
  display: block;
  text-align: center;
  margin-bottom: 5vh;
}

.pc3 p{
  color: #333333;
  line-height: 30px;
  font-size: 20px;
  font-weight: 700;
  margin: auto;
  display: block;
  text-align: left;
}

.logos_smart{
  margin-top: 5vh;
  margin-bottom: 10vh;
}

.banner_14 {
  -webkit-box-align: center;
  align-items: center;
  background-image: url(../images/Fondo4.png);
  background-size: 100% 100%;
  display: -webkit-box;
  display: flex;
  height: 80vh;
  position: relative;
  overflow: hidden;
  -webkit-box-pack: center;
  justify-content: center;
  width: 100vw;
  position: relative;
  background-repeat: no-repeat;
  background-attachment: fixed;
  max-width: 100%!important;
}
.video_smart{
  margin: auto;
  display: block;
  text-align: center;
}
.video_smart img{
  width: 100%;
}

.btn_smart{
  margin-top: 10vh;
  margin-bottom: 10vh;
}

.btn_smart img{
  width: 6%;
  display: block;
  text-align: right;
  margin: auto;
}
.title_general h1 {
  font-size: 8vh;
  font-weight: 700;
  text-align: center;
  line-height: 64px;
}
.title_general h1 span{
  font-weight: bold;
}
.last_feature{
  margin-bottom: 20vh;
}
.title_being_1 p:nth-child(1) {
  font-size: 64.79px;
  font-weight: bold;
  display: block;
  text-align: center;
  margin-top:5vh;
}
.title_being_1 p:nth-child(2) {
  font-size: 34.45px;
  display: block;
  text-align: center;
  margin-top: 0;
  margin-bottom:8vh;
  padding-left: 40vh;
}

.title_collage p:nth-child(1){
  font-size: 64.79px;
  font-weight: bold;
  display: block;
  margin-top:10vh;
}

.smart-video-container {
  margin-bottom: 4rem;
  display: flex;
  align-items: center;
}

.smart-video-button-container {
  margin-left: 0 !important;
  padding-left: 0 !important;
  width: 100%;
}

.see_action a {
  background-color: #2DB1E1;
  color: white;
  float: left;
  font-weight: 500;
  /* border: solid 1px #454545; */
  padding: 0.5rem 1rem;
  border-radius: 15px;
  text-decoration: none;
  font-size: 14px;
  /* letter-spacing: 5px; */

  transition: opacity ease 200ms;
}

.see_action a:hover {
  opacity: 0.8 !important;
  text-decoration: none !important;
}

.see_action a i {
  margin-right: 10px;
}

.see_action{
  margin-top: 5%;
  margin-bottom: 10%;
  display: block;
  text-align: center;
}

.title_collage p:nth-child(2){
  font-size: 19.2px;
  display: block;
  margin-bottom:10vh;
}

.image_service_1{
  max-width: 100%;
}

.adjust-right p{
  display: block;
  margin: auto;
  text-align: right;
}

.dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown:hover .dropbtn {
  color: white;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #0093c5;
  min-width: 245px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  color: black;
  padding: 0px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  font-size: 16px;
}
.dropdown-content a:hover {
  color: black;
}
.dropdown:hover .dropdown-content {
  display: block;
}
.hoverNav li a:hover{
  color: white;
}
/*Staff*/
.space_text_s{
  color: white;
  padding: 2vh 2vh;
  width: 22rem;
  height: auto;
}
.space_text_s p:nth-child(1){
  font-size: 11.74px;
  font-weight: bold;
  line-height: 15px;
  margin: 0;
}
.space_text_s p:nth-child(2){
  font-size: 13.26px;
  font-weight: bold;
  line-height: 15px;
  margin: 0;
}
.space_text_s p:nth-child(3){
  font-size: 8.29px;
  line-height: 15px;
}
.margin-staff{
  margin-top: 15vh;
  margin-left: 10vh;
}
.margin-staff_2{
  margin-top: 5vh;
  margin-bottom: 15vh;
}
.space1_text_s{
  top:15%;
  color: white;
  padding: 2vh 2vh;
  width: 22rem;
  height: auto;
}
.position_staff{
  left:100%;
  color:#ffffff;
  padding-bottom: 10%;
}
.position_staff p:nth-child(1){
  font-size: 29.3px;
  margin: 0;
  line-height: 30px;
}
.position_staff p:nth-child(2){
  font-size: 16.08px;
  margin: 0;
  line-height: 30px;
}
.title_staff p:nth-child(1){
  font-size: 77.36px;
  margin: 0;
}
.title_staff p:nth-child(2){
  font-size: 52.49px;
  font-weight: lighter;
  margin: 0;
  line-height: 30px;
  margin-bottom: 8vh;
}

.fondo_gray {
  background-image: url(../images/fondo-grande.png);
  margin-bottom: 8vh;
  padding-left: 5vh;
}

.fondo_gray img{
  width: 22%;
  margin-top: 3%;
}

.text_sec1{
  padding-top: 5%;
  padding-bottom: 10%;
}

.text_sec1 p:nth-child(1){
  color: #ffffff;
  font-size: 29.3px;
  margin: 0;
  line-height: 25px;
  font-weight: medium;
}
.text_sec1 p:nth-child(2){
  color: #ffffff;
  font-size: 16.08px;
  margin-top: 0;
  line-height: 25px;
}
.text_sec1 p:nth-child(3){
  color: #ffffff;
  font-size: 13px;
  text-align: justify;
}

.text_sec2 p:nth-child(1) {
    color: #454545;
    font-size: 3.5vh;
    line-height: 25px;
    margin: 0;
}
.text_sec2 p:nth-child(2) {
    color: #0093c5;
    font-size: 3vh;
    line-height: 41px;
    margin: 0;
}
.text_sec2 p:nth-child(3) {
    color: #454545;
    font-size: 2vh;
    margin-top: 2vh;
}
.total_sec2 img{
  width: 22%;
}
.total_sec2{
  margin-bottom: 10vh;
}
.hbspt-form{
  width:100%;
}
#hsForm_90a5f8c4-587b-4229-bad6-a16135be9a5c{
  width: 100%;
  padding: 0 10%;
  display: flex;
  height: 100%;
  align-items: center;
}
button.button_send {
    background-color: #FD224D!important;
    border-radius: 30px;
    font-weight: 600;
    padding: 0.5rem 6rem;
    text-align: center;
}
.hs-fieldtype-text.field.hs-form-field{
  width: 35%;
  height: 100%;
  padding-top: 5vh;
}
.hs-fieldtype-text.field.hs-form-field label{
  font-weight: normal;
  font-size: 2vh;
}
.banner.page-section .banner_3 .form_services #hsForm_90a5f8c4-587b-4229-bad6-a16135be9a5c .hs-fieldtype-text.field.hs-form-field input{
  width: 90%;
  height: 4vh;
  border-radius: 1vh;
  border: 1px #ccc solid;
}
.banner.page-section .banner_14 .form_services #hsForm_90a5f8c4-587b-4229-bad6-a16135be9a5c .hs-fieldtype-text.field.hs-form-field input{
  width: 90%;
  height: 4vh;
  border-radius: 1vh;
  border: 1px #ccc solid;
}
.banner.page-section .banner_3 .form_services #hsForm_90a5f8c4-587b-4229-bad6-a16135be9a5c .hs_submit.hs-submit .actions input{
  height: 6vh;
  width: 6vh;
  background-color: #3192c5;
  border-radius: 50%;
  font-size: 1.5vh;
  border: 1px #3192c5 solid;
  color: white;
  margin-top: 2vh;
  position: inherit;
}
.banner.page-section .banner_14 .form_services #hsForm_90a5f8c4-587b-4229-bad6-a16135be9a5c .hs_submit.hs-submit .actions input{
  height: 6vh;
  width: 6vh;
  background-color: #3192c5;
  border-radius: 50%;
  font-size: 1.5vh;
  border: 1px #3192c5 solid;
  color: white;
  margin-top: 2vh;
  position: inherit;
}
.hoverImg, .cursorClick{
  cursor: pointer;
}
.leftJust{
  text-align: right !important;
}
.hs_submit.hs-submit .actions input:focus{
  outline: none;
}
.hs_error_rollup .hs-main-font-element{
  position: absolute;
  right: 60vh;
  bottom: 3vh;
}
.hs_error_rollup li{
  list-style: none;
}
.no-list.hs-error-msgs.inputs-list li{
  list-style: none;
}
.no-list.hs-error-msgs.inputs-list .hs-error-msg{
  position: absolute;
  bottom: 3vh;
}
.submitted-message.hs-main-font-element.hs-form-90a5f8c4-587b-4229-bad6-a16135be9a5c {
  position: absolute;
  top: 34%;
  left: 0;
  right: 0;
  margin: 0 auto;
  text-align: center;
  font-size: 5vh;
  color: #0192c5;
}
/* Contatc */
.banner.page-section.contact-banner header .info_contact .row .col-md-6.contacttext{
  padding: 1vw;
}
.banner.page-section.contact-banner header .info_contact .row .col-md-6 .txt_contact h1{
  color: white;
  font-size: 55px;
  font-weight: 700;
  text-align: start;
  margin-bottom: 1vh;
}
.banner.page-section.contact-banner header .info_contact .row .col-md-6 .txt_contact p{
  font-size: 2vh;
  color: white;
  font-weight: normal;
}
.banner.page-section.contact-banner header .info_contact .row .col-md-6.contactform{
  padding: 0 4vw;
}
.banner.page-section.contact-banner header .info_contact .row .col-md-6.contactform h1{
  color: white;
  font-size: 40px;
  font-weight: 700;
  margin-bottom: 3vh;
  text-align: center !important;
}

.register-form form label {
  color: white;
  font-size: 16px;
}

.banner.page-section.contact-banner header .info_contact .row .col-md-6.contactform h1 p{
  font-size: 19px;
  font-weight: 500;
  line-height: 25px;
}
.banner.page-section.contact-banner header .info_contact .row .col-md-6.contactform nobr{
  color: white;
  font-size: 1.2vh;
  font-weight: lighter;
}
.banner.page-section.contact-banner header .info_contact .row .col-md-6.contactform .form_contact #hs-form-iframe-0{
  width: 100%;
}
.banner.page-section.contact-banner header .info_contact .row .col-md-6.contactform .contentformcontact {
  border-radius: 25px;
  background: #333333e8;
  padding: 7vh 4vw;
  text-align: center;
}

.banner.page-section.contact-banner header .info_contact .row .col-md-6.contactform .form_contact #hs-form-iframe-0 html body form .hs-fieldtype-text.field.hs-form-field label{
  color: white;
}
.progressbar {
  display: inline-block;
  width: 100px;
  margin: 25px;
}

.circle {
  width: 100%;
  margin: 0 auto;
  margin-top: 10%;
  display: inline-block;
  position: relative;
  text-align: center;
}

.circle canvas {
  vertical-align: middle;
}

.circle div {
  position: absolute;
  top: 30px;
  left: 0;
  width: 100%;
  text-align: center;
  line-height: 40px;
  font-size: 20px;
}

.circle strong i {
  font-style: normal;
  font-size: 0.6em;
  font-weight: normal;
}

.circle span {
  display: block;
  color: #aaa;
  margin-top: 12px;
}

.description_services_1 p {
  color: white;
  font-size: 25px;
  font-weight: 500;
  line-height: 22px;
}
.nombreStaff{
  position: relative;
  margin-top: 3vh;
  margin-left: 1vh;
  font-size: 2.2vh;
  line-height: 2vh;
}
.cargoStaff{
  color: #0192c5;
  font-weight: bold;
  font-size: 1.6vh;
}
.imgLinkedin{
  position: absolute;
  width: 4vh;
  top: 41vw;
  left: 25vw;
}
.nombreStaff-2{
  position: relative;
  margin-top: 1.5vh;
  margin-left: 0vh;
  font-size: 1.5vh;
  line-height: 1.5vh;
}
.cargoStaff-2{
  color: #0192c5;
  font-weight: bold;
  font-size: 1vh;
}
.imgLinkedin-2{
  position: absolute;
  width: 3.5vh;
  top: 28vw;
  left: 19vw;
}
.imgLinkedin-3{
  position: absolute;
  width: 5vh;
  top: 36.5vw;
  left: 61vw;
}
.cursorClick{
  position: relative;
}

.frame {
  width: 100%;
  height: 100%;
}

.group-staff{
  display: flex;
}

.linkedin_img{
  width: 4vh;
  padding-top: 10%;
}
.linkedin_img_1{
  width: 4vh;
  padding-top: 40%;
}
.group-staff div:nth-child(1){
  width: 75%;
}
.group-staff div:nth-child(2){
  width: 20%;

}
.image_principal{
  width: 50%;
}
.group-staff_p{
  display: flex;
}

.group-staff_p div:nth-child(1){
  width: 50%;
}
.group-staff_p div:nth-child(2){
  width: 40%;
  padding-left: 3% ;

}
.group-staff_p div:nth-child(3){
  width: 10%;
}

.space1_text_s_p{
  top:5%;
  color: white;
  padding: 3vh 3vh;
  height: auto;
  position: absolute;
}

.img_staff_p{
  width: 3vw;
}

.bajar{
  padding-top: 40%;
}
#servicesxs{
  display: none;
}
.content-countries .content-countriessxs{
  display: none;
}
.xscontentproc{
  display: none;
}
.flexible .sect1{
  background: #454545;
  display: flex;
  color: white;
  padding: 7vh 10%;
}
.flexible .sect1 .col-md-6.sect11{
  text-align: end;
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-end;
  padding-right: 2vw;
}
.flexible .sect1 .col-md-6.sect11 strong{
  font-size: 47px;
}
.flexible .sect1 .col-md-6.sect11 p{
  font-size: 28px;
  line-height: 30px;
  margin-bottom: 0;
  margin-top: 2vh;
  width: 90%;
}
.flexible .sect1 .col-md-6.sect12{
  display: flex;
  align-items: center;
  padding-left: 2vw;
}
.flexible .sect2{
  padding: 10vh 10% 4vh;
}
.flexible .sect2 strong{
  font-size: 48px;
  color: #1693C5;
}
.flexible .sect2 p{
  font-size: 28px;
  line-height: 30px;
  width: 60%;
  margin-top: 4vh;
}
.flexible .sect3{
  padding: 0 10%;
  display: flex;
}
.flexible .sect3 .col-md-6.sect31{
  padding: 0 0.5vw 0 0;
}
.flexible .sect3 .col-md-6.sect32{
  padding: 0 0 0 0.5vw;
}
.flexible .sect3 .col-md-6.sect31 .row.sect311{
  margin: 0;
  color: white;
  background: #1693C5;
  border-radius: 8px;
  padding: 8vh 2vw 4vh;
}
.flexible .sect3 .col-md-6.sect31 .row.sect312{
  background: #454545;
  color: white;
  margin: 1vh 0 0;
  padding: 5vh 2vw 4vh;
  border-radius: 8px;
}
.flexible .sect3 .col-md-6.sect31 .row .content{
  padding-bottom: 3vh;
  position: relative;
}
.flexible .sect3 .col-md-6.sect31 .row .content strong{
  font-size: 30px;
  line-height: 32px;
}
.flexible .sect3 .col-md-6.sect31 .row .content p{
  font-size: 19px;
  line-height: 20px;
  margin-top: 1vh;
}
.flexible .sect3 .col-md-6.sect31 .row .content div{
  height: 100%;
  position: absolute;
  width: 2vw;
  top: 0;
  border-bottom: 2px solid white;
}
.flexible .sect3 .col-md-6.sect32 .row{
  background: #F2F2F2;
  height: 100%;
  border-radius: 8px;
  padding: 0vh 3vw;
  margin: 0;
  display: flex;
  align-items: center;
}
.flexible .sect3 .col-md-6.sect32 .row .content{
  padding-bottom: 3vh;
  position: relative;
}
.flexible .sect3 .col-md-6.sect32 .row .content strong{
  font-size: 40px;
  line-height: 40px;
}
.flexible .sect3 .col-md-6.sect32 .row .content p{
  font-size: 19px;
  line-height: 20px;
  margin-top: 1vh;
}
.flexible .sect3 .col-md-6.sect32 .row .content div{
  position: absolute;
  height: 100%;
  width: 2vw;
  border-bottom: 2px solid #1693C5;
  top: 0;
}
.flexible .sect4{
  padding: 10vh 10% 5vh;
}
.flexible .sect4 strong{
  font-size: 45px;
}
.flexible .sect4 p{
  font-size: 28px;
  line-height: 30px;
}
.flexible .sect5{
  padding: 0 10%;
  display: flex;
}
.flexible .sect5 .sect51{
  padding: 0 2vw 0 0;
}
.flexible .sect5 .sect52{
  padding: 0 1vw 0 1vw;
}
.flexible .sect5 .sect53{
  padding: 0 0vw 0 2vw;
}
.flexible .sect5 .content{
  background: #F2F2F2;
  border-radius: 28px;
  padding: 5vh 3vw;
  height: 100%;
}
.flexible .sect5 .content .mnh20{
  min-height: 60%;
}
.flexible .sect5 .content .mnh20 p{
  font-size: 18px;
  line-height: 23px;
  color: black;
  margin-top: 3vh;
}
.flexible .sect5 .content .read-more{
  display: flex;
  justify-content: center;
}
/* START Custom Wordpress */
#page.site{
/*   background: #0093c5; */
}
.wp-custom-logo .site-header{
  background: #333233;
  padding: 0;
  max-width: 80%;
}
.site-header > .site-logo{
  width: auto!important;
  padding: 0!important;
  border-bottom: none!important;
}
.site-logo .custom-logo{
  width: 25vh!important;
}
.banner.page-section{
  margin-top: 0;
  margin-bottom: 0;
}
#main.site-main{
  padding: 0;
}
#content_banner_2{
  margin-top: 0;
}
.menu{
  margin: 0;
}
#content_banner_2{
  margin-bottom: 0;
}
/* #services,#marcas,#content_banner_2{
  background:white;
} */
#content.site-content{
  background: white;
}
aside.widget-area{
  margin-top: 0;
  max-width: 80%;
  z-index: 999;
  position: relative;
}
#colophon.site-footer{
  display: none;
}
.heateorSssYoutubeSvg{
  background: url(https://stag.milenium.group/wp-content/themes/twentytwentyone/assets/images/youtube-alt.svg);
  background-size: cover!important;
  background-color: #333333 !important;
  /* background: url('data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%3E%3Cpath%20fill%3D%22%230093c5%22%20d%3D%22M26.78%2011.6s-.215-1.515-.875-2.183c-.837-.876-1.774-.88-2.204-.932-3.075-.222-7.693-.222-7.693-.222h-.01s-4.618%200-7.697.222c-.43.05-1.368.056-2.205.932-.66.668-.874%202.184-.874%202.184S5%2013.386%205%2015.166v1.67c0%201.78.22%203.56.22%203.56s.215%201.516.874%202.184c.837.875%201.936.85%202.426.94%201.76.17%207.48.22%207.48.22s4.623-.007%207.7-.23c.43-.05%201.37-.056%202.205-.932.66-.668.875-2.184.875-2.184s.22-1.78.22-3.56v-1.67c0-1.78-.22-3.56-.22-3.56zm-13.052%207.254v-6.18l5.944%203.1-5.944%203.08z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E') no-repeat center center !important; */
}
.heateorSssLinkedinSvg{
  background: url(https://stag.milenium.group/wp-content/themes/twentytwentyone/assets/images/linkedin-alt.svg);
  background-size: cover!important;
  background-color: #333333 !important;
  /* background: url('data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22100%25%22%20height%3D%22100%25%22%20viewBox%3D%22-2%20-2%2035%2039%22%3E%3Cpath%20d%3D%22M6.227%2012.61h4.19v13.48h-4.19V12.61zm2.095-6.7a2.43%202.43%200%200%201%200%204.86c-1.344%200-2.428-1.09-2.428-2.43s1.084-2.43%202.428-2.43m4.72%206.7h4.02v1.84h.058c.56-1.058%201.927-2.176%203.965-2.176%204.238%200%205.02%202.792%205.02%206.42v7.395h-4.183v-6.56c0-1.564-.03-3.574-2.178-3.574-2.18%200-2.514%201.7-2.514%203.46v6.668h-4.187V12.61z%22%20fill%3D%22%230093c5%22%2F%3E%3C%2Fsvg%3E') no-repeat center center !important; */
}
.heateorSssTwitterSvg{
  background: url(https://stag.milenium.group/wp-content/themes/twentytwentyone/assets/images/twitter-alt.svg);
  background-size: cover!important;
  background-color: #333333 !important;
  /* background: url('data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22100%25%22%20height%3D%22100%25%22%20viewBox%3D%22-4%20-4%2039%2039%22%3E%0A%3Cpath%20d%3D%22M28%208.557a9.913%209.913%200%200%201-2.828.775%204.93%204.93%200%200%200%202.166-2.725%209.738%209.738%200%200%201-3.13%201.194%204.92%204.92%200%200%200-3.593-1.55%204.924%204.924%200%200%200-4.794%206.049c-4.09-.21-7.72-2.17-10.15-5.15a4.942%204.942%200%200%200-.665%202.477c0%201.71.87%203.214%202.19%204.1a4.968%204.968%200%200%201-2.23-.616v.06c0%202.39%201.7%204.38%203.952%204.83-.414.115-.85.174-1.297.174-.318%200-.626-.03-.928-.086a4.935%204.935%200%200%200%204.6%203.42%209.893%209.893%200%200%201-6.114%202.107c-.398%200-.79-.023-1.175-.068a13.953%2013.953%200%200%200%207.55%202.213c9.056%200%2014.01-7.507%2014.01-14.013%200-.213-.005-.426-.015-.637.96-.695%201.795-1.56%202.455-2.55z%22%20fill%3D%22%230093c5%22%3E%3C%2Fpath%3E%0A%3C%2Fsvg%3E') no-repeat center center !important; */
}
.heateorSssFacebookSvg{
  background: url(https://stag.milenium.group/wp-content/themes/twentytwentyone/assets/images/fb-alt.svg);
  background-size: cover!important;
  background-color: #333333 !important;
  /* background: url('data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22100%25%22%20height%3D%22100%25%22%20viewBox%3D%22-5%20-5%2042%2042%22%3E%3Cpath%20d%3D%22M17.78%2027.5V17.008h3.522l.527-4.09h-4.05v-2.61c0-1.182.33-1.99%202.023-1.99h2.166V4.66c-.375-.05-1.66-.16-3.155-.16-3.123%200-5.26%201.905-5.26%205.405v3.016h-3.53v4.09h3.53V27.5h4.223z%22%20fill%3D%22%230093c5%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E') no-repeat center center !important; */
}
.heateorSssVimeoSvg {
  background: url(https://stag.milenium.group/wp-content/themes/twentytwentyone/assets/images/vimeo-alt.svg);
  background-size: cover!important;
  background-color: #333333 !important;
  /* background: url('../images/vimeo.svg') no-repeat center center !important;
  width: 61%;
    position: relative;
    left: 6px; */
}
.heateorSssFacebookBackground,.heateorSssTwitterBackground,.heateorSssLinkedinBackground,.heateorSssYoutubeBackground{
  background: white;
}

.heateorSssVimeoBackground {
  background-color: white;
}
#heateor_sss_follow-2{
  display: flex;
  align-items: center;
  justify-content: flex-end;
}
#custom_html-2{
  display: flex;
  align-items: center;
  justify-content: flex-start;
}
#custom_html-2 .textwidget.custom-html-widget{
  font-weight: bold;
  font-size: 12px;
}
#media_image-2 img{
  width: 80% !important;
}
.menu .menu__list a:focus ,.primary-navigation .primary-menu-container > ul > .menu-item > a:focus {
  background: inherit !important;
}
.primary-navigation a,.primary-navigation .sub-menu .menu-item > a{
  font-size: 2vh !important;
}

/* ESTRATEGIAS SECTION */

.estrategiasxs {
  display: none;
  position: relative;
}

.estrategias-container {
  padding: 6rem 0;
}


.estrategias-container h2 {
  font-size: 55px;
  font-weight: 700;
  margin-bottom: 4rem;
  text-align: center;
}

.estrategias-container h4 {
  margin-bottom: 2rem;
}

.influencer-container {
  background-color: #8362E7;
}

.creatividad-container {
  background-color: #FD224D;
}

.digital-container {
  background-color: #FEA528;
}

.contenido-container {
  background-color: #FAE332;
}

.eventos-container {
  background-color: #9BDC2A;
}

.comms-container {
  background-color: #2DB1E1;
}


.estrategias-top-container p {
  text-align: left;
}

.influencer-top-container {
  background-image: url('../images/influencer-top-bg.png');
  background-repeat: no-repeat;
  background-size: 100%;
  background-position-y: 0;
}

.creatividad-top-container {
  background-image: url('../images/creatividad-top-bg.png');
  background-repeat: no-repeat;
  background-size: 100%;
  background-position-y: -3px;
}

.digital-top-container {
  background-image: url('../images/digital-top-bg.png');
  background-repeat: no-repeat;
  background-size: 100%;
  background-position-y: -3px;
}

.contenido-top-container {
  background-image: url('../images/contenido-top-bg.png');
  background-repeat: no-repeat;
  background-size: 100%;
  background-position-y: -3px;
}

.eventos-top-container {
  background-image: url('../images/eventos-top-bg.png');
  background-repeat: no-repeat;
  background-size: 100%;
  background-position-y: -3px;
}

.comms-top-container {
  background-image: url('../images/comms-top-bg.png');
  background-repeat: no-repeat;
  background-size: 100%;
  background-position-y: -3px;
}

.digital-container h4, .digital-container p, .digital-container span, .digital-container h1,
 .digital-container h2, .contenido-container h4, .contenido-container p, .contenido-container span, .contenido-container h1,
  .contenido-container h2, .eventos-container h4, .eventos-container p, .eventos-container span, .eventos-container h1,
  .eventos-container h2, .home-services-container h4, .home-services-container p, .home-services-container span, .home-services-container h1,
  .home-services-container h2 {
  color: #333333 !important;
}

.estrategias__features-container {
  padding: 0 12%;
}

.estrategias__mejorar-container {
  padding: 4rem 0;
}

.estrategias-container .title_general {
  color: white;
  display: inline-block;
  margin: auto;
  width: 100%;
}

.estrategias-container .image-responsive {
  display: block;
  margin: auto;
  margin-bottom: 4rem;
  max-width: 100%;
}

.estrategias__feature {
  align-items: center;
  color: white;
  display: flex;
  margin-bottom: 6rem;
}

.estrategias__feature h4 {
  font-size: 50px;
  font-weight: 700;
}

.estrategias__feature p {
  font-size: 25px;
  font-weight: 500;
  line-height: 30px;
  margin: 2.5rem 0;
}

.estrategias-feature-right, .estrategias-feature-right p {
  text-align: right !important;
}

.estrategias__mejora-container {
  padding: 0 15%;
}

.estrategias__mejora {
  align-items: center;
  color: #333333;
  display: flex;
  margin-bottom: 10rem;
  padding: 0 12%;
}

.estrategias__mejora h4 {
  font-size: 50px;
  font-weight: 700;
}

.estrategias__mejora p {
  font-size: 25px;
  font-weight: 500;
  line-height: 30px;
}


.mejoras-button a {
  border-radius: 25px;
  border: 0;
  color: white;
  font-size: 20px;
  font-weight: 500;
  margin-top: 2rem;
  padding: 0.5rem 1.5rem;

  transition: 200ms ease opacity;
}

.mejoras-button a:hover {
  opacity: 0.8;
  text-decoration: none;
}

.mejoras-button a i {
  margin-right: 10px;
}

.creatividad-mejoras-button a {
  background-color: #FD224D;
}

.digital-mejoras-button a {
  background-color: #FEA528;
}

.contenido-mejoras-button a {
  background-color: #FAE332;
}

.influencer-mejoras-button a {
  background-color: #8362E7;
}

.comms-mejoras-button a {
  background-color: #2DB1E1;
}

.eventos-mejoras-button a {
  background-color: #9BDC2A;
}

.estrategias-form-container {
  background: url(../images/about-contact-bg.png);
  background-size: cover;
  background-position: center;
  padding: 18rem 15%;
  width: 100%;
  height: 100%;
}

.estrategias-form-inputs {
  margin-top: 3rem;
  position: relative;
}

.estrategias-form-container label {
  color: white;
  margin-left: 20px;
}

.estrategias-form-container input {
  background: white !important;
  border-radius: 30px;
  border: 0;
  width: 100%;
}

.estrategias-form-container input:focus {
  outline: none;
  border: none;
}

.estrategias-form-container button {
  background-color: #FD224D !important;
  border: 0;
  border-radius: 30px;
  bottom: 0;
  color: white !important;
  font-weight: 700;
  padding: 0.7rem 3.5rem;
  position: absolute;
  width: auto !important;

  transition: ease 200ms opacity;
}

.estrategias-form-container button:hover {
  border: 0 !important;
  outline: 0 !important;
  opacity: 0.8;
}

.estrategias-form-title {
  color: white;
}

.estrategias-form-title h4 {
  font-size: 3vw;
  font-weight: 400;
}


.estrategias-form-title span {
  font-size: 55px;
  font-weight: 600;
}

@media (max-width: 991px) {

  .title_descr p:nth-child(1){
      font-size: 14px;
  }

  .estrategias-form-container {
    padding: 8rem 5%;
  }

  .smart-video-container {
    display: initial;
  }
  .smart-video-button-container {
    margin-bottom: 2rem;
  }

  .estrategias-container {
    padding: 6rem 0;
  }
  .estrategias-container:last-of-type {
    padding: 1rem 0;
  }

  .estrategias__feature {
    flex-direction: column;
  }

  .estrategias__feature h4 {
    font-size: 18px;
    margin-top: 2rem;
  }

  .estrategias__feature p {
    font-size: 12px;
  }

  .estrategias__feature img {
    width: 100%;
  }

  .estrategias__feature h4, .estrategias__feature p, .estrategias__feature-right p {
    line-height: 2.5vh;
    text-align: center !important;
}

.estrategiasxs h4 {
  color: #333333;
}


  .estrategias-container h2 {
    font-size: 20px;
    padding: 0 1rem;
  }

  .estrategias-feature-right .estrategias__mejoras-container {
    display: flex;
  }
  
  .estrategias-feature-right .col-md-6 {
    order: 2;
  }

  .estrategias-feature-right img {
    margin-bottom: 2rem;
    order: 1 !important;
  }

  .estrategias__mejora h4 {
    font-size: 22px;
  }

  .estrategias__mejora p {
    font-size: 15px;
    font-weight: 500;
    line-height: 3.5vh;
}

  .description_services_1 p {
    text-align: center !important;
  }

  .estrategias-feature-right {
    order: 2;
  }

  .estrategias__mejora {
    flex-direction: column;
  }

  .estrategias__mejora img {
    width: 100%;
  }

  .estrategias__mejora h4, .estrategias__mejora p {
    text-align: center !important;
  }

  .estrategias-feature-right {
    order: 2;
  }

  .estrategias-form-inputs {
    padding: 0 3rem;
  }

  .estrategias-form-container button {
    padding: 0.4rem 3.5rem;
  }
  
  .estrategias-form-inputs .col-md-10, .estrategias-form-inputs .col-md-4 {
    padding: 0 !important;
  }

  .estrategias-form-container button {
    position: relative;
    margin: auto;
    margin-top: 1rem;
    display: block;
    width: 100% !important;
  }

  .mejoras-button a {
    font-size: 1.2rem;
    margin: 2rem auto;
  }

  .mejoras-button {
    display: flex;
  }

  .estrategias-form-title {
    text-align: left;
  }

  .estrategias-form-title h4 {
    font-size: 20px;
    font-weight: 500;
    max-width: 80%;
}
  .estrategias-form-title span {
    font-size: 26px;
    font-weight: 600;
  }

  .estrategias-form-inputs input {
    font-size: 12px;
    margin-left: 0;
    margin-right: 0;
    margin-bottom: 1.5rem;
    padding: 3px 10px;
  }

  .xpace_container {
    display: block;
  }

  .xpace_video {
    margin-bottom: 2rem;
  }
  
  .smart-video-container h3 {
    font-size: 20px;
    margin-top: 0;
    text-align: center;
  }

  .smart-video-container p {
    font-size: 12px;
    line-height: 13px;
    text-align: center;
    max-width: 325px;
    margin: auto;
    margin-bottom: 1.5rem;
  }

  #xpace .smart .line_11 {
    display: block;
    font-size: 18px;
    text-shadow: none !important;
  }
  
  .title_xpace p {
    font-size: 16px;
    line-height: 18px;
    margin-bottom: 0;
  }

  .xpace_video {
    margin-bottom: 0;
  }

  .xpace-text-container p {
    color: #333333;
    font-size: 12px;
    font-weight: 500;
    line-height: 16px;
    margin-bottom: 2rem;
    text-align: center;
  }

  .title_xpace p span {
    color: #333333;
    font-weight: 700;
  }

.xpace-text-container a {
  background-color: #9BDC2A;
  border-radius: 20px;
  color: white;
  font-weight: 500;
  margin-top: 4rem;
  padding: 0.5rem 1rem;
  transition: 200ms ease opacity;
  margin: 3rem auto;
  display: block;
  width: 180px;
}
}

/* END Custom Wordpress */
@media (max-width:600px){

  .description_services_1{
    font-family: 'Montserrat', sans-serif;
    display: block;
    margin: 0;
    text-align: center;
    font-size: 19.2px;
    margin-top: 3vh;
    margin-bottom: 8vh;
  }

  .description_services_1 p {
    font-size: 13px !important;
    line-height: 17px !important;
  }

  .creatividad-top-container {
    background: none;
  }

  .digital-top-container {
    background: none;
  }

  .contenido-top-container {
    background: none;
  }

  .influencer-top-container {
    background: none;
  }

  .eventos-top-container {
    background: none;
  }

  .comms-top-container {
    background: none;
  }

  .estrategiasxs {
    display: block;
  }

  .mediahub-mobile .carousel-control {
    top: 50%;
  }

  .estrategiasxs .carousel-control.right, .estrategiasxs .carousel-control.left {
    top: 50%;
  }

  .estrategiasxs .glyphicon-chevron-right:before, .estrategiasxs .glyphicon-chevron-left:before, .mediahub-mobile .glyphicon-chevron-right:before, .mediahub-mobile .glyphicon-chevron-left:before {
    color: #333333;
  }

  

  .estrategiasxs .estrategias__feature {
    margin-bottom: 0;
  }

  .estrategiasxs .carousel.slide {
    height: 100% !important;
  }

  .estrategiaslg {
    display: none;
  }

  .estrategias-form-container {
    background: url(../images/form-contact-bg-mobile.png);
    background-size: cover;
    background-position: center;
    padding: 2rem 9% 6rem;
  }

  .menu-item-43,.menu-item-45,.menu-item-46 {
    width: 20% !important;
  }
  #site-navigation div.menu-button-container{
    margin: 0;
    padding: 0;
  }
  .cuerpo_modal_exito{
        top: 25vh!important;
        width: 100%!important;
    }
    #PopupExito .container{
      width: 90%;
    }
    #PopupExito .container .row{
      max-width: none;
    }
    h1.suc{
        font-size: 5vh!important;
        line-height: 5vh!important;
        font-weight: 500!important;
    }
    .check{
        right: 0!important;
        text-align: center!important;
    }
    .check img{
        width: 50%!important;
    }
    h1.suc {
    color: #0093c5;
    font-family: 'Montserrat', sans-serif;
    font-size: 44px;
    text-align: center;
    font-weight: lighter;
    line-height: 41px;
    margin-bottom: 25px;
  }
  .label_form {
    width: 100%;
    padding-left: 8%;
    display: block;
}
.send_form {
    display: block;
    align-items: center;
    text-align: center;
}
.name_form {
    width: 100%!important;
    padding-top: 0vh;
    display: block;
    max-width: 100%!important;
    height: auto;
    margin-bottom: 2vh;
}
.button_send {
    height: 8vh;
    width: 6vh;
    background-color: #3192c5;
    border-radius: 50%;
    font-size: 1.5vh;
    border: 1px #3192c5 solid;
  }
  .form_services {
      height: 20vh;
      width: 100%;
      background: white;
      position: absolute;
      top: 35vh;
      display: block;
  }
  #main > div.banner_2.skrollable.skrollable-between{
    display: none;
  }
  .heading span.line_1{
    font-size: 5vh;
    line-height: 5vh;
  }
  #img-header{
    display: none;
  }

  .heading.rellax{
    height: 100%;
    margin-bottom: 0;
    padding: 0;
  }

  .header-container {
    align-items: center;
    display: flex;
    flex-direction: column;
    height: 100%;
    justify-content: flex-end;
    margin: auto;
    max-width: none;
    padding: 5rem 2.5rem;
    position: relative;
    width: 100%;
    margin-top: -3vh;
}

  .header-container h1 {
    font-size: 23px;
    /* text-align: center!important; */
  }

  .header-container h1 span {
    font-size: 23px;
  }

  
  .header-unicornio {
    font-size: 5rem !important;
  }

  .header-bottom {
    max-width: none;
  }

  .header-bottom a {
    display: block;
    margin-bottom: 2rem;
    margin-top: 2.5rem;
  }
  
  .header-container p, .header-container button {
    font-size: 13px;
    font-weight: 600;
  }


  .read-more a{
    font-size: 2vh;
    padding: 0.8vh 1.5vh;
  }
  .read-more a i{
    font-size: 2vh;
    padding-right: 2.5vw;
  }
  #servicesxs .content-serv-next:focus-visible,  #servicesxs .swiper-container-rtl .content-serv-prev:focus-visible{
    outline: none;
  }
  #servicesxs .content-serv-next:after, #servicesxs .swiper-container-rtl .content-serv-prev:after,#servicesxs .content-serv-prev:after, #servicesxs .swiper-container-rtl .content-serv-next:after{
    padding: 0.45vh 1.4vh;
    font-size: 3vh;
  }
  #categoria1 .swiper-button-next:after, #categoria1 .swiper-container-rtl .swiper-button-prev:after, #categoria1 .swiper-button-prev:after, #categoria1 .swiper-container-rtl .swiper-button-next:after{
    padding: 0.45vh 1.4vh;
    font-size: 3vh;
  }
  #countries .countries-serv-next:after,#countries .swiper-container-rtl .countries-serv-prev:after,#countries .countries-serv-prev:after, #countries .swiper-container-rtl .countries-serv-next:after{
    border: none;
    color: white;
    padding: 0.45vh 1.4vh;
    font-size: 3vh;
  }
  #custom_html-2{
    order: 3;
    width: 100%;
    margin: 0;
    margin-top: 1vh;
    justify-content: center;
  }
  .w-4{
    width: 100%;
  }
  .w-6{
    width: 100%;
    padding-left: 0;
    margin-top: 5vh;
  }
  .w-6 img{
    width: 100%;
  }
  .txt_botton{
    bottom: 0vh;
    position: absolute;
    display: flex;
    flex-wrap: wrap;
    padding: 4vh 10%;
  }
  .w-7{
    margin-bottom: 1rem;
    padding: 0;
    text-align: center;
    width: 100%;
  }
  .w-3{
    display: flex;
    flex: auto;    
    flex: auto;
    justify-content: center;
    max-width: inherit;
    width: 100%;
  }
  .read_more.text-align-start{
    margin-right: auto;
    margin-top: 1vh;
  }
  .title_know .line_1{
    line-height: 1vh;
    font-size: 13px;
    font-weight: bold;
  }
  .title_know .line_2{
    line-height: 1vh;
    font-size: 13px;
  }
  .galery_know{
    flex-wrap: wrap;
    margin: 0 5%;
    padding-bottom: 4rem;
  }

  .mediahub-desktop {
    display: none;
  }

  .mediahub-mobile {
    display: flex;
  }
  
  .knowledge{
    padding-bottom: 0;
  }
  .image_service_1{
    text-align: center;
  }
  .image_service_1 img{
    text-align: center !important;
    float: initial !important;
  }
  #heateor_sss_follow-2{
    justify-content: center;
    order: 2;
    width: 100%;
    margin: 0;
  }
  .heateorSssFacebookBackground, .heateorSssTwitterBackground, .heateorSssLinkedinBackground, .heateorSssYoutubeBackground, .heateorSssVimeoBackground{
    width: 25px!important;
    height: 25px!important;
  }
  #media_image-2{
    text-align: center;
    order: 1;
    width: 100%;
    margin: 0;
    margin-bottom: 1vh;
  }
  .galery_know .w-3{
    margin-bottom: 2vh;
  }

    
  #carousel-mediahub .w-3 {
    padding: 0 !important;
  }

  #carousel-mediahub .item {
    padding: 0 5px;
  }

  .body_modal {
    position: absolute;
    width: 90%;
    left: 0;
    right: 0;
    margin: 0 auto;
    top: 29vh;
    text-align: center;
  }
  .body_modal iframe {
    width: 100%;
    padding: 2vw 5vw;
    height: 55vw;
    background: #0093c5;
    border-radius: 15px;
  }
  .body_modal span {
    background: #fff;
    position: absolute;
    right: 0;
    font-weight: bold;
    padding: 1px 7px;
    border-radius: 21px;
    font-size: 15px;
    cursor: pointer;
  }
  .idioma_mobile li.espa img, .idioma_mobile li.english img {
    max-width: 6.9vh;
    padding: 4px;
  }
  .idioma_mobile li {
    /* width: 10%; */
    display: inline-block;
  }

  .idioma_mobile {
      text-align: center;
      margin-top: 10vh;
  }

  .idioma_mobile a {
      padding: 0!important;
  }
  .idioma_mobile li.espa:before{
    display: none;
  }
  .menu{
    display: none;
  }
  /* .flexible{
    width: 50%;
    float: left;
    height: 100%;
  } */
  .flexible{
    display: none;
  }
  .flexiblexs{
    display: none;
  }
  .content_banner_2 .flexiblexs .title_being p:nth-child(1){
    font-size: 5vh;
    line-height: 5vh;
    text-align: end;
    font-weight: 600;
  }
  .content_banner_2 .flexiblexs .title_being p:nth-child(2){
    font-size: 2vh;
    width: 70%;
    text-align: end;
    margin-left: 30%;
    line-height: 3vh;
    margin-top: 1vh;
    font-weight: 600;
  }
  /* #banner_2{
    width: 50%;
    overflow-y: hidden;
    float: right;
  } */
  #banner_2xs h1{
    width: 100%;
    overflow-y: hidden;
  }
  #banner_2xs h1 span.name img{
  width: 70%;
  }
  .content_banner_2{
    display: flex;
    align-items: center;
    margin: 5vh 0;
  }
  #banner_2{
    display: none;
  }
  #banner_2xs{
    display: block;
    /* padding-right: 0; */
  }
  .showing{
    height: auto;
  }
  #countries .content-countries .countries{
    background-color: #3192c5;
    border-radius: 50%;
    color: white;
    width: 70vw!important;
    height: 70vw;
    position: absolute;
    left: 15%;
    top: 34%;
    align-items: center;
    display: flex;
  }
  #countries .content-countries .countries-serv-next, #countries .content-countries .countries-serv-prev {
    top: 58% !important;
  }
  .banner_2xs{
    display: block;
  }
  .banner_2xs{
    background: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(../images/home-flexible-banner.png);
    width: 100%;
    height: 150px;
    text-align: center;
    opacity: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    background-size: cover;
    background-position: center;
  }
  .banner_2xs p {
    color: #454545;
    margin-bottom: 0;
    text-align: center;
  }
  .banner_2xs span {
    display: block;
    margin: 0;
    text-align: center;
    font-size: 33px;
    font-weight: 700;
    line-height: 4vh;
    color: white;
  }

  .banner_2xs .line-2 {
    font-size: 12px !important;
      font-weight: 500 !important;
  }

  .banner_2xs span:nth-child(2) {
      font-size: 3vh;
  }
  .content-img-serv{
    display: none;
  }
  .content-img-servxs{
    display: block;
    padding: 0;
  }
  .services .code.content-serv{
    padding: 5vh 16vw 5vh 10vw;
  }
  .text_service .title_service p{
    line-height: 3.3vh;
    margin-bottom: 2vh;
    font-size: 3.3vh;
  }
  .text_service .title_service{
    padding-left: 0;
  }
  .read-more{
    padding-top: 2vh;
    text-align: left;
  }
  .image_service img{
    margin-bottom: 1vh;
  }
  .scale-inv{
    transform: scaleX(-1);
  }
  .services .code.content-serv .row{
    align-items: flex-end;
  }
  p.description_service{
    text-align: initial;
  }
  .services{
    position: relative;
  }
  #servicesxs{
    display: block;
    margin: 0 5vw;
    overflow-x: hidden;
  }
  .heading_1 span.line_1{
    font-size: 6vh;
  }
  .heading_1 span.line_2{
    font-size: 3vh;
  }
  .banner.page-section .banner_3{
    height: 100%;
    background-image: url(../images/banner_02mob.png);
    background-size: 100% 45%;
    background-attachment: initial;
  }
  .banner.page-section .banner_3 .form_services {
    height: 45vh!important;
    padding: 5vh 0;
    bottom: 0;
    top: inherit;
    background: #f7f7f7;
}
  #hsForm_90a5f8c4-587b-4229-bad6-a16135be9a5c{
    display: flex!important;
    flex-wrap: wrap;
  }
  .hs_mobilephone.hs-mobilephone.hs-fieldtype-text.field.hs-form-field{
    width: 80%;
  }
  .banner_4{
    background-image: url(../images/home-banner-3-mobile.webp);
    background-size: cover;
    background-position: left;
    height: 234px;
    background-attachment: revert;
  }

  .banner_4 .read_more a {
    padding: 0.7rem 1rem;
  }

  .banner_4 .read_more a i.fa {
    align-items: center;
    display: inline;
    font-size: 8px;
    height: 20px;
    justify-content: center;
    padding: 5px;
    width: 20px;
  }

  .heading_2{
    margin: 0 14vw;
    background: #0000009e;
    padding: 0 4vw;
  }
  .heading_2 span.line_1 {
    font-size: 20px;
    margin-bottom: 1.5rem;
    margin-top: 12vh;
}
  .heading_2 span.line_2 {
    font-size: 12px;
    font-weight: 600;
    line-height: 2.3vh;
    max-width: 85%;
}
  .read_more a{
    font-size: 12px;
    padding: 0.2rem 1rem;
  }
  .read_more a i.fa{
    color: #333333;
  }

  .marcas {
    color: white;
  }
  .great{
    align-items: center;
    background-color: #333333;
    color: white;
    display: flex;
    height: auto;
    justify-content: center;
    padding: 4rem 0 0;
  }
  .marcas .top-slide .swiper-pagination {
    top: 80px;
  }

  .title_great{
    padding: 0 10%;
  }
  .title_great p:nth-child(1){
    font-size: 20px;
    line-height: 2vh;
  }
  .title_great p:nth-child(2){
    font-size: 20px;
    font-weight: 600;
  }
  .slide{
    padding: 0 3vw;
    height: 18vh
  }
  .marcas{
    background-color: #333333!important;
    border-bottom: none;
    flex-wrap: wrap;
    height: auto;
    padding: 4vh 10%;
  }
  .slide img{
    max-width: 50vw;
  }
  #carousel-mediahub.slide img{
    max-width: 100%;
  }
  .conte_slide0{
    width: 75%;
    padding: 0 4vw;
    height: auto;
    margin: auto;
  }
  .description{
    background-color: #333333!important;
    display: none;
    padding: 0 10%;
    text-align: start;
  }
  .conte_slide0 img {
    max-width: 20vw;
    padding-bottom: 1rem;
}

  .header{
    background-image: url(../images/banner_01mob.png);
  }
  .heading span.line_2{
    font-size: 5vh;
  }
  .txt_botton p:nth-child(1) {
    font-size: 13px;
    line-height: 2vh;
    /* padding-top: 4vh; */
    text-align: left;
    width: 100%;
  }
  .txt_botton p:nth-child(2){
    font-size: 3vh;
    line-height: 3vh;
    padding-bottom: 0;
    padding-top: 2rem;
  }
  .banner.page-section .banner_3 .form_services #hsForm_90a5f8c4-587b-4229-bad6-a16135be9a5c .hs-fieldtype-text.field.hs-form-field label{
    margin-top: 0;
  }
  #countries{
    height: 500px;
    background: #333333;
    overflow-x: hidden;
  }
  .content-countries {
    height: 100%;
    /* margin: 0 0 30vh; */
    background: #333333;
    background-size: cover;
    -webkit-box-pack: center;
    justify-content: center;
    width: 100%;
    padding-top: 3rem;
    position: absolute;
    top: 0;
    background-repeat: no-repeat;
    background-attachment: inherit;
  }
  .text-contries{
    position: relative;
    color: white;
    top: 5%;
    left: inherit;
    margin-bottom: 7rem;
    text-align: center;
    /* font-size: 2.4vh; */
    padding: 0 10%;
    max-width: none;
  }
  .text-contries h1 {
    display: inline;
    font-size: 20px;
    font-weight: 600;
    line-height: 3vh;
    text-align: center;
}
.text-contries h3 {
  display: inline;
  font-size: 20px;
}
  .text-contries p{
    display: inline;
    font-size: 20px;
    font-weight: 700;
    line-height: 3vh;
    margin-top: 0;
  }
  .info-country h1{
    font-size: 5vh;
  }
  .info-country h3{
    font-size: 3.5vh;
    margin-top: 1.5vh;
  }
  .info-country p:nth-child(3){
    font-size: 2vh;
  }
  .info-country p:nth-child(4){
    font-size: 1.5vh;
  }
  .info-country p:nth-child(5){
    font-size: 1.5vh;
  }
  .w-10 span:nth-child(1) {
    font-size: 20px;
    line-height: 1vh;
    padding-right: 0;
}
.w-10 span:nth-child(2) {
  padding-left: 0;
  font-size: 20px;
  font-weight: bold;
}
  .country{
    display: none;
  }
  .categoria {
    text-align: center;
    padding: 7rem 0;
  }
  .info-country{
    align-items: center;
    background-color: #FEA528;
    border-radius: 100%;
    display: flex;
    flex-direction: column;
    height: 100%;
    justify-content: center;
    text-align: initial;
    width: 100%;
  }

  .info-country.countryUsa, .info-country.countryArg {
    background-color: #FEA528;
  }

  .info-country.countryMex, .info-country.countryChi {
    background-color: #FD224D;
  }
  
    .info-country.countryCol {
      background-color: #FAE332;
    }

  .info-country.countryEcu, .info-country.countryPar {
    background-color: #9BDC2A;
  }

  .info-country.countryPer {
    background-color: #2DB1E1;
  }

  .info-country.countryBra, .info-country.countryUru {
    background-color: #8362E7;
  }

  .content-countries .content-countriessxs{
    display: block;
    height: auto;
  }
  .content-countriess{
    display: none;
  }
  .banner_10{
    align-items: flex-end;
    background-image: url(../images/our-products-banner-mobile.webp);
    background-attachment: inherit;
    background-size: auto;
    height: calc(100vh - 70px);
    margin-bottom: 0;
    padding: 15rem 2.5rem;
  }
  .banner_11 .smart{
    font-weight: 500;
    margin-top: 6rem;
    max-width: 80%;
    padding: 0 4vw;
    position: initial;
    text-shadow: 1px 1px 1px #000;
  }

  .banner_11.mediaticas .smart{
    font-weight: 500;
    height: 100%;
    margin-top: 6rem;
    max-width: 80%;
    padding: 0 4vw;
    position: relative;
    text-shadow: 1px 1px 1px #000;
    top: initial !important;
    z-index: 2;
  }

  .banner_11 .smart img{
    max-width: 150px;
  }
  
  .banner_10 .smart span.line_1{
    font-size: 34px;
    font-weight: 700;
    text-align: left;
  }
  .banner_10 .smart span.line_2{
    font-size: 13px;
    font-weight: 500;
    text-align: left;
    line-height: 15px;
    max-width: 200px;
  }
  .smart span.line_1{
    font-size: 34px;
    font-weight: 700;
    /* text-align: left; */
  }
  .smart span.line_2{
    font-size: 13px;
    font-weight: 500;
    /* text-align: left; */
  }
  #banner_22 .container{
    margin-bottom: 0;
    max-width: 100% !important;
    padding: 0;
    width: 100%;
  }

  #banner_22 .container .see_action {
    display: flex;
  }

  #banner_22 .container.logo-texto img{
    width: 65vw!important;
  }

  .smart-logo-desktop {
    display: none;
  }

  .smart-logo-mobile {
    display: block;
  }

  #banner_22 .container.logo-texto p{
    font-size: 2vh;
    margin: 3vh 4vw!important;
    width: auto;
    text-align: initial;
  }
  .video_smart img {
    border-radius: 15px;
    margin-bottom: 3rem;
    width: 75%;
  }
  .see_action a{
    font-size: 1.7vh;
    padding: 0.5vh 1vw;
    letter-spacing: 2px;
    display: flex;
    justify-content: center;
    width: max-content;
    margin: auto;
  }
  .see_action i{
    font-size: 2.5vh;
    margin-left: 1vw;
    margin-right: 1vw;
  }
  .banner.page-section .banner_11.mediaticas {
    align-items:flex-end;
    background-attachment: inherit;
    background-size: cover;
    background-image: url(../images/banner-11.png) !important;
    height: 140px;
    margin-bottom: 0;
    padding: 3rem 0;
  }

  .banner.page-section .banner_11 .space-white {
    display: none !important;
  }

  .banner_11.mediaticas .smart.rellax span.line_1{
    font-size: 18px;
    text-shadow: none;
  }
  .banner_11.mediaticas .smart.rellax span.line_2{
    font-size: 12px;
    line-height: 1.8vh;
    margin-top: 0;
    text-shadow: none;
  }
  .banner_11 .smart.rellax span.line_1{
    font-size: 3.3vh;
  }
  .banner_11 .smart.rellax span.line_2{
    line-height: 2.5vh;
    margin-top: 2vh;
  }
  .banner.page-section{
    z-index:inherit;
  }
  /* .banner.page-section:after {
    background: linear-gradient(0deg,  rgba(255,255,255,0) 100%, rgba(3,3,3,0.4458158263305322) 0%, rgba(0,0,0,0.32816876750700286) 9%);
          content: " ";
          position: absolute;
          top: 0;
          width: 100%;
          height: 100%;
  } */
  .banner.page-section#form{
    position: inherit;
  }

  .page-template-our_product #bannerx {
    margin-top: 12rem;
  }

  #bannerx .container .row.pc2 img{
    max-width: 80vw;
    position: absolute;
    top: -10vh;
    z-index: 7;
  }
  #bannerx .container .row.pc2 p{
    font-size: 2.3vh!important;
    line-height: 20px;
    margin: 8vh 4vw 3vh;
    text-align: center;
  }
  .xpace_video iframe {
    border-radius: 10px;
    height: 100%;
    width: 90%;
    margin: 2rem 0;
}

  .features_general{
    margin: 0;
  }
  .features_general .features_smart{
    display: flex;
    flex-wrap: wrap;
  }
  .features_general .features_smart .img-responsive{
    max-width: 60%;
    max-height: fit-content;
  }
  .features_general .features_smart p{
    width: 100%;
    font-size: 11px;
    font-weight: 700;
    margin-top: 1vh;
  }
  .features_general .features_smart p br {
    display: none;
  }
  #bannerx .container .see_action{
    margin: 3rem 0 5vh;
  }
  #banner_3 .banner .banner_13{
    height: 150px;
    background: #FD224D;
    background-attachment: inherit;
    background-size: cover;
    /* background-image: url(../images/banner-13.png); */
  }
  #banner_3 .banner .banner_13 .smart span.line_1{
    font-size: 17px;
  }
  #banner_3 .banner .banner_13 .smart span.line_2{
    line-height: 1.8vh;
    margin-top: 1vh;
  }
  #banner_3 .container{
    width: 95%;
  }
  #banner_3 .container .pc3 img{
    /* position: absolute; */
    width: 90%;
    left: 5%;
    top: -15vh;
    z-index: 7;
  }
  #banner_3.page-section .banner{
    position: inherit;
    z-index: 5;
  }
  #banner_3 .container .pc3 p{
    /* padding-top: 25vh; */
    font-size: 12px;
    line-height: 2.5vh;
    margin-bottom: 3rem;
    font-weight: 700;
  }
  .content-serv-next:after, .content-serv-prev:after {
    border: 0 !important;
  }
  #banner_3 .container .row.logos_smart{
    margin: 0;
  }
  #banner_3 .container.xscontentproc{
    width: 70%;
  }
  .estrategias-form-container ~ .space-white {
    display: none;
  }
  .xscontentproc .content-serv-next:after, .xscontentproc .swiper-container-rtl .content-serv-prev:after,.xscontentproc .content-serv-prev:after, .xscontentproc .swiper-container-rtl .content-serv-next:after{
    padding: 0.45vh 1.4vh;
    font-size: 3vh;
  }
  .banner.page-section .banner_14 .form_services{
    height: 45vh!important;
    padding: 5vh 0;
    bottom: 0;
    top: inherit;
    background: #f7f7f7;
  }
  .banner.page-section .banner_14{
    height: 70vh;
    background-image: url(../images/Fondo4mob.png);
    background-size: 100% 45%;
    background-attachment: initial;
  }
  .banner.page-section .banner_14 .form_services #hsForm_90a5f8c4-587b-4229-bad6-a16135be9a5c .hs-fieldtype-text.field.hs-form-field label{
    margin-top: 0;
  }
  .banner.page-section .banner_14 .form_services #hsForm_90a5f8c4-587b-4229-bad6-a16135be9a5c .hs_submit.hs-submit .actions input{
    height: 6vh;
    width: 6vh;
    background-color: #3192c5;
    border-radius: 50%;
    font-size: 1.5vh;
    border: 1px #3192c5 solid;
    color: white;
    margin-top: 2vh;
    position: inherit;
  }
  .xscontentproc{
    display: block;
    overflow-x: hidden;
  }
  .lgcontentproc{
    display: none;
  }
  .xpace_text .container{
    width: 90%;
    padding: 0;
  }
  .xpace_text .container ul{
    width: 100%;
    padding: 0;
  }
  .xpace_link{
    padding: 0 10vw;
  }
  .xpace_link a{
    text-align: center;
  }
  .banner.page-section .banner_11 {
    align-items: center;
    background-image: url('../images/products-xpace-banner-mobile.png')!important;
    height: 141px;
  }
  .banner.page-section .banner_11 span.line_22{
    margin-top: 2rem;
  }
  .video_xpace .container{
    width: 90%;
    margin-top: 4vh;
  }
  .xpace_text .container ul li{
    align-items: flex-start;
  }
  .xpace_text .container ul li img{
    max-width: 12vw;
    padding-right: 3vw;
  }
  #banner_3 .banner .smart{
    top: 15vh!important;
  }
  .container.title_staff{
    width: 90%;
  }
  .title_staff p:nth-child(1){
    font-size: 28px !important;
    font-weight: 700 !important;
    line-height: 35px !important;
  }
  .title_staff p:nth-child(2) {
    font-size: 28px !important;
    font-weight: 700 !important;
    margin-bottom: 0 !important;
  }
  #slider_person .swiper-button-next:after, #slider_person .swiper-container-rtl .swiper-button-prev:after,#slider_person .swiper-button-prev:after, #slider_person .swiper-container-rtl .swiper-button-next:after{
    padding: 0.45vh 1.4vh;
    font-size: 3vh;
  }
  span.dropdown-icon.close,span.dropdown-icon.open{
    font-size: 0;
  }
  .staff .container{
    margin-top: 0 !important;
    max-width: 100%;
    padding: 3rem 5% 4rem;
    text-align: left !important;
    width: 100%;
  }
  .container.title_staff {
    padding: 3rem 5% 0;
  }
  .group-staff_p {
    align-items: center;
    justify-content: space-between;
  }

  .bajar {
    padding-left: 0 !important;
    padding-top: 0!important;
  }
  .staff .staff__top-container {
    background-image: url('../images/staff-mobile-bg.png');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    color: white;
  }
  .staff .cursorClick {
    margin-bottom: 0;
  }
  .staff .staff__fondo-mobile {
    display: none;
  }
  .staff .container .cursorClick{
    height: 35vh;
  }
  .staff .staff__right .staff__image-container {
    order: 2;
  }

  .group-staff {
    flex-direction: column;
    align-items: center;
  }

  .nombreStaff-2 {
    font-size: 14px;
    font-weight: bold;
  }

  .cargoStaff-2 {
    color: #333333;
    font-size: 12px;
    font-weight: 500;
  }

  #main > div > div:nth-child(3) > div:nth-child(1) > div:nth-child(1) > div > img,#main > div > div:nth-child(3) > div:nth-child(1) > div:nth-child(2) > div > img{
    /* height: 100%; */
  }
  .group-staff_p div:nth-child(1){
    height: 27vh;
  }
  .group-staff_p div:nth-child(1) img{
    float: right;
    height: 100%;
  }
  .staff__right img.img-responsive {
    float: left !important;
  }
  .space1_text_s_p .group-staff_p div:nth-child(3){
    bottom: 6vh;
    right: 10vh;
    width: 20vw;
    padding-top: 0%!important;
  }
  .space1_text_s_p .group-staff_p div:nth-child(3).bajar-2{
    bottom: 6vh;
    left: 20px;
  }
  .bajar .img_staff_p{
    width: 10vw!important;
  }
  div#slider_person{
    margin-top: 5vh;
  }
  .site-content .content-area #home.contact-banner .header{
    padding-bottom: 5vh;
    padding-top: 5vh;
    background-position-x: -55vh;
    height: 185vh;
  }
  .header .info_contact:after{
    z-index:inherit;
  }

  .banner.page-section.contact-banner header .info_contact .row .col-md-6.contactform h1 p {
    font-size: 13px;
    text-align: center !important;
  }

  .banner.page-section.contact-banner header .info_contact .row .col-md-6.contactform h1{
    font-size: 23px !important;
  }

  .register-form form label {
    font-size: 11px;
  }

  .form_contact.register-form .register-send-button {
    display: block;
    font-size: 12px;
    padding: 0.5rem;
    width: 100%;
  }

  .services_desktop {
    display: none;
  }

  .services_mobile {
    display: block;
  }
}
@media (min-width: 640px){

	html{
		font-size: 62.5%;
	}

	.menu__list{
		height: 100vh;
		flex-direction: column;
	}

	.menu__group:nth-child(n+2){
		margin-top: 10px;
	}
}
@media (max-width: 767px) {

  .estrategias__features-container {
    padding: 0 5%;
}

.estrategiasxs .estrategias__features-container {
  height: 310px!important;
  display: flex;
  align-items: center;
  justify-content: center;
}
  .title_descr p:nth-child(1) {
   display: none;
}

  .title_know {
    line-height: 13px;
    padding: 6vh 16%;
    text-align: center;
}

  .showing {
    opacity: 1;
  }
  header.showing {
    opacity: 1;
  }
  h1 {
    font-size: 1.8rem;
    line-height: 1;
    -webkit-animation-name: nameEnter;
    animation-name: nameEnter;
    -webkit-animation-duration: 2s;
    animation-duration: 2s;
    -webkit-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
    -webkit-animation-delay: .5s;
    animation-delay: .5s;
  }
  h1 span.title {
    margin-top: 30px;
  }
  header#header  ul {
    min-height: 100vh;
    display: -webkit-box;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    flex-direction: column;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
  }
  header#header  li {
    font-size: 1.8rem;
    min-height: initial;
    margin: 20px 0;
    line-height: 1.2;
  }
  header#header  li a {
    opacity: 1;
    pointer-events: auto;
    display: block;
    text-align: center;
  }
  #four a span {
    text-align: center;
    display: block;
    width: 100%;
  }
  .products .container{
    width:90%;
  }
  .feature_c .col-md-5{
    position: relative;
    width: 100%!important;
    left: 0!important;
  }
  .objRelative-l{
    padding: 0;
    width: 100%;
    left: 0;
  }
  .objRelative-l .img-responsive{
    width: 100%;
  }
  .feature_c .feature_text.col-md-5.objAbsolute-r.aos-init.aos-animate{
    position: relative;
    width: 100%!important;
    left: 0!important;
    order: 1;
    margin-top: 0!important;
  }
  .feature_c .pull-right.objRelative-r{
    width: 100%;
    padding: 0;
    right:0;
  }
  .feature_c .pull-right.objRelative-r img{
    width: 100%;
  }
  #primary-mobile-menu > span.dropdown-icon.close{
    color:white;
  }
}
@media (min-width:601px) and (max-width:800px){
  body, html {
    overflow: auto!important;
  }
  aside.widget-area{
    justify-content: center;
    display: flex;
    flex-wrap: wrap;
  }

  #home .header {
    background-size: cover;
    background-position-y: 0;
    padding-top: 0vh;
    padding-top: 0;
    height: 195vh;
    padding-bottom: 30vh;
    background-image: url(../images/banner-startups-mobile.png)!important;
    background-attachment: inherit;
  }
  .menu-button-container{
    display:flex;
  }
  body:not(.primary-navigation-open) .site-header.has-logo.has-title-and-tagline .menu-button-container {
    position: relative;
  }
  .has-logo.has-title-and-tagline .primary-navigation > .primary-menu-container {
    position: fixed;
    transform: translateY(0) translateX(100%);
  }
  #site-navigation div.menu-button-container{
    margin: 0;
    padding: 0;
  }
  .heading .w-4 span.line_1{
    font-size: 8vh;
    line-height: 8vh;
  }
  #img-header{
    display: none;
  }
  .heading.rellax{
    height: 100%;
    margin-bottom: 4vh;
    padding-right:10%;
  }

  .header-container {
    align-items: center;
    display: flex;
    flex-direction: column;
    height: 100%;
    justify-content: flex-end;
    margin: auto;
    max-width: none;
    padding: 12rem 1rem;
    position: relative;
    width: 100%;
  }

  .header-bottom {
    max-width: none;
  }

  .header-bottom a {
    margin-top: 2.5rem;
  }

  .header-container p, .header-container button {
    display: inherit;
    margin: auto;
    text-align: left;
  }

  .w-4{
    width: 100%;
  }
  .w-6{
    width: 100%;
    padding-left: 0;
    margin-top: 5vh;
  }
  .w-6 img{
    width: 100%;
  }
  .banner.page-section .txt_botton{
    bottom: 0vh;
    position: absolute;
    display: flex;
    flex-wrap: wrap;
    padding: 4vh 10%;
    z-index: 9;
  }
  .w-7{
    text-align: center;
    width: 100%;
    padding: 0;
  }
  .w-3{
    display: flex;
    flex: auto;
    justify-content: center;
    max-width: inherit;
    width: 100%;
  }
  .read_more.text-align-start{
    margin-top: 1vh;
  }
  .title_know .line_1{
    line-height: 6vh;
  }
  .title_know .line_2{
    line-height: 7vh;
  }
  .galery_know{
    flex-wrap: wrap;
    padding-bottom: 0;
  }
  .knowledge{
    padding-bottom: 0;
  }
  #heateor_sss_follow-2{
    justify-content: center;
  }
  #media_image-2{
    text-align: center;
  }
  .galery_know .w-3{
    margin-bottom: 2vh;
  }
  .body_modal {
    position: absolute;
    width: 90%;
    left: 0;
    right: 0;
    margin: 0 auto;
    top: 29vh;
    text-align: center;
  }
  .body_modal iframe {
    width: 100%;
    padding: 2vw 5vw;
    height: 55vw;
    background: #0093c5;
    border-radius: 15px;
  }
  .body_modal span {
    background: #fff;
    position: absolute;
    right: 0;
    font-weight: bold;
    padding: 1px 7px;
    border-radius: 21px;
    font-size: 15px;
    cursor: pointer;
  }
  .idioma_mobile li.espa img, .idioma_mobile li.english img {
    max-width: 6.9vh;
    padding: 4px;
  }
  .idioma_mobile li {
    /* width: 10%; */
    display: inline-block;
  }

  .idioma_mobile {
      text-align: center;
      margin-top: 10vh;
  }

  .idioma_mobile a {
      padding: 0!important;
  }
  .idioma_mobile li.espa:before{
    display: none;
  }
  .menu{
    display: none;
  }
  /* .flexible{
    width: 50%;
    float: left;
    height: 100%;
  } */
  .flexible{
    display: none;
  }
  .flexiblexs{
    display: none;
  }
  .content_banner_2 .flexiblexs .title_being p:nth-child(1){
    font-size: 5vh;
    line-height: 5vh;
    text-align: end;
    font-weight: 600;
  }
  .content_banner_2 .flexiblexs .title_being p:nth-child(2){
    font-size: 2vh;
    width: 70%;
    text-align: end;
    margin-left: 30%;
    line-height: 3vh;
    margin-top: 1vh;
    font-weight: 600;
  }
  /* #banner_2{
    width: 50%;
    overflow-y: hidden;
    float: right;
  } */
  #banner_2xs h1{
    width: 100%;
    overflow-y: hidden;
  }
  #banner_2xs h1 span.name img{
  width: 70%;
  }
  .content_banner_2{
    display: flex;
    align-items: center;
    margin: 5vh 0;
  }
  #banner_2{
    display: none;
  }
  #banner_2xs{
    display: block;
    /* padding-right: 0; */
  }
  .showing{
    height: auto;
  }
  #countries .content-countries .countries{
    background-color: #3192c5;
    border-radius: 50%;
    color: white;
    width: 70vw!important;
    height: 70vw;
    position: absolute;
    left: 15%;
    top: 5%;
    align-items: center;
    display: flex;
  }
  .banner_2xs{
    display: block;
  }
  .banner_2xs{
    background: url(../images/home-flexible-banner.png);
    width: 100%;
    height: 40vh;
    text-align: center;
    opacity: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    background-size: cover;
  }
  .banner_2xs p {
    text-align: center;
    color: #454545;
  }
  .banner_2xs span {
    display: block;
    margin: 0;
    text-align: center;
    font-size: 7vh;
    line-height: 7vh;
    color: white;
    text-shadow: 1px 1px 1px #000;
  }
  .banner_2xs span:nth-child(2) {
      font-size: 3vh;
  }
  .content-img-serv{
    display: none;
  }
  .content-img-servxs{
    display: block;
    padding: 0;
  }
  .services .code.content-serv{
    padding: 5vh 16vw 5vh 10vw;
  }
  .text_service .title_service p{
    line-height: 3.3vh;
    margin-bottom: 2vh;
    font-size: 3.3vh;
  }
  .text_service .title_service{
    padding-left: 0;
  }
  .read-more{
    padding-top: 2vh;
    text-align: left;
  }
  .image_service img{
    margin-bottom: 1vh;
  }
  .scale-inv{
    transform: scaleX(-1);
  }
  .services .code.content-serv .row{
    align-items: flex-end;
  }
  p.description_service{
    text-align: initial;
  }
  .services{
    position: relative;
  }
  #services{
    /* display: none; */
  }
  #servicesxs{
    display: block;
    margin: 0 5vw;
    overflow-x: hidden;
  }
  .heading_1 span.line_1{
    font-size: 6vh;
  }
  .heading_1 span.line_2{
    font-size: 3vh;
  }
  .banner.page-section .banner_3{
    height: 70vh;
    background-image: url(../images/banner_02mob.png);
    background-size: 100% 45%;
    background-attachment: initial;
  }
  .banner.page-section .banner_3 .form_services{
    height: 40vh!important;
    padding: 5vh 0;
    bottom: 0;
    top: inherit;
    background: #f7f7f7;
  }
  #hsForm_90a5f8c4-587b-4229-bad6-a16135be9a5c{
    display: flex!important;
    flex-wrap: wrap;
  }
  .hs_mobilephone.hs-mobilephone.hs-fieldtype-text.field.hs-form-field{
    width: 80%;
  }
  .banner_4{
    height: 30vh;
    background-attachment: revert;
  }
  .banner_2{
    display:none;
  }
  .primary-navigation-open .has-logo.has-title-and-tagline .primary-navigation > .primary-menu-container {
    transform: translateX(0) translateY(0);
  }
  .primary-navigation > .primary-menu-container {
    height: 100vh;
    z-index: 499;
    overflow-x: hidden;
    overflow-y: auto;
    border: 2px solid transparent;
  }
  .primary-navigation > div > .menu-wrapper {
    padding-bottom: 100px;
  }
  .heading_2{
    margin: 0 14vw;
    background: #0000009e;
    padding: 0 4vw;
  }
  .heading_2 span.line_1{
    font-size: 4vh;
    margin-top: 8vh;
  }
  .heading_2 span.line_2{
    font-size: 2vh;
    line-height: 2vh;
  }
  .read_more a{
    font-size: 1.7vh;
    padding: 1.5vh 1vh;
    z-index:9;
  }
  .great{
    height: 20vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .title_great{
    padding: 0;
  }
  .title_great p:nth-child(1){
    font-size: 4vh;
    line-height: 4vh;
  }
  .title_great p:nth-child(2){
    font-size: 3vh;
  }
  .slide{
    padding: 0 3vw;
    height: 18vh
  }
  .marcas{
    flex-wrap: wrap;
    border-bottom: none;
    height: auto;
  }
  .slide img{
    max-width: 40vw;
  }
  .conte_slide0{
    width: 70%;
    padding: 0 4vw;
    height: auto;
    margin: auto;
  }
  .description{
    padding: 0 4%;
    text-align: start;
  }
  .conte_slide0 img{
    max-width: 30vw;
  }
  .header{
    background-image: url(../images/banner_01mob.png);
  }
  .heading span.line_2{
    font-size: 5vh;
  }
  .txt_botton p:nth-child(1){
    font-size: 5vh;
    line-height: 5vh;
  }
  .txt_botton p:nth-child(2){
    font-size: 3vh;
    line-height: 3vh;
  }
  #home > header > div > div.w-6 > iframe{
    width: 100%;
    z-index: 9;
  }
  .banner.page-section .banner_3 .form_services #hsForm_90a5f8c4-587b-4229-bad6-a16135be9a5c .hs-fieldtype-text.field.hs-form-field label{
    margin-top: 0;
  }
  #main.site-main #countries{
    height: 90vh;
    background: #f7f7f7;
    overflow-x: hidden;
  }
  .content-countries{
    height: 30vh;
    margin: 20vh 0 30vh;
    background-image: url(../images/retos-locales-bg.png);
    background-size: 100% 100%;
    -webkit-box-pack: center;
    justify-content: center;
    width: 100%;
    position: relative;
    background-repeat: no-repeat;
    background-attachment: inherit;
  }
  .text-contries{
    position: relative;
    color: black;
    top: -60%;
    left: inherit;
    text-align: center;
    /* font-size: 2.4vh; */
    padding: 0 15%;
    max-width: none;
  }
  .text-contries h1{
    font-size: 5vh;
    line-height: 5vh;
    text-align: center;
  }
  .text-contries h3{
    font-size: 4vh;
  }
  .text-contries p{
    font-size: 2vh;
  }
  .info-country h1{
    font-size: 5vh;
  }
  .info-country h3{
    font-size: 3.5vh;
    margin-top: 1.5vh;
  }
  .info-country p:nth-child(3){
    font-size: 2vh;
  }
  .info-country p:nth-child(4){
    font-size: 1.5vh;
  }
  .country{
    display: none;
  }
  .categoria {
    text-align: left;
  }
  .info-country{
    display: block;
    text-align: initial;
  }
  .content-countries .content-countriessxs{
    display: block;
  }
  .content-countriess{
    display: none;
  }
  .banner_10{
    background-image: url(../images/Fondo1mob.png);
    background-attachment: inherit;
    background-size: auto;
    height: 45vh;
    margin-bottom: 0;
  }
  .banner_11 .smart{
    padding: 0 4vw;
    font-weight: 500;
    position: initial;
    text-shadow: 1px 1px 1px #000;
    max-width: 100%;
  }
  .banner_11 .smart img{
    max-width: 100%;
  }
  .smart span.line_1{
    font-size: 5vh;
    font-weight: 600;
  }
  .smart span.line_2{
    font-size: 2.5vh;
  }
  #banner_22 .container{
    width: 80%;
    padding: 0;
  }
  #banner_22 .container.logo-texto img{
    width: 55vw!important;
  }
  #banner_22 .container.logo-texto p{
    font-size: 2vh;
    margin: 3vh 4vw!important;
    width: auto;
    text-align: initial;
  }
  .video_smart img{
    width: 100%;
  }
  .see_action a{
    font-size: 1.7vh;
    padding: 1.5vh 1vw;
    letter-spacing: 2px;
    display: flex;
    justify-content: center;
    width: max-content;
    margin: auto;
  }
  .see_action i{
    font-size: 2.5vh;
    margin-left: 1vw;
  }
  .banner_11{
    height: 40vh;
    margin-bottom: 0;
    background-attachment: inherit;
    background-size: cover;
    background-image: url(../images/banner-11.png);
    align-items:flex-end;
  }
  .banner_11 .smart.rellax span.line_1{
    font-size: 3.3vh;
  }
  .banner_11 .smart.rellax span.line_2{
    line-height: 2.5vh;
    margin-top: 2vh;
  }
  #home.banner.page-section{
    position: relative;
    z-index:inherit;
  }
  #bannerx .container .row.pc2 img{
    max-width: 80vw;
    position: absolute;
    top: -10vh;
    z-index: 7;
  }
  #bannerx .container .row.pc2 p{
    font-size: 2.3vh!important;
    margin: 8vh 4vw 3vh;
  }
  #bannerx .container .features_smart p{
    font-weight: 500;
  }
  .features_general{
    margin: 0;
  }
  .features_general .features_smart{
    display: flex;
    flex-wrap: wrap;
  }
  .features_general .features_smart .img-responsive{
    max-width: 60%;
    max-height: fit-content;
  }
  .features_general .features_smart p{
    width: 100%;
    font-size: 2.5vh;
    margin-top: 1vh;
  }
  #bannerx .container .see_action{
    margin: 0 0 5vh;
  }
  #banner_3 .banner .banner_13{
    height: 40vh;
    background-attachment: inherit;
    background-size: cover;
    background-image: url(../images/banner-13.png);
  }
  #banner_3 .banner .banner_13 .smart span.line_1{
    font-size: 3.5vh;
  }
  #banner_3 .banner .banner_13 .smart span.line_2{
    line-height: 2.5vh;
    margin-top: 1vh;
  }
  #banner_3 .container{
    width: 95%;
  }
  #banner_3 .container .pc3 img{
    position: absolute;
    width: 90%;
    left: 5%;
    top: -15vh;
    z-index: 7;
  }
  #banner_3.page-section .banner{
    position: inherit;
    z-index: 5;
  }
  #banner_3 .container .pc3 p{
    padding-top: 25vh;
    font-size: 2.1vh;
    font-weight: 600;
  }
  #banner_3 .container .row.logos_smart{
    margin: 0;
  }
  .w-10 span:nth-child(1){
    padding-right: 0;
  }
  .w-10 span:nth-child(2){
    padding-left: 0;
  }
  .banner.page-section .banner_14 .form_services{
    height: 40vh!important;
    padding: 5vh 0;
    bottom: 0;
    top: inherit;
    background: #f7f7f7;
  }
  .knowledge .w-3 .card .img_content{
    height: 30vh;
  }
  .banner.page-section .banner_14{
    height: 70vh;
    background-image: url(../images/Fondo4mob.png);
    background-size: 100% 45%;
    background-attachment: initial;
  }
  .banner.page-section .banner_14 .form_services #hsForm_90a5f8c4-587b-4229-bad6-a16135be9a5c .hs-fieldtype-text.field.hs-form-field label{
    margin-top: 0;
  }
  .banner.page-section .banner_14 .form_services #hsForm_90a5f8c4-587b-4229-bad6-a16135be9a5c .hs_submit.hs-submit .actions input{
    height: 6vh;
    width: 6vh;
    background-color: #3192c5;
    border-radius: 50%;
    font-size: 1.5vh;
    border: 1px #3192c5 solid;
    color: white;
    margin-top: 2vh;
    position: inherit;
  }
  .xscontentproc{
    display: block;
    overflow-x: hidden;
  }
  .lgcontentproc{
    display: none;
  }
  .xpace_text .container{
    width: 90%;
    padding: 0;
  }
  .xpace_text .container ul{
    width: 100%;
    padding: 0;
  }
  .xpace_link{
    padding: 0 10vw;
  }
  .xpace_link a{
    text-align: center;
  }
  .banner.page-section .banner_11{
    align-items: center;
  }
  #banner_3 .banner .smart{
    top: 15vh!important;
  }
  .container.title_staff{
    width: 90%;
  }
  .title_staff p:nth-child(1){
    font-size: 8vh;
  }
  .staff .container{
    width: 90%;
  }
  .staff .container .cursorClick{
    height: 45vh;
  }
  #main > div > div:nth-child(3) > div:nth-child(1) > div:nth-child(1) > div > img,#main > div > div:nth-child(3) > div:nth-child(1) > div:nth-child(2) > div > img{
    height: 100%;
  }
  .group-staff_p div:nth-child(1){
    height: 35vh;
  }
  .group-staff_p div:nth-child(1) img{
    height: 100%;
  }
  .space1_text_s_p .group-staff_p div:nth-child(3){
    width: 20vw;
    padding-top: 0%!important;
  }
  .bajar .img_staff_p{
    width: 10vw!important;
  }
  div#slider_person{
    margin-top: 5vh;
  }
  .site-content .content-area #home.contact-banner .header{
    padding-bottom: 5vh;
    padding-top: 5vh;
    background-position-x: -55vh;
    height: 150vh;
    background-image: url(../images/contact-bg.webp)!important;
  }
  .header .info_contact:after{
    z-index:inherit;
  }
  .feature_c .col-md-5 {
    position: relative;
    width: 100%!important;
    left: 0!important;
  }
  .feature_c .pull-right.objRelative-r {
    width: 100%;
    padding: 0;
    right: 0;
  }
  .products .container {
    width: 90%;
  }
  .objRelative-l {
    padding: 0;
    width: 100%;
    left: 0;
  }
  .objRelative-l .img-responsive {
    width: 100%;
  }
  .feature_c .feature_text.col-md-5.objAbsolute-r.aos-init.aos-animate {
    position: relative;
    width: 100%!important;
    left: 0!important;
    order: 1;
    margin-top: 0!important;
  }
  .feature_c .pull-right.objRelative-r img {
    width: 100%;
  }
}

@media (min-width:2000px){
  .header-container {
    margin-top: 5rem;
    max-width: 30vw;
  }
  
  .header-container h1 {
    font-size: 3.5vw;
  }
  
  .header-container h1 span {
    font-size: 2.5vw;
  
  }
  
  .header-container p {
    font-size: 1.5vw;
    line-height: 1.5vw;
  }
  
  .header-unicornio {
    font-size: 5.5vw !important;
  }
  
  .header-container button {
    margin-top: 2rem;
    padding: 1rem 1.5rem;
  
  }

  .header-bottom a {
    display: block;
    font-size: 1.3vw;
    margin-top: 2.5rem;
  }

  .header-bottom a button {
    border-radius: 30px;
    padding: 2rem !important;
  }

}


  .widget-area {
    display: flex !important;
    justify-content: space-between !important;
}

.widget-area:after {
  display: none !important;
}

.widget-area .heateor_sss_follow_ul {
  display: flex;
  gap: 15px;
}

.swiper-button-next, .swiper-button-prev {
  color: #333333 !important;
  border:none !important;
}

.swiper-button-next:after, .swiper-button-prev:after {
  background: white;
  border: none !important;
}


@media (max-width: 600px ) {

  .title_know .line_1{
  display: inline;
  }
  .title_know .line_2{
    display: inline;
  }
  .title_descr p:nth-child(1){
    display: none
}

.header-container button {
  margin-top: 0;
}

.industria-logos-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
  justify-content: center;
}

.industria-logo-item {
  justify-content: center;
}



.read_more {
  margin-top: 2.5vh;
  text-align: end;
}

.services.services_about .code:nth-child(1) {
  margin-top: 0;
  padding-top: 0!important;
}
.estrategias__feature_home p {
  display: none;
}

}

#banner_2.lazy, .banner_4.lazy, .content-countries.lazy, .estrategias-form-container.lazy, .banner-12.lazy, .banner_11.lazy, .banner_13.lazy, .estrategias-form-container.lazy {
  background-image: none;
  background-color: #F1F1FA;
}

.scrollmagic-pin-spacer {
  margin: 0 !important;
}

.site-main > * {
margin-top: 0 !important;

.applications-container footer {
  background-color: #0093c5;
  color: white;
  padding: 3rem 3rem 9rem;
}

.applications-container footer h3 {
  width: 100%;
  font-size: 4rem;
  font-weight: 700;
  margin: 0;
  margin-bottom: 4rem;
  text-align: left;
}

.applications-container footer div {
  align-items: center;
  display: flex;
  max-width: 500px;
  width: 100%;
}

.applications-container footer a {
  color: white;
  opacity: 0.8;

  transition: 200 ms ease all;
}

.applications-container footer a:hover {
  text-decoration: none;
  opacity: 0.6;
}

.applications-container footer a span {
  color: white;
  margin-right: 5px;
  opacity: 0.8;
}


.applications-container footer button {
  align-items: center;
  color: #0093c5 !important;
  display: flex;
  font-weight: 600;
  gap: 1rem;
  justify-content: space-between;
  max-width: 260px;
  padding: 1rem 2rem;
  width: 100%;

  transition: 200ms ease all;
}

.applications-container footer button:hover {
  background-color: white;
  color: #0093c5 !important;
  opacity: 0.8;
}

.applications-container footer button span {
  font-size: 3rem;
}

.register-send-button:hover {
  border: 0 !important;
  opacity: 0.8;
}

body, h1, h2, h3, h4, a, p, span, li, strong, span, li, ol, ul, table, div, section, button{
  font-family: 'Montserrat', sans-serif;
}
.menu-item-43 {
  border-left: solid #ffffff6e 1px;
}
.menu-item-43 a,.menu-item-45 a,.menu-item-46 a{
  color: transparent!important;
}
#mobmenuright li a{
  position: relative;
}
span.dropdown-icon.close {
    color: #333233!important;
    text-shadow: none!important;
}
span.dropdown-icon.close svg.svg-icon {
    color: #fff!important;
}
.menu-item-43 a::before{
  content: url('../images/spain.png');
  display: block;
  width: 80%;
  height: 80%;
  position: absolute;
  transform: scale(0.4);
  top: -2px;
  left: -2px;
}
.menu-item-45 a::before{
  content: url('../images/united-states-of-america.png');
  display: block;
  width: 80%;
  height: 80%;
  position: absolute;
  transform: scale(0.4);
  top: -2px;
  left: -2px;
}
.menu-item-46 a::before{
  content: url('../images/brasil.png');
  display: block;
  width: 80%;
  height: 80%;
  position: absolute;
  transform: scale(0.4);
  top: -2px;
  left: -2px;
}
.sub-menu-toggle{
  display: none!important;
}
.primary-navigation a:hover{
  text-decoration: none !important;
  text-decoration-style: unset !important;
}
.banner.page-section{
  position: relative;
  z-index: 5;
}
.modal_credenciales {
    display: block;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
    height: 100%;
    background: #0000007d;
}
.body_modal {
    position: absolute;
    width: 55%;
    left: 0;
    right: 0;
    margin: 0 auto;
    /* background: #0093c5;
    border-radius: 21px; */
    top: 11vw;
    text-align: center;
}

.body_modal span {
    background: #fff;
    position: absolute;
    right: 0;
    font-weight: bold;
    padding: 5px 10px;
    border-radius: 21px;
    font-size: 17px;
    cursor: pointer;
}
.body_modal iframe {
    width: 100%;
    padding: 0vw 2vw;
    height: 34vw;
    background: #0093c5;
    border-radius: 15px;
}
.header {
    -webkit-box-align: center;
    align-items: center;
    background-image: url('../images/banner-startups.webp');
    background-size: cover;
    background-position: center;
    display: -webkit-box;
    display: flex;
    height: 120vh;
    position: relative;
    overflow: hidden;
    -webkit-box-pack: center;
    justify-content: start;
    width: 100vw;
    position: relative;
    /* background-size: 100% 100%; */
    background-repeat: no-repeat;
    /* background-attachment: fixed; */
    max-width: 100%!important;
}

.header-container {
  color: #055A67;
  margin-left: 60%;
  margin-right: 0;
  margin-top: 5rem;
  max-width: 412px;
}


.header-container h1 {
  font-size: 4rem;
  font-weight: 700;
  text-align: left!important;
  width: 100%;
}

.header-container h1 span {
  display: block;
  font-size: 3rem;
}

.header-container p {
  font-size: 1.6rem;
  font-weight: 500;
  line-height: 1.9rem;
}

.header-container p span {
  font-weight: 700;
}

.header-unicornio {
  color: white;
  font-size: 7rem !important;
  font-weight: 700 !important;
}

.header-container button {
  background-color: #E18BFF !important;
  border: none;
  border-radius: 20px;
  color: white !important;
  font-weight: 600;
  margin-top: 2rem;
  padding: 1rem 1.5rem;

  transition: 300ms ease opacity;
}

.header-container button:hover {
  border: none;
  opacity: 0.8;
}

.services.services_about .code:nth-child(1) {
    margin-top: 0;
}
.services.services_about .code:nth-child(4) {
    margin-bottom: 5rem !important;
}
.services.services_about .container .text_service {
    padding: 28vh 3vh;
}

.services_mobile {
  display: none;
}
</style>
