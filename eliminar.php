<?php include 'cabecera.php'; ?>
<h1>Modificar Alumnos</h1>
<form method="POST" action="drop.php">
	<div class="formulario">
	<label>id</label>
	<input type="number" name="id" placeholder="ID del usuario" required min = 0 max= 999>
	</div>
	<div class="formulario">
	<button type="submit">Submit</button>
	</div>
</form>
<?php include 'pie.php'; ?>