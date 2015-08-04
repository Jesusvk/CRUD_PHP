<?php
	include 'cabecera.php';
	echo '<h1>Pagina de ejemplo </h1>';
	echo "<div class='jum'>";
	echo'<a href="crear_db.php">Crear Base de datos</a>';
	echo'<a href="insertar_db.php">Insertar Datos a la Base</a>';
	echo'<a href="buscar_id.php">Ver Datos de la Base</a>';
	echo'<a href="editar.php">Editar Datos de la Base</a>';
	echo'<a href="eliminar.php">Eliminar Datos de la Base</a>';
	echo "</div>";
	include 'pie.php';
?>