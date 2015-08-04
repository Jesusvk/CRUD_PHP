<?php include 'cabecera.php'; ?>
<h1>Insertar Alumnos</h1>
<form method="POST" action="/insertar.php" >
	<div class="formulario">
	<label>Correo</label>
	<input type="email" name="correo" placeholder="Correo" required>
</div>
<div class="formulario">
	<label>Edad</label>
	<input type="number" name="edad" placeholder="Edad" min="5" max = "99" required>
</div>
<div class="formulario">
	<label>Nombre</label>
	<input type="text" name="nombre" placeholder="nombre" required>
</div>
<div class="formulario">
	<button type="submit">Submit</button>
</div>
</form>
<?php include 'pie.php'; ?>