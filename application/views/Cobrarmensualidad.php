
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>


    <nav class="nav navbar-dark bg-dark ">
    <?php echo form_open_multipart('estudiante/index'); ?>
           <button type="submit" class="btn btn-outline-warning">Atras</button>
           <?php echo form_close(); ?>
          <?php echo form_open_multipart('inicio/index'); ?>
           <button type="submit" class="btn btn-outline-warning">Inicio</button>
           <?php echo form_close(); ?>
</nav>

    <div class="helpdesk container">
        <nav class="navbar navbar-expand navbar-light">
        </nav>

        <div class="helpdesk layout-spacing">

            <div class="hd-header-wrapper text-center" id="">
               
                        <h4 class="">MENSUALIDAD</h4>
                </div>
                </div>
            </div>

        </div>
   
      <div class="col-xl-6 col-lg-7 col-md-7 col-sm-11 col-11 mx-auto">
<div class="row">
    <?php
foreach ($infoestudiante->result() as $row) {
    ?>
    <div class="form-group ">   
     <legend>Datos</legend>
    <label>Nombres</label>
 <input type="hidden" name="IdEstudiante"  value="<?php echo $row->IdEstudiante; ?>">
    <input type="text" class="form-control" name="nombre" placeholder="Ingrese nombre" value="<?php echo $row->nombres;?>"><br>
    <label>Primer Apellido:</label>
    <input type="text" class="form-control" name="primerApellido" placeholder="Ingrese primer Apellido" value="<?php echo $row->ApellidoPaterno;?>">
    <label>Segundo Apellido:</label>
    <input type="text" class="form-control"  name="segundoApellido" placeholder="Ingrese Segundo Apellido" value="<?php echo $row->ApellidoMaterno;?> "><br>
    <label>Curso:</label>
    <input type="text" class="form-control" name="Curso" placeholder="prueba" value="<?php echo $row->Curso;?>"><br>
<br>
     <label>cantidad:</label>
        <select class="custom-select custom-select-sm" name="cantidad">
        <option>1</option>
        <option>2</option>
        <option>3</option>
    </select><br>
<label> cantidad a cancelar: <h1 >150 bs</h1></label>
    <div class="d-grid gap-2 my-4">
<button type="submit" class="btn btn-info" data-toggle="modal" data-target="#profileModal">Cancelar mensualidad</button>
  <div class="modal fade profile-modal" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>

                                          <div class="modal-body text-center">
                                                <p class="mt-2">Click on view to access your profile.</p>
                                          </div>
                                          <div class="modal-footer justify-content-center mb-4">
                                            <button type="button" class="btn">View</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>


</div >
   <?php }
    ?>
    </div> 
</div>
</div>

    <div id="miniFooterWrapper" class="">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="position-relative">
                        <div class="arrow text-center">
                            <p class="">Muriel</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 mx-auto col-lg-6 col-md-6 site-content-inner text-md-left text-center copyright align-self-center">
                            <p class="mt-md-0 mt-4 mb-0">2022 &copy; </p>
                        </div>
                        <div class="col-xl-5 mx-auto col-lg-6 col-md-6 site-content-inner text-md-right text-center align-self-center">
                            <p class="mb-0">La Paz y Antezana, Cochabamba, 2022</p>
                        </div>
                    </div>
                </div>      
            </div>
        </div>
    </div> 