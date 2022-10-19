 <link href="<?php echo base_url(); ?>assets/css/apps/todolist.css" rel="stylesheet" type="text/css" />
 <link href="<?php echo base_url(); ?>plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
<nav class="nav navbar-dark bg-dark " >
    <div class="main-container" id="container">

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
                        <?php echo form_open_multipart('curso/index'); ?>
                        <button type="submit" class="btn btn-outline-warning">ver Curso</button>
                        <?php echo form_close(); ?>
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
                            <li> <?php echo form_open_multipart('curso/indexUniforme'); ?>
                        <button type="submit" class="btn btn-outline-warning">ver</button>
                        <?php echo form_close(); ?></li>
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
                          <?php echo form_open_multipart('estudiante/indexEstudiante'); ?>
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
                            <li>
                                <a href="pages_contact_us.html"> Contact Form </a>
                            </li>
                            <li>
                            <li class="sub-sub-submenu-list">
                                <a href="#user-login" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Login <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="user-login" data-parent="#page"> 
                                    <li>
                                        <a href="auth_login.html"> Login </a>
                                    </li>
                                    <li>
                                        <a href="auth_login_boxed.html"> Login Boxed </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-sub-submenu-list">
                                <a href="#user-register" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Register <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="user-register" data-parent="#page"> 
                                    <li>
                                        <a href="auth_register.html"> Register </a>
                                    </li>
                                    <li>
                                        <a href="auth_register_boxed.html"> Register Boxed </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sub-sub-submenu-list">
                                <a href="#user-passRecovery" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Password Recovery <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="user-passRecovery" data-parent="#page"> 
                                    <li>
                                        <a href="auth_pass_recovery.html"> Recover ID </a>
                                    </li>
                                    <li>
                                        <a href="auth_pass_recovery_boxed.html"> Recover ID Boxed </a>
                                    </li>
                                </ul>
                            </li>

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

 <div id="content" class="main-content my-4">
            <div class="layout-px-spacing">
                <h2 class="text-center">Estudiantes</h2>
                <div class="row layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-md-12">

                        <div class="mail-box-container">
                            <div class="mail-overlay"></div>

                            <div class="tab-title">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12 text-center">
                                    <img alt="logo" src="<?php echo base_url(); ?>assets/img/lista.png" width=90>
                                        <h5 class="app-title m-3">Lista completa</h5>

                                    </div>
                         
                                    <div class="todoList-sidebar-scroll">
                                        <div class="col-md-12 col-sm-12 col-12 mt-4 pl-0">
                                            <ul class="nav nav-pills d-block" id="pills-tab" role="tablist">
                         
                    <div class="btn-group-vertical my-2" role="group" aria-label="Vertical button group">
             <?php echo form_open_multipart('estudiante/indexEstudiante'); ?>
<button class="btn btn-secondary">Mostrar Estudiantes activos</button>
             <?php echo form_close(); ?><br>
              <button type="button" class="btn btn-secondary">mostrar nuevos alumnos</button><br>
              <button type="button" class="btn btn-secondary">crear lista pdf</button>
                   </div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="todo-inbox" class="accordion todo-inbox">
                            
                        
                                <div class="todo-box">
                                    
                                    <div id="ct" class="todo-box-scroll">
                                        <div class="todo-item all-list">
                                            <div class="todo-item-inner">
                                                <div class="n-chk text-center">
                                                    
                                                </div>

                                                <div class="todo-content">
                                                   <div class="row">
        
        <table class="table style-3  table-hover" style="background:url(<?php echo base_url(); ?>assets/img/fff.jfif);">
  <thead>
    <tr class="text-white">
      <th scope="col">Nro</th>
      <th scope="col">Nombres</th>
      <th scope="col">Primer Apellido</th>
      <th scope="col">segundo Apellido</th>  
      
    </tr>
  </thead>
  <tbody>
<?php
$indice=1;
foreach ($estudiante->result() as $row) {
?>
        <tr>
      <th class="checkbox-column text-center" scope="row"><?php echo $indice;?></th>
      <td><?php echo $row->nombres;?></td>
      <td><?php echo $row->ApellidoPaterno;?></td>
      <td><?php echo $row->ApellidoMaterno;?></td>
    <td >
         <?php echo form_open_multipart('estudiante/habilitarbd'); ?>
          <input type="hidden" name="IdEstudiante" value="<?php echo $row->IdEstudiante;?>">
          <input type="submit" name="buttonM" value="habilitar" class="btn btn-outline-secondary mb-2">
          <?php echo form_close(); ?>
        </td> 
    </tr>
    <?php
$indice ++;
}
?>

                             </div>

                            </div>
                         </div>
 
                        </div>

                    </div>

                </div>                                    
            </div>

                    
            </div>
         </div>

         </div>
     
        </div>


<div class="modal" id="miModal">
    <div class="modal-dialog">
        <div class="modal-content" style="background:url(<?php echo base_url(); ?>assets/img/fondo.webp);">
            <div class="modal-header">
                <h5 class="modal-title">Nuevo Estudiante</h5>
                   <button class="btn btn-close" data-bs-dismiss="modal"></button> 
            </div>
            <div class="modal-body">
   <?php echo form_open_multipart('estudiante/agregarbd'); ?>

    <legend>Datos</legend>
    <label>Nombres</label>
    <input type="text" class="form-control" name="nombre" placeholder="Ingrese nombre de estudiante"><br>
    <label>Primer Apellido:</label>
    <input type="text" class="form-control" name="primerApellido" placeholder="Ingrese primer Apellido">
    <label>Segundo Apellido:</label>
    <input type="text" class="form-control"  name="segundoApellido" placeholder="Ingrese Segundo Apellido" value=" "><br>
    <label>Edad:</label>
    <input type="text" name="edad" class="form-control" placeholder="Ingrese edad de estudiante">
    <label>Numero Celular:</label>
    <input type="tel" class="form-control" name="nroCelular" placeholder="Ingrese numero celular">
    <label>Curso:</label>
    <input type="text" class="form-control" name="Curso" placeholder="Ingrese Curso"><br>
     <label>Sexo:</label>
        <select class="custom-select custom-select-sm" name="sexo">
        <option>M</option>
        <option>F</option>
        <option>otro</option>
    </select>

    <div class="d-grid gap-2 my-4">
        <div class="widget-content widget-content-area text-center">
<button type="submit" class="btn btn-info">Agregar estudiante</button>
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

</div>
  </tbody>
</table>
	</div>
</div>
</div>
