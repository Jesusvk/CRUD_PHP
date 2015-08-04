<?php
	#Para evitar reescribir codigo ocupamos una funcion que contatene los parametros que le pidamos
	function crear_sentencia($conexion,$peticion,$creacion){
		$resultado = mysqli_query($conexion,$peticion);
		if ($resultado) {
			echo'<p>La '.$creacion.' ha sido creada</p>';
		}else{
			echo "<p>" . mysqli_error($conexion) . "</p>";
		}
	}
	function buscar($conexion,$peticion){
		$resultado = mysqli_query($conexion,$peticion);
		if ($resultado) {
			return $fila = mysqli_fetch_array($resultado);
		}else if($resultado == false){
			echo "<p>" . mysqli_error($conexion) . "</p>";
			return "";
		}
		return "";
	}
	function modificar($conexion,$peticion){
		$resultado = mysqli_query($conexion,$peticion);
		if ($resultado) {
			echo'<p>La modificacion ha sido realizada</p>';
		}else{
			echo "<p>" . mysqli_error($conexion) . "</p>";
		}
	}
	function eliminar($conexion,$peticion){
		$resultado = mysqli_query($conexion,$peticion);
		if ($resultado) {
			echo'<p>La eliminacion ha sido realizada</p>';
		}else{
			echo "<p>" . mysqli_error($conexion) . "</p>";
		}
	}
?>