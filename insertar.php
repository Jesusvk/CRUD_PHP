<?php include 'cabecera.php'; ?>
<?php 
			echo '<h1>Insetar datos a DB </h1>';
			echo "<div class='jum'>";
			include "conexiones.php";
			include "mysql_datos.php";
    		$peticion = "INSERT INTO alumnos VALUES(
                NULL,
                '".$_POST['nombre']."',
                ".$_POST['edad'].",
                '".$_POST['correo']."')";
    		crear_sentencia($conexion,$peticion," insercion de datos");
    		echo'<a href="/">Regresar</a>';
    		echo "</div>";
			
?>
<?php include 'pie.php'; ?>