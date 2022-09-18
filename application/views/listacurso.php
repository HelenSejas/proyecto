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
<div class="row">
	<div class="col-md-12">
    <h1>Lista Curso</h1>
  <?php echo form_open_multipart('curso/agregar'); ?>

  <button type="submit" class="btn btn-warning">Agregar Curso</button>
<?php echo form_close(); ?>

  <tbody>
<?php
foreach ($curso->result() as $row) {
?>
  <div class="card component-card_5 bg-primary" style="max-width: 20rem;">
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

   <div class="row">

                        <div id="modalCustom" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                             
                                <div class="widget-content widget-content-area  text-center advance-content signinModal-content">
                                    <p class="mb-4">More Custom Modals.</p>


                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger mb-2 mr-2" data-toggle="modal" data-target="#profileModal">
                                      Profile
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade profile-modal" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>

                                          <div class="modal-header justify-content-center" id="profileModalLabel">
                                            <div class="modal-profile mt-4">
                                                <img alt="avatar" src="assets/img/90x90.jpg" class="rounded-circle">
                                            </div>
                                          </div>
                                          <div class="modal-body text-center">
                                                <p class="mt-2">Click on view to access your profile.</p>
                                          </div>
                                          <div class="modal-footer justify-content-center mb-4">
                                            <button type="button" class="btn">View</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <button type="button" class="btn btn-secondary mb-2 mr-2" data-toggle="modal" data-target="#registerModal">
                                      Register
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade register-modal" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">

                                          <div class="modal-header" id="registerModalLabel">
                                            <h4 class="modal-title">Register</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                                          </div>
                                          <div class="modal-body">
                                            <form class="mt-0">
                                               <div class="form-group">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <input type="text" class="form-control mb-2" id="exampleInputUsername1" placeholder="Username">
                                              </div>
                                              <div class="form-group">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg>
                                                <input type="email" class="form-control mb-2" id="exampleInputEmail2" placeholder="Email">
                                              </div>
                                              <div class="form-group">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                                <input type="password" class="form-control mb-4" id="exampleInputPassword2" placeholder="Password">
                                              </div>
                                              <button type="submit" class="btn btn-primary mt-2 mb-2 btn-block">Register</button>
                                            </form>

                                            <div class="division">
                                                  <span>OR</span>
                                            </div>

                                          </div>
                                          <div class="modal-footer justify-content-center">
                                            <div class="forgot login-footer">
                                                <span>Already have <a href="javascript:void(0);">Login</a>?</span>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



        <script src="<?php echo base_url(); ?> assets/js/libs/jquery-3.1.1.min.js"></script>