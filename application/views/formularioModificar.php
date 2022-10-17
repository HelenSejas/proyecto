<link href="<?php echo base_url(); ?>plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
     <?php echo form_open_multipart('estudiante/index'); ?>
           <button type="submit" class="btn btn-outline-warning">Atras</button>
           <?php echo form_close(); ?>
    <div class="helpdesk">
        <nav class="navbar navbar-expand ">
<img src="<?php echo base_url(); ?>assets/img/logo1.jpg" width="110" >
<h2 class="text-center text-black">Datos estudiante</h2>
</nav>
<div class="container my-3">
<div class="row">
 <div class="form-container ">
        <div class="form-form">
            <div class="form-wrap">
                <div class="form-container">
                    <div class="form-content">
	<div class="col-md-12  form-group">
		

<?php
foreach ($infoestudiante->result() as $row) {
	echo form_open_multipart('estudiante/modificarbd'); ?>
	 <input type="hidden" name="IdEstudiante"  value="<?php echo $row->IdEstudiante; ?>">
   <legend>Datos</legend>
	<label>Nombres</label>
	<input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre de estudiante" value="<?php echo $row->nombres;?>"><br>
	<label>Primer Apellido:</label>
    <input type="text" class="form-control" name="primerApellido" placeholder="Ingrese primer Apellido" value="<?php echo $row->ApellidoPaterno;?>"><br>
    <label>Segundo Apellido:</label>
    <input type="text" class="form-control" name="segundoApellido" placeholder="Ingrese Segundo Apellido" value="<?php echo $row->ApellidoMaterno;?>"><br>
    <label>Edad:</label>
    <input type="text" class="form-control" name="edad" placeholder="Ingrese edad de estudiante" value="<?php echo $row->Edad;?>"><br>
    <label>Numero Celular:</label>
    <input type="tel" class="form-control" name="nroCelular" placeholder="Ingrese numero celular" value="<?php echo $row->nroCelular;?>"><br>
    <label>Curso:</label>
    <input type="text" class="form-control" name="Curso" placeholder="Ingrese Curso" value="<?php echo $row->Curso;?>"><br>
    <label>Sexo:</label>
		<select class="custom-select custom-select-sm"  name="sexo">
		<option value="<?php echo $row->sexo;?>">M</option>
		<option value="<?php echo $row->sexo;?>">F</option>
		<option value="<?php echo $row->sexo;?>">otro</option>
	</select><br>
  <label>Fecha de Ingreso:</label>
    <input type="date" class="form-control" name="fechaInicio" placeholder="Ingrese Fecha" value="<?php echo $row->fechaInicio;?>"><br>
	<div class="d-grid gap-2 my-4">
    <div class="widget-content widget-content-area text-center">
  <button type="submit" class="mr-2 btn btn-primary success">Modificar estudiante</button>

  <?php echo form_close();
}
?>
</div>
</div>
<div class="d-grid gap-2 my-4">
<?php echo form_open_multipart('estudiante/deshabilitarbd'); ?>
<div class="widget-content widget-content-area text-center">
    <input type="hidden" name="IdEstudiante" value="<?php echo $row->IdEstudiante;?>">
          <button class="mr-2 btn btn-danger success">Deshabilitar Estudiante</button>
         
        <?php echo form_close(); ?>
</div>

        <?php echo form_open_multipart('estudiante/seleccionado'); ?>
         <input type="hidden" name="IdEstudiante"  value="<?php echo $row->IdEstudiante; ?>">
           <button type="submit" class="btn btn-outline-warning">Cobrar Mensualidad</button>
           <?php echo form_close(); ?>
</div>
</div>
</div>
</div>

</div>
</div>
  <script src="<?php echo base_url(); ?>plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="<?php echo base_url(); ?>plugins/sweetalerts/custom-sweetalert.js"></script>