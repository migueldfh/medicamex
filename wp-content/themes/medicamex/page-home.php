<?php

/**
* Template Name: Home Page
*
* @package Medicamex
* @since 1.0.0
*/
get_header();
?>
  <div class="skinny row">
    <img src="http://localhost:8080/medicamex/wp-content/uploads/2019/04/head.jpg" class="img-responsive" alt="">
  </div>
  <div class="skinny row" style="background-color: #f4f4f4">
    <div class="container-fluid">
      <div style="height:50px"></div>
      <div class="col-md-6">
        <div style="height:100px"></div>
        <h3>Bienvenidos a Medicamex</h3>
        <h6 style="color: #00a384">NUESTRA EXPERIENCIA NOS RESPALDA</h6>
        <p>Medicamex, S.A. de C.V., es una empresa pionera en la distribución de dispositivos médicos con un especial enfoque en el área cardiovascular. Fundada en 1983 con el objetivo de dar servicio a la comunidad médica en el área de servicios de salud, mediante la distribución de productos, instrumentales y equipo médico de alta calidad.</p>
      </div>
      <div class="col-md-6">
        <img src="http://localhost:8080/medicamex/wp-content/uploads/2019/04/doctors.jpg" class="img-responsive" alt="">
      </div>
    </div>
  </div>
  <div class="skinny row">
    <div class="container">
      <div class="col-md-12 text-center">
        <div style="height:50px"></div>
        <h3>Nosotros</h3>
        <h6 style="color: #00a384">DISTRIBUIMOS LO MEJOR EN PRODUCTOS MÉDICOS</h6>
        <ul class="nav nav-tabs" role="tablist" id="myTabs">
          <div class="alt-2"></div>
          <li role="presentation" class="active title">
            <a href="#home" aria-controls="home" role="tab" data-toggle="tab"><h4>Acerca de Medicamex</h4></a>
          </li>
          <li role="presentation" class="title">
            <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><h4>Nuestra Misión</h4></a>
          </li>
          <li role="presentation" class="title">
            <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><h4>Visión y Valores</h4></a>
          </li>
          <li role="presentation" class="title">
            <a href="#include" aria-controls="include" role="tab" data-toggle="tab"><h4>Gestion de Calidad</h4></a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="alt-2"></div>
          <div role="tabpanel" class="tab-pane active" id="home">
            <div class="skinny row">
              <div class="col-md-6">
                <div style="height:50px"></div>
                <img src="http://localhost:8080/medicamex/wp-content/uploads/2019/04/acerca.jpg" alt="">
              </div>
              <div class="col-md-6 text-left">
                <div style="height:25px"></div>
                <h5>Brindamos servicio a la comunidad médica</h5>
                <p>Fundada en 1983 con el objetivo de dar servicio a la comunidad médica en el área de los servicios de salud, contando con oficinas foráneas en la Ciudad de México, D.F y Guadalajara, Jal. Las actividades comerciales se centran en la distribución de dispositivos médicos de alta especialidad, instrumental y equipo médico.</p>
                <p>El mercado que se maneja a nivel nacional en ciertas lineas de productos y con representantes en las áreas más importantes del país, así como subdistribuidores para ciertas regiones a nivel nacional.</p>
                <p>Como parte del servicio al cliente contamos con especialistas clínicos en Marcapasos, Angioplastía, Terapia Endovascular, Cirugía Cardiovascular, Cirugía Laparoscopia, Oftalmología, entre otras áreas.<br>Actualmente manejamos diversas lineas como importadores primarios, entre las que se destacan W.L GORE & ASSOCIATES INC., BOSTON SCIENTIFIC y MAQUET CARDIOVASCULAR.</p>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="profile">

          </div>
          <div role="tabpanel" class="tab-pane" id="messages">

          </div>
          <div role="tabpanel" class="tab-pane" id="include">

          </div>
        </div>
      </div>
    </div>
    <div style="height:50px"></div>
  </div>
  <div class="skinny row">
    <img src="http://localhost:8080/medicamex/wp-content/uploads/2019/04/productos.jpg" alt="" class="img-responsive">
  </div>
  <div class="skinny row">
    <div class="container">
      <div class="col-md-12 text-center">
        <div style="height:50px"></div>
        <h3>Principales socios</h3>
        <img src="http://localhost:8080/medicamex/wp-content/uploads/2019/04/socios.jpg" alt="">
      </div>
    </div>
    <div style="height:50px"></div>
  </div>
  <div class="skinny row">
    <img src="http://localhost:8080/medicamex/wp-content/uploads/2019/04/contacto.jpg" alt="" class="img-responsive">
  </div>
  <?php
    get_footer(); 
  ?>
