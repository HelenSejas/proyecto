</head>
<body  >

<nav>
	<div class="alert alert-info"> <img alt="logo" src="<?php echo base_url(); ?>assets/img/logo.jpg" width="110" > </div>
</nav>
           <?php echo form_open_multipart('estudiante/index'); ?>
           <button type="submit" class="btn btn-outline-warning">Atras</button>
           <?php echo form_close(); ?>
<div class="container my-5">
<div class="row">
	<h2>Agregar nuevo estudiante</h2>
	<div class="form-group my-5 mx-5">
		
  <?php echo form_open_multipart('estudiante/agregarbd'); ?>

	<legend>Datos</legend>
	<label>Nombres</label>
    <input type="text" class="form-control" name="nombre" placeholder="Ingrese nombre de estudiante"><br>
    <label>Primer Apellido:</label>
    <input type="text" class="form-control" name="primerApellido" placeholder="Ingrese primer Apellido">
    <label>Segundo Apellido:</label>
    <input type="text" class="form-control"  name="segundoApellido" placeholder="Ingrese Segundo Apellido" value=" "><br>
    <label>Edad:</label>
    <input type="text" name="edad" class="form-control" placeholder="Ingrese edad de estudiante">
    <label>Numero Celular:</label>
    <input type="tel" class="form-control" name="nroCelular" placeholder="Ingrese numero celular">
    <label>Curso:</label>
    <input type="text" class="form-control" name="Curso" placeholder="Ingrese Curso"><br>
     <label>Sexo:</label>
		<select class="custom-select custom-select-sm" name="sexo">
		<option>M</option>
		<option>F</option>
		<option>otro</option>
	</select>

	<div class="d-grid gap-2 my-4">
<button type="submit" class="btn btn-info">Agregar estudiante</button>
</div >
	</div>
	   <?php echo form_close(); ?>
</div>
</div>