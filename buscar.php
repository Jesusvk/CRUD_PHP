<?php include 'cabecera.php'; ?>
<?php 
			echo '<h1>Buscar Alumno en DB </h1>';
			echo "<div class='jum'>";
			include "conexiones.php";
			include "mysql_datos.php";
    		$peticion = "SELECT * FROM alumnos WHERE id ='".$_POST['id']."'";
    		$resultado = buscar($conexion,$peticion);
    		if($resultado['nombre'] == ""){
                echo "<p>No existe en la bd ese id</p> ";
            }else{
                echo '<p>'.$resultado['id'].'</p>';
                echo '<p>'.$resultado['nombre'].'</p>';
                echo '<p>'.$resultado['correo'].'</p>';
                echo '<p>'.$resultado['edad'].'</p>';
            }
            echo'<a href="/">Regresar</a>';
    		echo "</div>";
?>
<?php include 'pie.php'; ?>