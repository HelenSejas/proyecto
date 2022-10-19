<link href="<?php echo base_url(); ?> assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />
 <link href="<?php echo base_url(); ?>assets/css/apps/notes.css" rel="stylesheet" type="text/css" />
 <link href="<?php echo base_url(); ?>assets/css/forms/theme-checkbox-radio.css" rel="stylesheet" type="text/css" />
 <link href="<?php echo base_url(); ?>plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>plugins/pricing-table/css/component.css" rel="stylesheet" type="text/css" />
<nav >
   
           <div class="topbar-nav header navbar" role="banner">
            <nav id="topbar" style="background:url(<?php echo base_url(); ?>assets/img/fondo2.jfif);">

                <ul class="list-unstyled menu-categories" id="topAccordion">

                    <li class="menu single-menu">
                    <div> <?php echo form_open_multipart('estudiante/indexEstudiante'); ?>
           <button type="submit" class="btn btn-outline-warning">Atras</button>
           <?php echo form_close(); ?>

</div></li><li class="menu single-menu">
                            <div class="mx-2">
                                
                                 <?php echo form_open_multipart('inicio/index'); ?>
           <button type="submit" class="btn btn-outline-warning">Inicio</button>
           <?php echo form_close(); ?>
                            </div></li>
                            

                    <li class="menu single-menu active">
                        <a href="#app" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                              
                                <span>Pagos</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="app" data-parent="#topAccordion">
                            <li>
                                 <?php echo form_open_multipart('usuarios/indexInicio'); ?>
                                 <button type="submit" class="btn btn-outline-warning">Mesualidades</button>
                                 <?php echo form_close(); ?>
                            </li>
                            <li>
                                   <?php echo form_open_multipart('usuarios/indexSesion'); ?>
                                 <button type="submit" class="btn btn-outline-warning">Pago por sesion</button>
                                 <?php echo form_close(); ?>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="menu single-menu">
                        <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                <span>Equipos</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="components" data-parent="#topAccordion">
                            <li>  <?php echo form_open_multipart('curso/indexEquipo'); ?>
                        <button type="submit" class="btn btn-outline-warning">ver Equipo</button>
                        <?php echo form_close(); ?></li>
                        </ul>
                    </li>

                    <li class="menu single-menu">
                        <a href="#uiKit" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                                <span>Poleras</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="uiKit" data-parent="#topAccordion">
                            <li>
                                <a href="ui_alerts.html">Ver precios</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu single-menu">
                        <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                                <span>Estudiantes</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="tables"  data-parent="#topAccordion">
                            <li>
                          <?php echo form_open_multipart('estudiante/index'); ?>
                        <button type="submit" class="btn btn-outline-warning">Ver Estudiantes</button>
                        <?php echo form_close(); ?>
                            </li>
                        </ul>
                    </li>

                    <li class="menu single-menu">
                        <a href="#page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                                <span>Empleados</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="page"  data-parent="#topAccordion">
                            <li>
                               <?php echo form_open_multipart('entrenador/index'); ?>
                        <button type="submit" class="btn btn-outline-warning">ver</button>
                        <?php echo form_close(); ?>
                            </li>
                            
                        </ul>
                    </li>

                    <li class="menu single-menu">
                        <a href="#more" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <span>sesion</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="more" data-parent="#topAccordion">
                            <li>
                        <?php echo form_open_multipart('usuarios/logout'); ?>
                        <button type="submit" class="btn btn-outline-warning">Cerrar sesion</button>
                        <?php echo form_close(); ?>
                            </li>

                         
                        </ul>
                    </li>
                </ul>
            </nav>
</nav>
  <div class="main-container" id="container" >

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN CONTENT AREA  -->
   
                    <div class="col-lg-12 layout-spacing ">
          
                        <div class="statbox widget box box-shadow my-5">
                           
                                <h4 class="text-left text-center">CURSOS</h4>
                                <div class="container">   
                                   <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#miModalC">Crear Nuevo Curso</button>  
                                   <div class="btn-group" role="group" aria-label="Basic example">
                                    <?php echo form_open_multipart('curso/inactivos'); ?>
          <button class="btn btn-secondary ">Ver cursos eliminados</button>
        <?php echo form_close(); ?>                  
   
    <button type="button" class="btn btn-secondary ">Mostrar horarios</button>
    <button type="button" class="btn btn-secondary">Crear lista</button>
</div>                               
                                    <div id="pricingWrapper" class="row">
                                        <?php
foreach ($curso->result() as $row) {
?>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="card stacked mt-2" style="background:url(<?php echo base_url(); ?>assets/img/adorno.jfif);">
                                                <div class="card-header pt-0">
                                                    
                                                    <h3 class="card-title mt-3 mb-1"><?php echo $row->curso;?></h3>
                                                     <img src="<?php echo base_url(); ?>assets/img/muriel.jpg" width=110> 
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-group list-group-minimal mb-3">
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">Cantidad: <?php echo $row->cantidad;?>
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">Horario: <?php echo $row->horario;?>
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center"><?php echo $row->dia;?>
                                                        </li>
                                                        <?php echo form_open_multipart('curso/modificar'); ?>
          <input type="hidden" name="idCurso" value="<?php echo $row->idCurso; ?>">
          <div class="d-grid gap-2 my-2">
          <input type="submit" name="buttonM" value="Modificar" class="btn btn-info"></div>
          <?php echo form_close(); ?>
          <div class="d-grid gap-2 my-2">
          <?php echo form_open_multipart('curso/deshabilitarbd'); ?>
          <input type="hidden" name="idCurso" value="<?php echo $row->idCurso;?>">
  </div>
             <button class="mr-2 btn btn-info">Eliminar</button>
         
        <?php echo form_close(); ?>
        <?php echo form_open_multipart('curso/lista'); ?>
          <input type="hidden" name="idCurso" value="<?php echo $row->idCurso;?>">
  <div class="d-grid gap-2 my-2">
             <button class="mr-2 btn btn-warning">Ver lista</button>
         
        <?php echo form_close(); ?>
        <button class="btn btn-primary">crear pdf lista</button>
    </div>
                                                    </ul>
                                                   
                                                </div>
                                            </div>
                                        </div> 
                                            <?php
}
?>                         
                                    </div>

                                </div>
                            </div>
                        </div>
<div class="modal" id="miModalC" style="background:url(<?php echo base_url(); ?>assets/img/adorno.jfif);">
    <div class="modal-dialog">
        <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title">Nuevo Curso</h5>
                   <button class="btn btn-close" data-bs-dismiss="modal"></button> 
            </div>
            <div class="modal-body">
   <?php echo form_open_multipart('estudiante/agregarbd'); ?>

    <legend>Datos</legend>
    <label>Curso:</label>
    <input type="text" class="form-control" name="nombre" placeholder="Ingrese nombre de estudiante"><br>
    <label>Cantidad:</label>
    <input type="text" class="form-control" name="primerApellido" placeholder="Ingrese primer Apellido">
    <label>Horario:</label>
    <input type="text" class="form-control"  name="segundoApellido" placeholder="Ingrese Segundo Apellido" value=" "><br>
    <label>Fecha Creacion:</label>
    <input type="date" name="edad" class="form-control" placeholder="Ingrese edad de estudiante">
    <label>Dia:</label>
    <input type="tel" class="form-control" name="nroCelular" placeholder="Ingrese dia">
    <div class="d-grid gap-2 my-4">
<button type="submit" class="btn btn-info">Agregar Curso</button>
</div >
    
       <?php echo form_close(); ?>
            </div> 
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
    </div>
    </div>


                    </div>

    <script src="<?php echo base_url(); ?> assets/js/libs/jquery-3.1.1.min.js"></script>
