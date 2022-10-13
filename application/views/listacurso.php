<link href="<?php echo base_url(); ?> assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?> assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />

<nav class="nav navbar-dark bg-dark ">
    <?php echo form_open_multipart('estudiante/index'); ?>
           <button type="submit" class="btn btn-outline-warning">Atras</button>
           <?php echo form_close(); ?>
          <?php echo form_open_multipart('inicio/index'); ?>
           <button type="submit" class="btn btn-outline-warning">Inicio</button>
           <?php echo form_close(); ?>
</nav>
<div class="container my-5">
  <h1>Lista Curso</h1>
    <?php echo form_open_multipart('curso/agregar'); ?>

  <button type="submit" class="btn btn-warning">Agregar Curso</button>
<?php echo form_close(); ?>
<div class="row">
	<div class="col-xl-6 col-lg-7 col-md-6 col-sm-11 col-11 ">
  <tbody>
<?php
foreach ($curso->result() as $row) {
?>
  <div class="card component-card_5 bg-primary my-4 mx-4" style="max-width: 15rem;">
   <img class="card-img-top" src="<?php echo base_url(); ?>assets/img/muriel.jpg" > 
  <div class="card-header">Curso</div>
  <div class="card-body">
    <h5 class="card-title"><?php echo $row->curso;?></h5>
    <p class="card-text">Cantidad: <?php echo $row->cantidad;?><br>
     Horario: <?php echo $row->horario;?></p>
     
         <?php echo form_open_multipart('curso/modificar'); ?>
          <input type="hidden" name="idCurso" value="<?php echo $row->idCurso; ?>">
          <div class="d-grid gap-2 my-4">
          <input type="submit" name="buttonM" value="Modificar" class="btn btn-success"></div>
          <?php echo form_close(); ?>
       
          <?php echo form_open_multipart('curso/eliminarcursobd'); ?>
          <input type="hidden" name="idCurso" value="<?php echo $row->idCurso;?>">
          <div class="d-grid gap-2 my-4">
          <input type="submit" name="buttonE" value="Eliminar" class="btn btn-danger"></div>
        <?php echo form_close(); ?>

      </div>
  </div>
	<?php
}
?>
<div id="content" class="main-content">
            <div class="layout-px-spacing">
                
                <div class="row app-notes layout-top-spacing" id="cancel-row">
                    <div class="col-lg-12">
                        <div class="app-hamburger-container">
                            <div class="hamburger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu chat-menu d-xl-none"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></div>
                        </div>

                        <div class="app-container">
                            
                            <div class="app-note-container">

                                <div id="ct" class="note-container note-grid">
                                    
                                    <div class="note-item all-notes note-personal">
                                        <div class="note-inner-content">
                                            <div class="note-content">
                                                <p class="note-title" data-noteTitle="Meeting with Kelly">Meeting with Kelly</p>
                                                <p class="meta-time">11/01/2020</p>
                                                <div class="note-description-content">
                                                    <p class="note-description" data-noteDescription="Curabitur facilisis vel elit sed dapibus sodales purus rhoncus.">Curabitur facilisis vel elit sed dapibus sodales purus rhoncus.</p>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div class="note-item all-notes note-social">
                                        <div class="note-inner-content">

                                            <div class="note-content">
                                                <p class="note-title" data-noteTitle="Download Server Logs">Download Server Logs</p>
                                                <p class="meta-time">11/09/2020</p>
                                                <div class="note-description-content">
                                                    <p class="note-description" data-noteDescription="Suspendisse efficitur diam quis gravida. Nunc molestie est eros.">Suspendisse efficitur diam quis gravida. Nunc molestie est eros.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        
                    </div>
                </div>

                </div>
            </div>
             <!--  END CONTENT AREA  -->

        
    </div>
    <script src="<?php echo base_url(); ?> assets/js/libs/jquery-3.1.1.min.js"></script>