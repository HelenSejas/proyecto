
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

            <div class="hd-header-wrapper">
                <div class="row">                                
                <div class="col-md-12 text-center">
                        <h4 class="">MENSUALIDAD</h4>
                        <p class="">Buscar estudiante</p>

                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-11 col-11 mx-auto">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
                                    </div>
                                   

                                     <input type="text" class="form-control" name="buscar" placeholder="ingresar apellido de estudiante" aria-label="Username" aria-describedby="basic-addon1">

                                    <?php 
                                        echo form_open_multipart('estudiante/buscar'); ?>
                                    <button type="submit" class="btn btn-info">seleccionado</button>
                                  <label></label><br>
                                    <?php echo form_close(); ?>

                                </div>
                            </div>
                            <form></form>
                        </div>
                </div>
                </div>
            </div>

        </div>
    </div>
      <div class="col-xl-6 col-lg-7 col-md-7 col-sm-11 col-11 mx-auto">
<div class="row">
    <div class="form-group ">   
    <legend>Datos</legend>
    <label>Estudiante:</label>
   <label>es</label><br>
    <label>mes:</label>
 <select class="custom-select custom-select-sm" name="cantidad">
        <option>ene</option>
        <option>feb</option>
        <option>mar</option>
        <option>abr</option>
        <option>may</option>
        <option>jun</option>
        <option>jul</option>
        <option>ago</option>
        <option>sep</option>
        <option>oct</option>
        <option>nov</option>
        <option>dic</option>
    </select>
<br>
    <label>Curso:</label>
   <p>Cursos</p><br>
     <label>Cantidad:</label>
        <select class="custom-select custom-select-sm" name="cantidad">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
    </select><br>
<label> cantidad a cancelar: </label><h1>150 bs</h1>
    <div class="d-grid gap-2 my-4">
<button type="submit" class="btn btn-info">Cancelar mes</button>
</div >
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