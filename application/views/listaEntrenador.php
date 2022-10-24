 <link href="<?php echo base_url(); ?>plugins/pricing-table/css/component.css" rel="stylesheet" type="text/css" />
 <link href="<?php echo base_url(); ?>assets/css/apps/todolist.css" rel="stylesheet" type="text/css" />
<nav class="nav navbar-dark bg-dark ">
    <div class="main-container" id="container"  style="background:url(<?php echo base_url(); ?>assets/img/fondonegro.jfif);">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

 <div class="header-container">
        <header class="header navbar navbar-expand-sm">

            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

            <div class="nav-logo align-self-center">
                <a class="navbar-brand" href="index.html"><img alt="logo" src="<?php echo base_url(); ?>assets/img/logo.jpg" > <span class="navbar-brand-name">VICTOR MURIEL</span></a>
            </div>

            <ul class="navbar-item flex-row nav-dropdowns">

                <li class="nav-item dropdown user-profile-dropdown order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="user-profile-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <img src="<?php echo base_url(); ?>assets/img/usuario.png" class="img-fluid" alt="admin-profile">
                            <div class="media-body align-self">
                                <h6><span>Hi,</span>Usuario <?php echo $this->session->userdata('usuario'); ?> </h6>
                            </div>
                        </div>
                     
                    </a>
                </li>
            </ul>
        </header>
    </div>

<!--  BEGIN TOPBAR  -->
        <div class="topbar-nav header navbar" role="banner">
            <nav id="topbar" style="background:url(<?php echo base_url(); ?>assets/img/fondo2.jfif);">

                <ul class="list-unstyled menu-categories" id="topAccordion">
<li class="menu single-menu"> <?php echo form_open_multipart('estudiante/indexEstudiante'); ?>
           <button type="submit" class="btn btn-outline-warning">Atras</button>
           <?php echo form_close(); ?></li>
                    <li class="menu single-menu">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle autodroprown">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Cursos</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="dashboard" data-parent="#topAccordion">
                        <li>
                        <a href="<?php echo base_url(); ?>index.php/curso/index">Ver Cursos</a>
                        </li>
                        </ul>
                    </li>

                    <li class="menu single-menu active">
                        <a href="#app" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                              
                                <span>Pagos</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="app" data-parent="#topAccordion">
                            <li><a href="<?php echo base_url(); ?>index.php/usuarios/indexInicio">Mensualidad</a>
                            </li>
                            <li>
                                   <a href="<?php echo base_url(); ?>index.php/usuarios/indexSesion">pago por sesion</a>
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
                            <li>  <a href="<?php echo base_url(); ?>index.php/curso/indexEquipo">Ver Equipos</a></li>
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
                            <li><a href="<?php echo base_url(); ?>index.php/curso/indexUniforme">Ver Uniformes</a></li>
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
                           <a href="<?php echo base_url(); ?>index.php/estudiante/indexEstudiante">Ver Estudiantes</a>
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
                                <a href="<?php echo base_url(); ?>index.php/entrenador/index">ver</a>
                            </li>
                            <li>
                               <a href="<?php echo base_url(); ?>index.php/curso/index">Reportes</a>
                            </li>
                            <li>
                        </ul>
                    </li>

                    <li class="menu single-menu">
                        <a href="#more" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                                <span>Inscribir</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="more" data-parent="#topAccordion">
                            <li>
                                <a href="dragndrop_dragula.html"> Inscribir Nuevo Alumno</a>
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
        <div id="content" class="main-content" >
            <div class="layout-px-spacing">
                
                <div class="row" id="cancel-row">

                    <div class="col-lg-12 layout-spacing layout-top-spacing" >
                        <div class="statbox widget box box-shadow">
                           
                            <div class="widget-content widget-content-area">

                                <div class="container" >
                                    
                     <h1>Entrenador</h1>

  <button type="submit"class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEntrenador">Agregar empleado</button>

<br>
                            <div class="widget-content widget-content-area" >
                                <div class="container">
                                    
                                        <div class="pricing pricing--norbu" >
                                            <?php
$indice=1;
foreach ($entrenador->result() as $row) {
?>
                                            <div class="pricing__item"  style="background:url(<?php echo base_url(); ?>assets/img/fondonegro.jfif);"> 
                                                <h3 class="pricing__title">Nombres: <?php echo $row->nombres;?></h3>
                                                <p class="pricing__sentence">Apellidos: <?php echo $row->primerApellido;?>  <?php echo $row->segundoApellido;?></p>
                                         <img class="card-img" src="<?php echo base_url(); ?>assets/img/usuario.png" width="80"> 
                                    <ul class="pricing__feature-list text-center">
                                                   
                                        <li class="pricing__feature">Sueldo: <?php echo $row->sueldo;?></li>
                                        <li class="pricing__feature"> <?php echo form_open_multipart('entrenador/modificar'); ?>
          <input type="hidden" name="idEntrenador" value="<?php echo $row->idEntrenador;?>">
          <input type="submit" name="buttonM" value="Modificar" class="pricing__action mx-auto mb-4">
          <?php echo form_close(); ?> </li>
         <li class="pricing__feature">  <?php echo form_open_multipart('entrenador/deshabilitarbd'); ?>
          <input type="hidden" name="idEntrenador" value="<?php echo $row->idEntrenador;?>">
          <input type="submit" name="buttonE" value="deshabilitar" class="pricing__action mx-auto mb-4">
        <?php echo form_close(); ?></li>
        <li><button class="btn btn-secondary">reporte de cobros</button></li>
                                                </ul>
                                                
                                            </div>
                                            <?php
$indice ++;
}
?>
                                        </div>
                                    </section>

                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

                </div>
       
        <!--  END CONTENT AREA  -->

    </div>

  <tbody>

</div>
</div>



  </tbody>
</table>
	</div>
</div>
</div>
<div class="modal" id="modalEntrenador" >
    <div class="modal-dialog">
        <div class="modal-content"style="background:url(<?php echo base_url(); ?>assets/img/fondo2.jfif);">
            <div class="modal-header">
                <h5 class="modal-title">Nuevo Entrenador</h5>
                   <button class="btn btn-close" data-bs-dismiss="modal"></button> 
            </div>
            <div class="modal-body" >
   <?php echo form_open_multipart('entrenador/agregarbd'); ?>

    <legend>Datos</legend>
    <label>Nombres</label>
    <input type="text" class="form-control" name="nombres" placeholder="Ingrese nombres">
    <label>Primer Apellido:</label>
    <input type="text" class="form-control" name="primerApellido" placeholder="Ingrese primer Apellido">
    <label>Segundo Apellido:</label>
    <input type="text" class="form-control"  name="segundoApellido" placeholder="Ingrese Segundo Apellido" value=" ">
    <label>Sueldo:</label>
   <input type="text" class="form-control" name="sueldo" placeholder="Ingrese sueldo">
    <label>Fecha Ingreso:</label>
    <input type="date" class="form-control" name="fechaIngreso">
    <div class="d-grid gap-2 my-2">
        <div class="widget-content widget-content-area text-center">
<button type="submit" class="btn btn-info">Agregar entrenador</button>
</div >
    </div>
       <?php echo form_close(); ?>
            </div> 
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
    </div>