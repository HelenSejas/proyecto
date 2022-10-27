
     <?php echo form_open_multipart('curso/index'); ?>
           <button type="submit" class="btn btn-outline-warning">Atras</button>
           <?php echo form_close(); ?>
<div class="form-container my-5">
<div class="form-form">
            
                <div class="form-container ">
                    <div class="form-content col-md-12 py-3 bg-white">
		<h1>Modificar Curso</h1>

<?php
foreach ($infocurso->result() as $row) {
	echo form_open_multipart('curso/modificarcursobd'); ?>
	<div id="username-field" class="field-wrapper input">
	 <input type="hidden" name="idCurso" class="form-control" value="<?php echo $row->idCurso; ?>">
   <legend>Datos</legend>
	<label>Nombre: </label>
	<input type="text" name="curso" class="form-control" value="<?php echo $row->curso;?>"><br>
	<label>Cantidad: </label>
    <input type="text" name="cantidad" class="form-control" value="<?php echo $row->cantidad;?>"><br>
       <label>Fecha: </label>
    <input type="date" name="fechaActualizacion" class="form-control">
    <label>Horario: </label>
    <input type="text" name="horario" class="form-control" value="<?php echo $row->horario;?>"><br>
 </div>
	<div class="d-grid gap-2">
  <button type="submit" class="btn btn-primary">Modificar Equipo</button>
</div>
  <?php echo form_close();
}
?>


	</div>
</div>
</div>
</div>
</div>
