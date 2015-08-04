<?php include 'cabecera.php'; ?>
<?php 
			echo '<h1>Modiciar Alumno en DB </h1>';
			echo "<div class='jum'>";
			include "conexiones.php";
			include "mysql_datos.php";
    		$peticion = "UPDATE alumnos set nombre='".$_POST['nombre']."', edad =".$_POST['edad'].", correo='".$_POST['correo']."' where id =".$_POST['id'];
    		modificar($conexion,$peticion);
    		echo'<a href="/">Regresar</a>';
    		echo "</div>";
?>
<?php include 'pie.php'; ?>