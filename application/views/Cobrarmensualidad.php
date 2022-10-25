
    <div class="main-container" >

        <div class="overlay"></div>
        <div class="search-overlay"></div>


    <nav class="nav navbar-dark bg-dark ">
    <?php echo form_open_multipart('usuarios/indexInicio'); ?>
           <button type="submit" class="btn btn-outline-warning">Atras</button>
           <?php echo form_close(); ?>
          <?php echo form_open_multipart('estudiante/index'); ?>
           <button type="submit" class="btn btn-outline-warning">Inicio</button>
           <?php echo form_close(); ?>
</nav>

    <div class="helpdesk container" >
        <nav class="navbar navbar-expand navbar-light">
        </nav>

        <div class="helpdesk layout-spacing" >

            <div class="hd-header-wrapper text-center" id="">
               
                        <h4 class="">MENSUALIDAD</h4>
                </div>
                </div>
            </div>

        
  
      <div class="col-xl-6 col-lg-7 col-md-7 col-sm-11 col-11 mx-auto" >
<div class="row" >
    
    <?php
    echo form_open_multipart('estudiante/mensualidadbd');
foreach ($infoestudiante->result() as $row) {
    ?>
    <div class="form-group ">   
     <legend class="text-center">Datos</legend>
    <label>Estudiante:</label>
 <input type="hidden" name="IdEstudiante"  value="<?php echo $row->IdEstudiante; ?>">
  <input type="hidden" name="idInscripcion"  value="<?php echo $row->idInscripcion; ?>">
   <h5><?php echo $row->nombres;?> <?php echo $row->primerApellido;?> <?php echo $row->segundoApellido;?></h5>
   <label>Curso:</label>
    <h5><?php echo $row->curso;?></h3>
    <legend class="text-center">Pagante</legend>
    <input type="radio" name="lang" value="hide" onclick="hideShowDiv(1)">estudiante
    <input type="radio" name="lang" value="hide" onclick="hideShowDiv(2)">Padre
      <div class="" id="div" >
    <label>Nombre:</label>
    <input type="text" class="form-control" value="<?php echo $row->nombrePadre;?>">
    <label>Apellido:</label>
    <input type="text" class="form-control"  value="<?php echo $row->apellidos;?> ">
    </div>
    <div>
            <label>Mes:</label>
        <input type="text" name="mes" class="form-control" placeholder="Ingrese mes de pago" required>
        <label>Fecha:</label>
    <input type="date" name="fecha" class="form-control" >
        <label>Cantidad de meses a pagar:</label>
    <textarea name="cantidad" onkeyup="mostrar(this.value)" id="" cols="2" rows="1"></textarea>
</div>
<label>Monto a Pagar:</label>
<h6 name="monto" id="resultado"></h6>

    <div class="d-grid gap-2 my-4">
          <input type="hidden" name="IdEstudiante" value="<?php echo $row->IdEstudiante;?>">
            <button class="btn btn-info">Cobrar mensualidad</button>
           <?php echo form_close(); ?>
   
   <input type="hidden" name="IdEstudiante" value="<?php echo $row->IdEstudiante;?>">
</div >
   <?php }
    ?>
    <?php echo form_open_multipart('estudiante/mensualidadpdf'); ?>
          <input type="hidden" name="IdEstudiante" value="<?php echo $row->IdEstudiante;?>">
          <button>Generar comprobante</button>   
           <?php echo form_close(); ?>
    </div> 
</div>
</div>

<script >
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

    <div class="modal" id="modalComprobante" >
    <div class="modal-dialog">
        <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title">COBRO EXITOSO</h5>
                   <button class="btn btn-close" data-bs-dismiss="modal"></button> 
            </div>
             <a target="_blank" href="<?php echo base_url(); ?>index.php/estudiante/mensualidadpdf">
           <button  class="btn btn-outline-warning">Generar Comprobante</button></a>
            </div> 
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
    </div>