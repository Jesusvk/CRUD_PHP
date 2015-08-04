<?php

	/*
	Aqui creamos las varibles con el nombre de la base de datos, la contraseña, el usuario, la direccion del servidor o localhost en caso de usar la misma pc
	*/
	$base_datos = "ejemplo_db";
	$pass = "";
	$usuario = 'root';
	$servidor = 'localhost';
	$conexion = mysqli_connect($servidor,$usuario,$pass,$base_datos);
	/**
	*  Verificar si la conexion es correcta
	*/
	function funcion_conexion($con){
		if ($con == true){
			echo '<p>La conexion ha sido un exito</p>';
		}else if($con == false){
			die('<p>No pudo conectarse: </p>' . mysql_error());
		}
	}
	#Para crear las tablas usamos la siguiente instruccion, Se comenta para evitar repetir pasos no necesarios
	#include 'crear_db.php';
?>