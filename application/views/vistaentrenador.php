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
                <a class="navbar-brand" href="index.html"><img alt="logo" src="<?php echo base_url(); ?>assets/img/logo.png" > <span class="navbar-brand-name">VICTOR MURIEL</span></a>
            </div>

            <ul class="navbar-item flex-row mr-auto">
              
            </ul>

            <ul class="navbar-item flex-row nav-dropdowns">

                <li class="nav-item dropdown user-profile-dropdown order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="user-profile-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <img src="<?php echo base_url(); ?>assets/img/usuario.png" class="img-fluid" alt="admin-profile">
                            <div class="media-body align-self-center">
                                <h6><span>Hi,</span> Usuario</h6>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                   

                </li>
            </ul>
        </header>
    </div>

<!--  BEGIN TOPBAR  -->
        <div class="topbar-nav header navbar" role="banner">
            <nav id="topbar">

                <ul class="list-unstyled menu-categories" id="topAccordion">
 <li class="menu single-menu">
        
                        
                        <?php echo form_open_multipart('estudiante/indexEstudiante'); ?>
                        <button type="submit" class="btn btn-outline-warning">atras</button>
                        <?php echo form_close(); ?>
                        
                    </li>
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
                        <button type="submit" class="btn btn-outline-warning">curso</button>
                        <?php echo form_close(); ?>
                        </li>
                        </ul>
                    </li>

                    <li class="menu single-menu active">
                        <a href="#app" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                                <span>Pagos</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="app" data-parent="#topAccordion">
                            <li>
                                <a href="apps_chat.html">mensualidades</a>
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
                            <li>
                                <a href="component_tabs.html"> Ver Equipos </a>
                            </li>
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
                        <a href="#page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                                <span>Empleados</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="page"  data-parent="#topAccordion">
                            <li>
                                <a href="pages_helpdesk.html"> Helpdesk </a>
                            </li>
                            <li>
                                <a href="pages_contact_us.html"> Contact Form </a>
                            </li>
                            <li>
                            <li class="sub-sub-submenu-list">
                                <a href="#user-login" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Login <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                               
                            </li>
                          

                          
                        </ul>
                    </li>

                    <li class="menu single-menu">
                        <a href="#more" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                                <span>reportes</span>
                            </div>

                        </ul>
                    </li>

                </ul>
            
                            
</nav>
<br>

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
                                    
                     <h1>Mi Perfil</h1>

<br>
                            <div class="widget-content widget-content-area" >
                                <div class="container">
                                    
                                        <div class="pricing pricing--norbu" >
                                            <?php
$indice=1;
foreach ($entrenador->result() as $row) {
?>
                                            <div class="pricing__item"  style="background:url(<?php echo base_url(); ?>assets/img/fondonegro.jfif);"> 
                                                <h3 class="pricing__title">Nombres: <?php echo $row->nombresE;?></h3>
                                                <p class="pricing__sentence">Apellidos: <?php echo $row->primerApellidoE;?>  <?php echo $row->segundoApellidoE;?></p>
                                         <img class="card-img" src="<?php echo base_url(); ?>assets/img/usuario.png" width="80"> 
                                    <ul class="pricing__feature-list text-center">
                                                   
                                        <li class="pricing__feature">Sueldo: <?php echo $row->sueldo;?> Bs.</li>
                <li class="pricing__feature">Fecha Ingreso: <?php echo $row->fechaIngreso;?></li>
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
<div class="modal" id="modalEntrenador">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nuevo Entrenador</h5>
                   <button class="btn btn-close" data-bs-dismiss="modal"></button> 
            </div>
            <div class="modal-body">
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