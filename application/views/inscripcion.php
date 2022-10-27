 <link href="<?php echo base_url(); ?>assets/css/apps/todolist.css" rel="stylesheet" type="text/css" />
 <link href="<?php echo base_url(); ?>plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
 <link href="<?php echo base_url(); ?>assets/css/apps/scrumboard.css" rel="stylesheet" type="text/css" />
<nav class="nav navbar-dark bg-dark " >
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

 <div class="header-container">
        <header class="header navbar navbar-expand-sm">

            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

            <div class="nav-logo align-self-center">
                <a class="navbar-brand" href="index.html"><img alt="logo" src="<?php echo base_url(); ?>assets/img/logo.png" > <span class="navbar-brand-name">VICTOR MURIEL</span></a>
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

 <div class="main-container my-5" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row scrumboard" id="cancel-row">
                    <div class="col-lg-14 layout-spacing">
<h3 class="text-center">Inscripcion</h3>
                                        <div data-draggable="true" class="card task-text-progress" style="">
                                            <div class="card-body">

                                                <div class="task-header" style="background:url(<?php echo base_url(); ?>assets/img/fondonegro.jfif);">
                        <div class="task-list-section">

                            <div data-section="s-in-progress" class="task-list-container" data-connect="sorting" >
                                <div class="connect-sorting" style="background:url(<?php echo base_url(); ?>assets/img/fondo.webp);">

                                    <div class="connect-sorting-content" data-sortable="true">
                                        <div class="">
                                                        <h4 class="" >Datos Estudiante </h4>
                                                                 <div class="text-center">
   <?php echo form_open_multipart('estudiante/inscribirbd'); ?>
    <label>Nombres</label>
    <input type="text" class="form-control" name="nombre" placeholder="Ingrese nombre de estudiante"><br>
    <label>Primer Apellido:</label>
    <input type="text" class="form-control" name="primerApellido" placeholder="Ingrese primer Apellido">
    <label>Segundo Apellido:</label>
    <input type="text" class="form-control"  name="segundoApellido" placeholder="Ingrese Segundo Apellido" value=" ">
    <label>Edad:</label>
    <input type="text" name="edad" class="form-control" placeholder="Ingrese edad de estudiante">
    <label>Numero Celular:</label>
    <input type="tel" class="form-control" name="nroCelular" value=" ">
     <label>Sexo:</label>
        <select class="custom-select custom-select-sm" name="sexo">
        <option>M</option>
        <option>F</option>
        <option>otro</option>
    </select><br>
    <label>fecha Nacimiento:</label>
    <input type="date" class="form-control" name="fechaNacimiento" placeholder="Ingrese fecha"><br>
 <label>fecha Registro:</label>
    <input type="date" class="form-control" name="fechaInicio" placeholder="Ingrese fecha"><br>
    <div class="d-grid gap-2 my-2">
<button type="submit" class="btn btn-info">Inscribir</button>
    </div>
     
            </div> 
                                                    </div>
                                                 
                                                </div>

                                            </div>
                                        </div>

                                    </div>

<div data-section="s-new" class="task-list-container" data-connect="sorting">
                                <div class="connect-sorting" style="background:url(<?php echo base_url(); ?>assets/img/fondo.webp);">
                                    <div class="task-container-header">
                                        <h6 class="s-heading" data-listTitle="In Progress">Curso</h6>
                                        
                                    </div>

                                    <div class="connect-sorting-content" data-sortable="true">

                                        <div data-draggable="true" class="card img-task" style="">
                                            <div class="card-body">
                                                <div class="task-body">
         <select name="idCurso" class="form-control from-select from-select-lg" required>
            <option value=" " disabled selected>Elija un curso</option><?php
foreach ($curso->result() as $row) {
?>    
    <option value="<?php echo $row->idCurso;?>"><?php echo $row->curso;?></option>
<?php
}
?>
</select>
 <input type="hidden" name="idEntrenador"  value="<?php echo $this->session->userdata('idEntrenador'); ?>">  <br>
<legend class="text-center">Pagante</legend>
    <input type="radio" name="lang" value="hide" onclick="hideShowDiv(1)">estudiante
    <input type="radio" name="lang" value="hide" onclick="hideShowDiv(2)">Padre
      <div class="" id="div" >
    <label>Nombre:</label>
    <input type="text" class="form-control"  name="nombres" placeholder="Ingrese nombre de pagante" value=" ">
    <label>Apellido:</label>
    <input type="text" class="form-control"  name="apellidos" placeholder="Ingrese apellido de pagante" value=" ">
    <label>Nro Celular:</label>
    <input type="text" class="form-control"  name="nroCelular" placeholder="Ingrese apellido de pagante" value=" ">
    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div data-draggable="true" class="card simple-title-task" style="">
                                            <div class="card-body">
                                                <div class="task-header">
                                                <h4>Cantidad de meses a pagar:</h4>
    <textarea  name="cantidad" onkeyup="mostrar(this.value)" id="" cols="2" rows="1"></textarea>
</div>
<label> Monto a Pagar:</label><h3 class="monto" id="resultado"></h3><h6>   Bs.</h6>                                               
                                                </div>

                                            </div>
                                        </div> <div class="d-grid gap-2 my-2">
<button type="submit" class="btn btn-info">Inscribir</button>
</div>  <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                </div>
        <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Cochabamba 2022 VICTOR MURIEL</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">JhesicaHelenSejasQuispe <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                </div>
            </div>
    </div>
        </div>
        <script>
   function mostrar(valor){
    valor=valor*150;
document.getElementById("resultado").innerHTML=valor;
   }
   function hideShowDiv(val){ 
    if(val==1){
        document.getElementById('div').style.display='none';
    }
     if(val==2){
        document.getElementById('div').style.display='block';
    }
   }
</script>