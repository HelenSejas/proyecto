<link href="<?php echo base_url(); ?>assets/css/structure.css" rel="stylesheet" type="text/css" class="structure" />
  <link href="<?php echo base_url(); ?>assets/css/apps/notes.css" rel="stylesheet" type="text/css" />

    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader-content">
       
    </div>
    <!--  END LOADER -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
      

           <nav class="nav "style="background:url(<?php echo base_url(); ?>assets/img/cancha.jpg);">
             <img src="<?php echo base_url(); ?>assets/img/logo.png" class="navbar-logo" alt="logo" width=80>
            <h4 class="admin-logo">VICTOR MURIEL</h4>
            <div class="mx-5"> <?php echo form_open_multipart('estudiante/indexEstudiante'); ?>
           <button type="submit" class="btn btn-outline-warning">Atras</button>
           <?php echo form_close(); ?></div> 
            </div> 

        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content" style="background:url(<?php echo base_url(); ?>assets/img/fondo2.jfif);">
            <div class="layout-px-spacing">

                <div class="content-container">

                    <div class="col-left layout-top-spacing">
                        <div class="col-left-content">

                            <div class="header-container">
                                <header class="header navbar navbar-expand-sm">                                    
                                    <div class="d-flex">
                                        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
                                            <div class="bt-menu-trigger">
                                                <span></span>
                                            </div>
                                        </a>
                                        <div class="text-center">
                                           
                                                <h3>Equipos</h3>
                             

                            <div class="admin-data-content layout-top-spacing">

                                <div class="row app-notes" id="cancel-row">
                                    <div class="col-lg-12">
                                        <div class="app-hamburger-container">
                                
                                        <div class="app-container">
                                           
                                            <div class="app-note-container">
                    
                                                <div class="app-note-overlay"></div>
                                
                                                <div class="tab-title">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-12 mt-2">
                                                            <ul class="nav nav-pills d-block" id="pills-tab3" role="tablist">
                                                              
                                                              <img src="<?php echo base_url(); ?>assets/img/balon.png" width=180>
                                                                <li class="nav-item my-2">
                                                                    <a target="_blank" href="<?php echo base_url(); ?>index.php/equipo/listapdf">
                                                                    <button class="btn btn-secondary mb-4 mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>Lista de equipos pdf</button></a>
                                                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarEquipo">Crear Equipo</button>
                                                                </li>
                                                            </ul>
                                
                                
                                                        </div>
                                                    </div>
                                                </div>
                                
                                
                                                <div id="ct" class="note-container note-grid">
                        <?php
 foreach ($equipo->result() as $row) {
?>
                                                    <div class="note-item all-notes note-personal">
                                                        <div class="note-inner-content">
                                                            <div class="note-content">
                                                                <p class="note-title" data-noteTitle="Meeting with Kelly">Equipo :<?php echo $row->nombre;?></p>
                                                                <p class="meta-time">Creacion:<?php echo $row->fechaRegistro;?></p>
                                                                <div class="note-description-content">
                                                                    <p class="note-description" data-noteDescription="Curabitur facilisis vel elit sed dapibus sodales purus rhoncus.">Integrantes: <?php echo $row->cantidad;?></p>
                                                                    <button class="btn btn-outline-success">ver Integrantes</button>
                                                                     <button class="btn btn-outline-success">crear pdf lista</button>
                                                                    <img src="<?php echo $row->imagen;?>" width=50>
                                                                </div>
                                                                <div class="my-2">
                                                                     <?php echo form_open_multipart('equipo/modificarequipobd'); ?>
                                                                     <input type="hidden" name="idEquipo" value="<?php echo $row->idEquipo;?>">
                                                                <button class="btn-rounded btn-warning">Modificar</button>
                                                                 <?php echo form_close(); ?>
                                                                   <?php echo form_open_multipart('equipo/deshabilitarequipo'); ?>
                                                                   <input type="hidden" name="idEquipo" value="<?php echo $row->idEquipo;?>">
                                                                <button class="btn-rounded btn-warning">Eliminar</button>
                                                                 <?php echo form_close(); ?>

                                                            </div>
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

            </div>
        </div>
        <!--  END CONTENT AREA  -->
<div class="modal" id="agregarEquipo">
    <div class="modal-dialog">
        <div class="modal-content" style="background:url(<?php echo base_url(); ?>assets/img/fondo.webp);">
            <div class="modal-header">
                <h5 class="modal-title">Nuevo Equipo</h5>
                   <button class="btn btn-close" data-bs-dismiss="modal"></button> 
            </div>
            <div class="modal-body">
   <?php echo form_open_multipart('equipo/agregaequipo'); ?>

    <legend>Datos</legend>
    <label>Nombre</label>
    <input type="text" class="form-control" name="nombre" placeholder="Ingrese nombre de equipo"><br>
    <label>Cantidad:</label>
    <input type="text" class="form-control" name="cantidad" placeholder="Ingrese cantidad de jugadores">
    <label>Fecha Creacion:</label>
    <input type="date" class="form-control"  name="fechaRegistro" >
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
</body>
