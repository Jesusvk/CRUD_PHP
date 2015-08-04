<?php include 'cabecera.php'; ?>
<?php 
			echo '<h1>Eliminar Alumno en DB </h1>';
			echo "<div class='jum'>";
			include "conexiones.php";
			include "mysql_datos.php";
    		$peticion = "DELETE FROM alumnos WHERE id = ".$_POST['id'];
    		eliminar($conexion,$peticion);
    		echo'<a href="/">Regresar</a>';
    		echo "</div>";
?>
<?php include 'pie.php'; ?>