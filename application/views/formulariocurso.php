</head>
<body  >

     <?php echo form_open_multipart('curso/index'); ?>
           <button type="submit" class="btn btn-outline-warning">Atras</button>
           <?php echo form_close(); ?>
<div class="container my-5">
<div class="row">
	<h2>Agregar nuevo Curso</h2>
	<div class="col-md-12 my-5 py-4 bg-white form-group">
		
  <?php echo form_open_multipart('curso/agregarbd'); ?>

	<legend>Datos</legend>
	<label>Curso</label>
    <input type="text" name="curso" placeholder="Ingrese nombre de curso"><br>
    <label>Cantidad: </label>
    <input type="text" name="cantidad" placeholder="Ingrese cantidad">
    <label>Horario:</label>
    <input type="text" name="horario" placeholder="Ingrese Horario" value=" "><br>

	<div class="d-grid gap-2">
  <button type="submit" class="btn btn-primary">Agregar Curso</button>
</div >
	</div>
	   <?php echo form_close(); ?>
</div>
</div>