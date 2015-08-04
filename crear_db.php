<?php include 'cabecera.php'; ?>
<?php 
#Realizamos la conexion a la DB
	echo '<h1>Crear DB </h1>';
	echo "<div class='jum'>";
	include "conexiones.php";
	include "mysql_datos.php";
	# En caso de que algun parametro este mal, aparecera un error por lo tanto verificar estos datos para una conexion
	#Comentar la siquiente linea para que no muestre resultado
	funcion_conexion($conexion);
	#Creamos la base de datos si no existe
	crear_sentencia($conexion,$peticion = "CREATE DATABASE IF NOT EXISTS ejemplo_db","Base de datos","base de datos");
	#Creamos la tabla de alumnos si no existe, en caso de que exista lo confirmara
	crear_sentencia($conexion,$peticion_table ="CREATE TABLE `ejemplo_db`.`alumnos` ( `id` INT NOT NULL AUTO_INCREMENT , `nombre` TEXT NOT NULL , `edad` INT NULL , `correo` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB; ","Tabla Alumnos");
	echo'<a href="/">Regresar</a>';
	echo "</div>";
?>
<?php include 'pie.php'; ?>