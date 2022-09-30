
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

            <div class="hd-header-wrapper text-center" id="" doSearch>
               
                        <h4 class="">PAGO POR SESION</h4>
                        <p class="">Buscar nombre</p>

                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-11 col-11 mx-auto">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
                                    </div>
                                   

                                     <input type="text" class="form-control" name="buscar" placeholder="ingresar apellido de estudiante" aria-label="Username" aria-describedby="basic-addon1">

                                </div>
                            </div>
                            <div class="" id="datos" ></div>
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
    <label>Nombres</label>
    <input type="text" class="form-control" name="nombre" placeholder="Ingrese nombre"><br>
    <label>Primer Apellido:</label>
    <input type="text" class="form-control" name="primerApellido" placeholder="Ingrese primer Apellido">
    <label>Segundo Apellido:</label>
    <input type="text" class="form-control"  name="segundoApellido" placeholder="Ingrese Segundo Apellido" value=" "><br>
    <label>Edad:</label>
    <input type="text" name="edad" class="form-control" placeholder="Ingrese edad de estudiante">
    <label>Numero Celular:</label>
    <input type="tel" class="form-control" name="nroCelular" placeholder="Ingrese numero celular">
    <label>Curso:</label>
    <input type="text" class="form-control" name="Curso" placeholder="prueba"><br>
     <label>Sexo:</label>
        <select class="custom-select custom-select-sm" name="sexo">
        <option>M</option>
        <option>F</option>
        <option>otro</option>
    </select>
<br>
     <label>Sesion:</label>
        <select class="custom-select custom-select-sm" name="cantidad">
        <option>1</option>
        <option>2</option>
        <option>3</option>
    </select><br>
<label> cantidad a cancelar: </label><h1>20 bs</h1>
    <div class="d-grid gap-2 my-4">
<button type="submit" class="btn btn-info">Cancelar sesion</button>
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