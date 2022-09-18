</head>
<body  >

     <?php echo form_open_multipart('estudiante/index'); ?>
           <button type="submit" class="btn btn-outline-warning">Atras</button>
           <?php echo form_close(); ?>
<nav>
	<div class="alert alert-info"> <img alt="logo" src="<?php echo base_url(); ?>assets/img/logo.jpg" width="110" > </div>
</nav>
<div class="container my-5">
<div class="row">
	<div class="col-md-12 py-4 form-group">
		<h2>Modificar estudiante</h2>

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
	<div class="d-grid gap-2 my-4">
  <button type="submit" class="btn btn-primary">Modificar estudiante</button>
</div>
  <?php echo form_close();
}
?>
	<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Aviso</div>
  <div class="card-body">
    <h5 class="card-title">Acciones de Empleado</h5>
    <p class="card-text">La accion del usuario que modifique se guardara , no hacer cambios innecesarios</p>
  </div>
	</div>
</div>
</div>
