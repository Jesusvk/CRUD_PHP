<?php include 'cabecera.php'; 
			include "conexiones.php";
			include "mysql_datos.php";
			$peticion = "SELECT * FROM alumnos WHERE id ='".$_POST['id']."'";
    		$resultado = buscar($conexion,$peticion);
    		if($resultado['nombre'] == ""){
    			echo'<div class="jum">';
                echo "<p>No existe en la bd ese id</p> ";
                echo'<a href="/">Regresar</a></div>';
            }else{
                echo '<h1>Modificar Alumno '.$resultado['id'].'</h1>
				<form method="POST" action="modificar_alumno.php" >
					<div class="formulario">
					<label>Correo</label>
					<input type="email" name="correo" placeholder="Correo" required value = '.$resultado['correo'].'>
				</div>
				<input type="hidden" name="id" placeholder="Correo" required value = '.$resultado['id'].'>
				<div class="formulario">
					<label>Edad</label>
					<input type="number" name="edad" placeholder="Edad" min="5" max = "99" required value = '.$resultado['edad'].'>
				</div>
				<div class="formulario">
					<label>Nombre</label>
					<input type="text" name="nombre" placeholder="nombre" required value = '.$resultado['nombre'].'>
				</div>
				<div class="formulario">
					<button type="submit">Submit</button>
				</div>
				</form>';
            }
            ?>
<?php include 'pie.php'; ?>