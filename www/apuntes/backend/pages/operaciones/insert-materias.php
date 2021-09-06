<?php
	include_once("../../php/conexion.php");
	$query = "SELECT permiso FROM usuarios WHERE id_usuario=1";
	$consulta = $conexion -> query($query);
	$row = $consulta -> fetch_assoc();
	if ($row['permiso'] == 1) {
		include_once("../../php/conexion.php");
		if (isset($_POST['subir'])) {
			$name = $_POST['name'];
			$year = $_POST['year'];
			$division = $_POST['division'];
			$especiality = $_POST['especiality'];
			$hours = $_POST['hours'];
			$query = "INSERT INTO subjects (materia, anio, division, especialidad, hours) VALUES ('$name', '$year', '$division', '$especiality', '$hours')";
			$consulta = $conexion -> query($query);
		}
		header("Location: ../admin-materias.php");
	}
	else{
		header("Location: ../../index.php");
	}
?>
