<?php
	include_once("conexion.php");
	$query = "SELECT estado FROM usuarios WHERE id_usuario=1";
	$consulta = $conexion -> query($query);
	$row = $consulta -> fetch_assoc();
	if ($row['estado'] == 1) {
		include_once("conexion.php");
		if (isset($_POST['subir'])) {
			$nombre_archivo = time()."-".$_FILES['archivo']['name'];
			$profesor = $_POST['profesor'];
			$materia = $_POST['materia'];
			$query = "INSERT INTO files (archivo, id_profesor, id_materia) VALUES ('$nombre_archivo', '$profesor', '$materia')";
			$consulta = $conexion -> query($query);
			if (is_uploaded_file($_FILES['archivo']['tmp_name'])) {
				move_uploaded_file($_FILES['archivo']['tmp_name'], '../archivos/'.$nombre_archivo );
			}
		}
		header("Location: ../index.php");
	}
	else{
		header("Location: ../inic_ses.html");
	}
?>